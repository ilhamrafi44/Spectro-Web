<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page_name = 'List User';

        return view('home', compact('page_name'));
    }

    public function profile()
    {
        $page_name = "My Profile";
        return view('user.profile', compact('page_name'));
    }

    public function settings()
    {
        return view('user.profile');
    }
}