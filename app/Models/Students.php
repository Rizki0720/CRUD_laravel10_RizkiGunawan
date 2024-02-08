<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'name',
        'nim_mahasiswa',
        'angkatan_mahasiswa',
        'judul_mahasiswa',
        'prodi_mahasiswa',
        'pembimbing_mahasiswa',
    ];
}
