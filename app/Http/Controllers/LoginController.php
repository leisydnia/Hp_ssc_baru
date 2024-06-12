<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login'); // Pastikan Anda memiliki view yang bernama 'about.blade.php'
    }
}
