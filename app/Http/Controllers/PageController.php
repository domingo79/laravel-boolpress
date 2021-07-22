<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('guest.welcome');
    }
    public function about()
    {
        return view('guest.adout');
    }
    public function formcontacts()
    {
        return view('guest.formcontacts');
    }
}
