<?php

namespace App\Http\Controllers;

use App\Models\Membros;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\MembroController;
use App\Models\Calendar;
use App\Models\Clients;
use App\Models\Procedure;

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

        $total = 0;

        foreach ($data['price'] as $item) {
            // Separa os preços em um array
            $prices = explode(',', $item['price']);

            // Soma os preços convertidos para float
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
