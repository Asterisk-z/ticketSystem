<?php
namespace App\Services;

use App\Models\User;
use Hash;

class ApiResponseServices {




    public static function error($status, $message, $fix) {

        $response = [
            "status" => $status,
            "message" => $message,
            "fix" => $fix,
        ];

        return json_encode($response);
    }



    public static function createUserSuccess($user, $message) {

        $response = [
            "status" => 'success',
            "message" => $message,
            "username" => $user->username,
            "email" => $user->email,
        ];

        return json_encode($response);
    }

    public static function successTicket($user, $ticket) {

        $response = [
            "status" => 'success',
            "message" => 'ticket successfully sent',
            "email" => $user->email,
            "ticket_id" => $ticket->uuid,
            "ticket_subject" => $ticket->subject,
            "ticket_message" => $ticket->message,
        ];

        return json_encode($response);
    }

    public static function successReply($reply, $ticket) {

        $response = [
            "status" => 'success',
            "email" => $ticket->user->email,
            "ticket_id" => $ticket->uuid,
            "ticket_subject" => $ticket->subject,
            "ticket_message" => $ticket->message,
            "reply" => $reply
        ];

        return json_encode($response);
    }



}



?>
