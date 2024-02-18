<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $fillable = [
        'id_mahasiswa',
        'nama_mahasiswa',
        'alamat_mahasiswa',
        'nomor_telepon',
        'email_mahasiswa',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
    ];
}
