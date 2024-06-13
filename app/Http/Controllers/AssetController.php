<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Exception\HttpException;

class AssetController extends Controller
{
    public function index()
    {
        $bearerToken = Session::get('api_token');
        $client = new Client([
            'base_uri' => env('API_BASE_URL'),
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $bearerToken,
            ],
            'http_errors' => false,
        ]);
        try {
            // Mengirim permintaan GET ke API
            $response = $client->get('students/current', ['verify' => false]);
            $statusCode = $response->getStatusCode();
            $bodyContents = json_decode($response->getBody()->getContents(), true);
            // dd($bodyContents);
            // Memeriksa apakah respons sukses
            if ($statusCode == 200) {
                // Mengambil data dari respons
                $user = $bodyContents['data'];
                // $user = $user['users'][0];
            } else {
                // Menangani kesalahan respons
                $user = [];
                // Anda bisa menambahkan pesan kesalahan atau log disini
            }
        } catch (\Exception $e) {
            // Menangani kesalahan koneksi atau permintaan
            dd($e->getMessage());
            // Anda bisa menambahkan pesan kesalahan atau log disini
        }
        // dd($user);
        return view('peminjaman.asset.index', [
            'title' => 'SSC | Form peminjaman asset',
            'studentId' => $user['id']
        ]);
    }

    public function index2()
    {
        return view('peminjaman.asset.index2', [
            'title' => 'SSC | Form peminjaman asset 2'
        ]);
    }

    public function store1(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'required',
            'ukm_name' => 'required|string|max:100',
            'event_name' => 'required|string|max:200',
            'event_date' => 'required|date',
            'num_of_participants' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect('form')
                ->withErrors($validator)
                ->withInput();
        }
        $data = [
            'student_id' => $request->input('student_id'),
            'ukm_name' => $request->input('ukm_name'),
            'event_name' => $request->input('event_name'),
            'event_date' => $request->input('event_date'),
            'num_of_participants' => $request->input('num_of_participants'),
        ];

        Session::put('borrowing_step1', $data);
        return redirect()->route('index2');
    }

    public function store2(Request $request)
    {
        // dd($request);
        $validator = Validator::make(
            $request->all(),
            [
                'assets' => 'required|array|min:1',
                'assets.*.asset_id' => 'required',
                'assets.*.start_date' => 'required|date',
                'assets.*.end_date' => 'required|date|after:assets.*.start_date',
                'assets.*.description' => 'nullable|string',
                'assets.*.num' => 'required|integer|min:1',
            ],
            [
                'assets.*.asset_id.required' => 'Asset field is required.',
                'assets.*.asset_id.exists' => 'The selected asset is invalid.',
                'assets.*.start_date.required' => 'Start date field is required.',
                'assets.*.start_date.date' => 'Start date must be a valid date.',
                'assets.*.end_date.required' => 'End date field is required.',
                'assets.*.end_date.date' => 'End date must be a valid date.',
                'assets.*.end_date.after' => 'End date must be after start date.',
                'assets.*.description.string' => 'Description must be a string.',
                'assets.*.num.required' => 'Number of assets field is required.',
                'assets.*.num.integer' => 'Number of assets must be an integer.',
                'assets.*.num.min' => 'Number of assets must be at least 1.',
            ]
        );
        if ($validator->fails()) {
            return redirect('form')
                ->withErrors($validator)
                ->withInput();
        }
        $borrowing = Session::get('borrowing_step1', []);
        $borrowing['assets'] = $validator->getData()['assets'];
        Session::put('borrowing_step2', $validator->getData()['assets']);
        $bearerToken = Session::get('api_token');


        $client = new Client([
            'base_uri' => env('API_BASE_URL'),
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $bearerToken,
            ],
            'http_errors' => false,
        ]);
        try {

            $resp = $client->post('borrowings', [
                'json' => $borrowing,
                'verify' => false
            ]);
            // dd($resp);
            $statusCode = $resp->getStatusCode();
            $bodyContents = json_decode($resp->getBody()->getContents(), true);
            if ($statusCode >= 500) {
                $errors = ['errors' => ['message' => 'Server error occurred. Please try again later.']];
                throw new HttpException(
                    statusCode: $statusCode,
                    message: json_encode($errors)
                );
            }
            if ($statusCode >= 400 && $statusCode < 500) {
                $errors = $resp['bodyContents'];
                throw new HttpException(
                    statusCode: $statusCode,
                    message: $errors
                );
            }
            // dd($resp);
            Session::forget('borrowing_step1');
            Session::forget('borrowing_step2');
            return redirect()->route('home')->with('success', 'Borrowing created successfully');
        } catch (HttpException $e) {
            // handle http exception
            $errors = json_decode($e->getMessage(), true);
            $error_messages = $errors['errors'];
            return redirect()->back()->withErrors($error_messages)->withInput();
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->withErrors(['message' => 'An error occurred. Please try again later.']);
        }
    }
}
