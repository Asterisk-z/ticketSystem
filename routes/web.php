<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminCategoriesController;
use App\Http\Controllers\AdminArticlesController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminReplyController;
use App\Http\Controllers\AdminTicketsController;
use App\Http\Controllers\AdminTicketController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\GuestReplyComtroller;
use App\Http\Controllers\CustomerTicketController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome')->name('/');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/financial', 'financial')->name('financial');
Route::view('/business-set-up', 'business-set-up')->name('business-set-up');
Route::view('/payroll-services', 'payroll-services')->name('payroll');
Route::view('/income-tax-services', 'income-tax')->name('income-tax');
Route::view('/canada-income-tax', 'canada-income-tax')->name('canada-income-tax');
Route::view('/bookkeeping-service', 'bookkeeping')->name('bookkeeping');
Route::view('/canada-business-set-up', 'canada-business')->name('canada-business');
Route::view('/franchise-accounting', 'franchise-accounting')->name('franchise-accounting');
Route::view('/accounting-professionals', 'accounting-professionals')->name('accounting-professionals');
Route::view('/accounting-realestate', 'accounting-realestate')->name('accounting-realestate');
Route::view('/accounting-investment', 'accounting-investment')->name('accounting-investment');
Route::view('/general-accounting', 'general-accounting')->name('general-accounting');
// Route::view('/contact', 'contact')->name('contact');

Auth::routes();

Route::get('/ticket', [TicketsController::class, 'index'])->name('ticket');

Route::post('/ticket/guest/new', [TicketController::class, 'store'])->name('send.guest.ticket');

Route::post('/ticket/track', [TicketController::class, 'track'])->name('track');

Route::middleware('guest.session')->prefix('guest')->name('guest.')->group(function () {

    Route::get('/', [GuestController::class, 'index'])->name('dashboard');

    Route::get('/{ticket}/ticket', [GuestController::class, 'show'])->name('ticket');

    Route::post('/new/request', [GuestController::class, 'store'])->name('new.request');

    Route::post('/comment', [GuestReplyComtroller::class, 'store'])->name('comment');

});

Route::middleware(['auth', 'customer'])->prefix('customer')->name('customer.')->group(function () {

    Route::get('/', [App\Http\Controllers\CustomerController::class, 'index'])->name('dashboard');

    Route::get('/tickets',    [CustomerTicketController::class, 'index'])->name('tickets');

    Route::get('/tickets/open',    [CustomerTicketController::class, 'open'])->name('tickets.open');

    Route::get('/tickets/closed',    [CustomerTicketController::class, 'closed'])->name('tickets.closed');

    Route::get('/tickets/create',    [CustomerTicketController::class, 'create'])->name('create.ticket');

    Route::get('/tickets/show/{ticket}',    [CustomerTicketController::class, 'show'])->name('show.ticket');

    Route::post('/tickets/store',    [CustomerTicketController::class, 'store'])->name('store.ticket');

    Route::post('/comment/store',    [CustomerTicketController::class, 'storecomment'])->name('store.comment');



});

Route::middleware(['auth', 'agent'])->prefix('agent')->name('agent.')->group(function () {

    Route::get('/', [App\Http\Controllers\AgentController::class, 'index'])->name('dashboard');

    Route::get('/articles',    [AgentArticlesController::class, 'index'])->name('articles');

    Route::get('/users',    [AgentUsersController::class, 'index'])->name('users');

    Route::get('/tickets',    [AgentTicketsController::class, 'index'])->name('tickets');


});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/categories',    [AdminCategoriesController::class, 'index'])->name('categories');

    Route::get('/articles',    [AdminArticlesController::class, 'index'])->name('articles');

    Route::get('/users',    [AdminUsersController::class, 'index'])->name('users');

    Route::post('/users/store',    [AdminUsersController::class, 'store'])->name('user.store');

    Route::get('/users/agent',    [AdminUsersController::class, 'agent'])->name('users.agent');

    Route::get('/users/customer',    [AdminUsersController::class, 'customer'])->name('users.customer');

    Route::get('/users/guest',    [AdminUsersController::class, 'guest'])->name('users.guest');

    Route::get('/users/{id}/show',    [AdminUserController::class, 'show'])->name('show.user');

    Route::get('/tickets',    [AdminTicketsController::class, 'index'])->name('tickets');

    Route::get('/tickets/open',    [AdminTicketsController::class, 'open'])->name('tickets.open');

    Route::get('/tickets/closed',    [AdminTicketsController::class, 'closed'])->name('tickets.closed');

    Route::get('/tickets/assigned',    [AdminTicketsController::class, 'unassigned'])->name('tickets.assigned');

    Route::get('/tickets/mine',    [AdminTicketsController::class, 'mine'])->name('tickets.mine');

    Route::get('/ticket/{ticket}/show',    [AdminTicketsController::class, 'show'])->name('ticket.show');

    Route::post('/user/reply',    [AdminReplyController::class, 'store'])->name('reply.user');

    Route::post('/ticket/close',    [AdminTicketController::class, 'close'])->name('ticket.close');


});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


