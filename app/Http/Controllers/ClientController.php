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

    public function newClient(Request $request)
    {
        $data = Clients::find($request['id']);
        return view('client.newClient', [
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $client = Clients::find($request['id']);
        $client['name'] = $request->name;
        $client['age'] = $request->age;
        $client['whatsapp'] = $request->whatsapp;
        $client->save();
        return redirect('/clientes');
    }

    public function save(Request $request)
    {
        $clients = new Clients;
        $clients['name'] = $request->name;
        $clients['age'] = $request->age;
        $clients['whatsapp'] = $request->whatsapp;

        $clients->save();

        return redirect('/clientes');
    }

    public function delete($id)
    {
        $clients = Clients::find($id);
        $clients->delete();
        return redirect('/clientes');

    }
}
