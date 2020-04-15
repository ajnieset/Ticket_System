<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //collect all tickets
        $tickets = Ticket::all();

        //serve the view with showing all tickets
        return view('ticket.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return the create view
        return view('ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //required fields
        $request->validate([
            'title'=>'required',
            'ticket_number'=>'required',
            'description'=>'required',
            'assigned'=>'nullable',
            'created_date'=>'required',
            'completed_date'=>'nullable|date',
            'status'=>'nullable',
        ]);

        //create the ticket
        Ticket::create($request->all());

        //redirect to the list view on success
        return redirect('ticket')
        ->with('success', 'Ticket Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find the ticket by the id
        $ticket = Ticket::find($id);

        //return single card view of the ticket
        return view('ticket/show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the ticket by the id
        $ticket = Ticket::find($id);

        //return single card view to edit the ticket
        return view('ticket/update', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //required fields
        $ticket = $request->validate([
            'title'=>'required',
            'ticket_number'=>'required',
            'description'=>'required',
            'assigned'=>'nullable',
            'created_date'=>'required',
            'completed_date'=>'nullable|date',
            'status'=>'nullable',
        ]);

        //update selected ticket the ticket
        Ticket::where('id', $id)->update($ticket);

        //redirect to the list view on success
        return redirect('ticket')
        ->with('success', 'Ticket Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find the ticket
        $ticket = Ticket::find($id);

        //delete the tickets
        $ticket->delete();

        //redirect with a success message
        return redirect('ticket')
        ->with('success', 'Ticket Successfully Deleted');
    }
}
