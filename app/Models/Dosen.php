<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = "md_dosen";

    protected $fillable = [
        'nik',
        'nip',
        'nama_lengkap',
        'email',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'tlp',
        'status_kepegawaian',
        'pengampu'
    ];
}
