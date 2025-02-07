<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\FunctionLike;

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
     * Show the application dashboard.hf
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */

        public function index()
    {
        return view('home');
    }

        public Function myShow()
    {
        return view('main_page');
    }

}
