<?php
namespace App\Services;

use App\Models\User;
use Hash;

class UserServices {



    public static function createGuest($username, $email) {

        $user = User::firstOrCreate(
            ['email' => $email],
            [
                'username' => $username,
                'password' => Hash::make('123456'),
                'role' => 'guest'
            ],
        );

        return $user;
    }



    public static function getUserByEmail($email) {

        if (User::where('email', $email)->exists()) {
            $user = User::where('email', $email)->first();
            return $user;
        }

        return back()->withErrors('Guest Not Found');
    }



}



?>
