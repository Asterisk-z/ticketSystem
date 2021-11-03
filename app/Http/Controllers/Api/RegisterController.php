<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ApiResponseServices;
use App\Services\ApiServices;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function create(Request $request)
    {


        return ApiServices::createUser(request('username'), request('email'), request('password'));


    }

}
