<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
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
     * [create gets the create page]
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create():\Illuminate\Contracts\Support\Renderable
    {
        return view("pages.create");
    }
}
