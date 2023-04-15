<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public function index()
    {
        $procedure = Procedure::all();

        return view('procedure.procedures', [
            'data' => $procedure
        ]);
    }

    public function newProcedure(Request $request)
    {
        $data = Procedure::find($request['id']);
        return view('procedure.newProcedure', [
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $procedure = Procedure::find($request['id']);
        $procedure['name'] = $request->name;
        $procedure['price'] = $request->price;
        $procedure['qtd_session'] = $request->qtd_session;
        $procedure['days_return'] = $request->days_return;
        $procedure->save();
        return redirect('/procedimentos');
    }

    public function save(Request $request)
    {
        $procedure = new Procedure;
        $procedure['name'] = $request->name;
        $procedure['price'] = $request->price;
        $procedure['qtd_session'] = $request->qtd_session;
        $procedure['days_return'] = $request->days_return;

        $procedure->save();

        return redirect('/procedimentos');
    }

    public function delete($id)
    {
        $procedure = Procedure::find($id);
        $procedure->delete();
        return redirect('/procedimentos');
    }
}
