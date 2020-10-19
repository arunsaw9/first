<?php

namespace App\Http\Controllers;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   
       //  echo "<pre>";
       //  $user = $request->user();
       //  print_r($user->givePermissionsTo('create-tasks')->toArray());
       //  dd($user->hasRole('developer'));
       // print_r($request->user()->toArray());
        return view('home');
    }
}
