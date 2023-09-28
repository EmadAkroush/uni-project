<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TticketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return Ticket::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          return  Ticket::create([
            'numbers' => $request->numbers ,
            'firstname' => $request->firstname ,
            'lastname' => $request->lastname ,
            'kodemeli' => $request->kodemeli ,
            'user_id' => $request->user_id
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $Ticket)
    {
         return $Ticket;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    // public function userTicket(Ticket $Ticket){
    //   return $Ticket->load('usersTicket');
    // }
}
