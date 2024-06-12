<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrowing;

class BorrowingController extends Controller
{
    public function show($id)
    {

        // $borrowing = Borrowing::findOrFail($id);
        // // ambil data peminjaman mahasiswa terkait
        // $students = $borrowing->students;
        return view('show', compact('borrowing', 'students'));
    }
}
