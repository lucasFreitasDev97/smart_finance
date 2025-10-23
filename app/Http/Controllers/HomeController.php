<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function home(): View
    {
        return view('welcome');
    }

    public function dashboard(): View
    {
        return view('dashboard');
    }
}
