<?php
namespace App\Services;

use App\Models\User;
use Hash;

class RandomServices {



    public static function number() {

        $time = time() * 99999;
        return substr($time,-12,6);

    }



}



?>
