<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $client = Clients::all();
        return view(
            'client.clients',
            [
                'data' => $client,
            ]
        );
    }

    public function newClient()
    {
        return view('client.newClient');
    }

    public function save(Request $request)
    {
        $clients = new Clients;
        $clients['name'] = $request->name;
        $clients['age'] = $request->age;
        $clients['whatsapp'] = $request->whatsapp;

        $clients->save();

        return redirect('/dashboard');
    }
}
