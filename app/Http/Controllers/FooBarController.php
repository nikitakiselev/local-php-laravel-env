<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooBarController extends Controller
{
    public function index()
    {
        return view('foobar');
    }
}
