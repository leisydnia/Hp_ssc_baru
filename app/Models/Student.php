<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Tentukan kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'nim',
        'faculty',
        'major',
        'status',
        // tambahkan kolom lain sesuai kebutuhan
    ];

    // Relasi dengan model Borrowing (jika diperlukan)
    public function borrowings()
    {
        return $this->belongsToMany(Borrowing::class);
    }
}
