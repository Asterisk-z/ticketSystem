<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ApiServices;

class TicketController extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $
     * @param  int  $
     * @return \Illuminate\Http\Response
     */

    public function ticket(Request $request)
    {

        return ApiServices::createTicket(request('email'), request('subject'), request('message'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $
     * @param  int  $
     * @return \Illuminate\Http\Response
     */

    public function reply(Request $request)
    {

        return ApiServices::createReply(request('ticket_uuid'), request('comment'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $
     * @param  int  $
     * @return \Illuminate\Http\Response
     */

    public function replies(Request $request)
    {

        return ApiServices::getReplies(request('ticket_uuid'));

    }

}




