<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class AssetController extends Controller
{
    public function index()
    {
        $data = [
            'Authorization' => 'Bearer ' . Session::get('api_token'),
        ];

        // dd($data);

        try {
            // Mengirim permintaan GET ke API
            $response = Http::withHeaders(
                ['Authorization' => 'Bearer ' . Session::get('api_token')]
            )->get(env('API_BASE_URL') . '/students/current');

            // dd($response->json());

            // Memeriksa apakah respons sukses
            if ($response->successful()) {
                // Mengambil data dari respons
                $user = $response->json();
                $user = $user['users'][0];
            } else {
                // Menangani kesalahan respons
                $user = [];
                // Anda bisa menambahkan pesan kesalahan atau log disini
            }
        } catch (\Exception $e) {
            // Menangani kesalahan koneksi atau permintaan
            $user = [];
            // dd($e->getMessage());
            // Anda bisa menambahkan pesan kesalahan atau log disini
        }

        return view('peminjaman.asset.index', [
            'title' => 'SSC | Form peminjaman asset'
        ]);
    }

    public function index2()
    {
        return view('peminjaman.asset.index2', [
            'title' => 'SSC | Form peminjaman asset 2'
        ]);
    }
}
