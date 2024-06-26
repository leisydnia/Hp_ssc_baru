<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home()
    {
        // dd(Session::all());
        return view('home', [
            'title' => 'SSC | Home'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'SSC | About'
        ]); // Pastikan Anda memiliki view yang bernama 'about.blade.php'
    }
}
