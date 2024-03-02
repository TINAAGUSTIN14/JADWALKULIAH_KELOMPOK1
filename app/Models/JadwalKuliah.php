<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    protected $fillable = [
        'kode',
        'kelas',
        'mata_kuliah',
        'dosen_pengajar',
        'hari',
        'waktu',
        
    ];
}
