<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosens';

    protected $fillable = [
        'name',
        'nid',
        'dosen_penguji',
        'mahasiswa_skripsi',
        'judul_skripsi'
    ];
}
