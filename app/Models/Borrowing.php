<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $fillable = [
        'ukm_name',
        'event_name',
        'event_date',
        // tambahkan kolom lain yang dapat diisi secara massal sesuai kebutuhan
    ];

    // Relasi dengan model Mahasiswa (jika diperlukan)
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
