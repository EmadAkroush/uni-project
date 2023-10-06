<?php

namespace App\Http\Controllers;

use App\Models\TicketList;
use Illuminate\Http\Request;


class TicketListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TicketList::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return  TicketList::create([
            'from' => $request->from ,
            'to' => $request->to ,
            'Move' => $request->Move ,
            'Capacity' => $request->Capacity ,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TicketListController $ticketListController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TicketListController $ticketListController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketListController $ticketListController)
    {
        //
    }
}
