<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";

    // field-dield yang di perbolehkan
    protected $fillable = [
        'nim',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'fakultas', 'jurusan', 'ipk', 'photo'
    ];

    //kalau kosong di bolehkan input semua
    // protected $guarded=[];
}
