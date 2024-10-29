<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'telepon',
        'pekerjaan'
    ];
}
