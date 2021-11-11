<?php
namespace App\Services;

use App\Models\Reply;
use App\Models\User;
use App\Models\Ticket;
use Hash;

class ApiServices {



    public static function createUser($username, $email, $password) {

        $validate = self::validateUser($email, $username, $password);

        if ($validate) {
            return $validate;
        }else {
            $user = User::create(
                [
                    'email' => $email,
                    'username' => $username,
                    'password' => Hash::make($password),
                    'role' => 'customer'
                ],
            );

            return ApiResponseServices::createUserSuccess($user, 'user created  successfully');
        }

    }

    public static function userCheck($email, $password) {

        if(!$email || !$password) {

            return  ApiResponseServices::error('error', 'incomplete information provided', 'provide all required fields');

        }else {
            $query = User::where('email', $email);

            if ($query->exists()) {

                return  ApiResponseServices::createUserSuccess($query->first(), 'user verified successfully');

            }else {

                return ApiResponseServices::error('error', 'user does not exist', 'provide another email');

            }
        }


    }

    public static function validateUser($email, $username, $password) {

        if(!$username || !$email || !$password) {

            return  ApiResponseServices::error('error', 'incomplete information provided', 'provide all required fields');

        }elseif (User::where('email', $email)->exists()) {

            return ApiResponseServices::error('error', 'Email exist', 'provide another email');

        }elseif (User::where('username', $username)->exists()) {

            return ApiResponseServices::error('error', 'Username exist', 'provide another username');

        }

        return false;
    }

    public static function createTicket($email, $subject, $message) {

        if(!$email || !$subject || !$message) {

            return  ApiResponseServices::error('error', 'incomplete information provided', 'provide all required fields');

        }else {

            $query = User::where('email', $email);

            if ($query->exists()) {

                $user = $query->first();

                $uuid = $user->id.RandomServices::number().$user->id;

                $ticket = $user->tickets()->create([
                        'subject' => $subject,
                        'message' => $message,
                        'uuid' => $uuid,
                    ]);

                return  ApiResponseServices::successTicket( $user, $ticket);

            }
        }


    }

    public static function createReply($uuid, $comment) {

        if(!$uuid || !$comment) {

            return  ApiResponseServices::error('error', 'incomplete information provided', 'provide all required fields');

        }else {

                $query = Ticket::where('uuid', $uuid);

                if (!$query->exists()) {

                    return  ApiResponseServices::error('error', 'Ticket id does not exist', 'provide correct ticket id');

                }else {

                    $ticket = $query->first();
                    $reply = $ticket->replies()->create([
                            'body' => $comment,
                            'user_id' => $ticket->user->id
                        ]);

                    if ($reply) {

                        $ticket->update([
                            'status' => 'OPEN'
                        ]);

                        return  ApiResponseServices::successReply( $reply, $ticket);
                    }


                }




        }


    }

    public static function getReplies($uuid) {

        if(!$uuid) {

            return  ApiResponseServices::error('error', 'incomplete information provided', 'provide all required fields');

        }else {

                $query = Ticket::where('uuid', $uuid);

                if (!$query->exists()) {

                    return  ApiResponseServices::error('error', 'Ticket id does not exist', 'provide correct ticket id');

                }else {

                    $ticket = $query->first();
                    $replies = Reply::where('ticket_id', $ticket->id)->pluck('body');

                    return  ApiResponseServices::successReply( $replies, $ticket);

                }




        }


    }

}



?>
