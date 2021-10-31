<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Services\RandomServices;
use Auth;
use Illuminate\Http\Request;

class CustomerTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::where('user_id', Auth::user()->id)->get();
        return view('backend.user.tickets', compact('tickets'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function open()
    {
        $tickets = Ticket::where('user_id', Auth::user()->id)->where('status', 'OPEN')->get();
        return view('backend.user.tickets', compact('tickets'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function closed()
    {
        $tickets = Ticket::where('user_id', Auth::user()->id)->where('status', 'CLOSED')->get();
        return view('backend.user.tickets', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'subject' => 'required',
            'message' => 'required'
        ]);

        $user = Auth::user();

        $uuid = $user->id.RandomServices::number().$user->id;

        $ticket = $user->tickets()->create([
                'subject' => $data['subject'],
                'message' => $data['message'],
                'uuid' => $uuid,
            ]);

        return back()->withSuccess('Ticket Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ticket)
    {
        $ticket = Ticket::where('uuid', request('ticket'))->first();
        return view('backend.user.ticket', compact('ticket'));
    }

    public function storecomment(Request $request)
    {
        $data = $request->validate([
            'comment' => 'required'
        ]);

        $ticket = Ticket::where('id', request('id'))->first();

        $user = Auth::user();


        $comment = $ticket->replies()->create([
                'body' => $data['comment'],
                'user_id' => $user->id,
            ]);

            $ticket->update([
                'status' => 'OPEN'
            ]);


        return back()->withSuccess('Ticket Created Successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
