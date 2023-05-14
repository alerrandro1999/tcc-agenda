<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Calendar;
use App\Models\Clients;
use App\Models\Procedure;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("/")->with('invalido', 'Usuário ou senha inválidos!');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        $data['client'] = Clients::count();
        $data['procedure'] = Procedure::count();
        $data['price'] = Calendar::where('status', 1)->get('price');

        $data['qtd_procedure'] = DB::table('calendar')
            ->select(
                DB::raw('GROUP_CONCAT(name_procedure SEPARATOR ",") as procedure_name'),
                DB::raw('COUNT(*) as total')
            )
            ->where('status', '=', 1)
            ->groupBy('date')
            ->get()
            ->map(function ($procedure) {
                $procedure->procedure_name = explode(',', $procedure->procedure_name);
                return $procedure;
            })
            ->flatMap(function ($procedure) {
                return $procedure->procedure_name;
            })
            ->groupBy(function ($procedure) {
                return $procedure;
            })
            ->map(function ($grouped_procedures) {
                $total = $grouped_procedures->count();
                $name = $grouped_procedures->first();
                return ['name' => $name, 'total' => $total];
            })
            ->values();

        $dados = $data['qtd_procedure'];

        $dados_formatados = array();

        array_push($dados_formatados, array('Task', 'Hours per Day'));

        foreach ($dados as $dado) {
            $nome = html_entity_decode($dado['name']);
            $total = (int) $dado['total'];
            array_push($dados_formatados, array($nome, $total));
        }
        $data['qtd_procedure'] = htmlspecialchars_decode(json_encode($dados_formatados, JSON_UNESCAPED_UNICODE));


        $total = 0;

        foreach ($data['price'] as $item) {
            $prices = explode(',', $item['price']);
            foreach ($prices as $price) {
                $total += (float) str_replace(',', '.', preg_replace('/[^0-9\.,]/', '', $price));
            }
        }

        $data['price'] = $total;

        $data['waiting'] = Calendar::where('status', null)->count();
        $data['done'] = Calendar::where('status', 1)->count();
        $data['canceled'] = Calendar::where('status', 0)->count();

        if (Auth::check()) {
            return view('dash', [
                'data' => $data,
            ]);
        }
        return redirect("/")->with('invalido', 'Você não tem permissão');
    }

    public function signOut()
    {
        Session()->flush();
        Auth::logout();

        return Redirect('/');
    }
}
