<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Clients;
use App\Models\Procedure;
use Illuminate\Http\Request;
use Alerrandro\Regex\RegexBr\Regex;

class CalendarController extends Controller
{
    public function index()
    {
        $calendar = Calendar::all();
        return view('calendar.calendar', [
            'data' => $calendar
        ]);
    }


    public function newService()
    {
        $client = Clients::all('id', 'name');
        $procedure = Procedure::all('id', 'name');

        return view('calendar.newService', [
            'client' => $client,
            'procedure' => $procedure
        ]);
    }

    public function save(Request $request)
    {

        $client = Clients::find($request['client']);
        $procedures = Procedure::whereIn('id', $request['procedure'])->get();

        foreach ($procedures as $procedure) {
            $proceduresName[] = $procedure->name;
            $proceduresPrice[] = $procedure->price;
        }

        $procedutreName = implode(',', $proceduresName);
        $procedutrePrice = implode(',', $proceduresPrice);

        $Calendar = new Calendar();
        $Calendar['client'] = $client->name;
        $Calendar['whatsapp'] = Regex::removerCaracteresEspeciais($client->whatsapp);
        $Calendar['procedure'] = $procedutreName;
        $Calendar['price'] = $procedutrePrice;
        $Calendar['date'] = $request['date'];
        $Calendar['time'] = $request['start'] . ' - ' . $request['end'];
        $Calendar['status'] = $request['status'];

        $Calendar->save();
        return redirect('/calendario');
    }

    public function update(Request $request)
    {
        $client = Calendar::find($request['id']);
        $client->save();
        return redirect('/clientes');
    }

    public function done(Request $request)
    {
        $calendar = Calendar::find($request['id']);
        $calendar['status'] = $request['status'];
        $calendar->save();
        return redirect('/calendario');
    }

    public function canceled(Request $request)
    {
        $calendar = Calendar::find($request['id']);
        $calendar['status'] = 0;
        $calendar->save();
        return redirect('/calendario');
    }
}
