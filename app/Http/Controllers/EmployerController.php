<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware('employer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
