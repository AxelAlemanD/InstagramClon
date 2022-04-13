<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\User;

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
        $suggestions = Follower::where('follower_id', '!=', $currentUser->id)
                                ->take(5)
                                ->get();

                                
        $follows = Arr::add($follows, 'currentUser', $currentUser);

        return view('Home.index', get_defined_vars());
    }

    /**
     * Search for users
     */
    public function search(Request $request)
    {
        $users = [];
        if($request->has('q')){
            $search = $request->q;
            $users = User::where('username', 'LIKE', "%$search%")
                        ->orWhere('first_name', 'LIKE', "%$search%")
                        ->orWhere('last_name', 'LIKE', "%$search%")
                        ->orWhere('email', 'LIKE', "%$search%")
                        ->get();
        }
        return response()->json($users);
    }
}
