<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ApiServices;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function verify(Request $request)
    {


        return ApiServices::userCheck(request('email'), request('password'));


    }
}
