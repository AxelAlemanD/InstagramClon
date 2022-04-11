<?php

namespace App\Http\Controllers;

use App\Models\Follower;
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
       # $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentUser = auth()->user();
        $follows =  Follower::getFollowing($currentUser->id);
        $suggestions = Follower::where('follower_id', '!=', $currentUser->id)->take(5)->get();

        return view('Home.index', get_defined_vars());
    }
}
