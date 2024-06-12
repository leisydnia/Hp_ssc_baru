<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('about'); // Pastikan Anda memiliki view yang bernama 'about.blade.php'
    }
}
