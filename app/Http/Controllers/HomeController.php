<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::whereIn('role', ['customer', 'guest'])->count();

        $category = Category::count();

        $article = Article::count();

        $tickets = Ticket::all();

        $open = $tickets->where('status', 'OPEN')->count();
        $closed = $tickets->where('status', 'CLOSED')->count();

        return view('home', compact('users', 'tickets', 'open', 'closed', 'article', 'category'));
    }
}
