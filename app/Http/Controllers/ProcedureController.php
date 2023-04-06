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

    public function newProcedure()
    {
        return view('procedure.newProcedure');
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
}
