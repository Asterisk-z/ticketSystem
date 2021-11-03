<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['api'])->group(function(){
    Route::post('/register', [App\Http\Controllers\Api\RegisterController::class , 'create'] )->name('api.create.user');
    Route::post('/verify/user', [App\Http\Controllers\Api\LoginController::class , 'verify'] )->name('api.verify.user');
    Route::post('/ticket/create', [App\Http\Controllers\Api\TicketController::class , 'ticket'] )->name('api.ticket.create');
    Route::post('/reply/create', [App\Http\Controllers\Api\TicketController::class , 'reply'] )->name('api.reply.create');
    Route::post('/replies', [App\Http\Controllers\Api\TicketController::class , 'replies'] )->name('api.replies');
});
