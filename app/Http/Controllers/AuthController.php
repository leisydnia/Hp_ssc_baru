<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpKernel\Exception\HttpException;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginStore(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255'
        ]);
        try {
            $response = Http::post(env('API_BASE_URL') . 'students/login', $data);

            if ($response->successful()) {
                $users = $response->json();
                $users = $response['data'];

                Session::put('api_token', $users['token']);

                // add session
                return redirect('/home');
            } else {
                $users = [];
            }
        } catch (HttpException $e) {
            // handle Http Errors
            $errors = json_decode($e->getMessage(), true);
            $error_messages = $errors['errors'];
            return redirect()->back()->withErrors($error_messages)->withInput();
        } catch (\Exception $e) {
            // Handle  errors
            return redirect()->back()->withErrors(['Network error occurred. Please check your internet connection and try again.'])->withInput();
        }
    }
}
