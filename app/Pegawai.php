<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = [

        'id', 'pegawai_nm', 'jk', 'agama', 'tmp_lahir', 'tgl_lahir', 'alamat', 'jabatan', 'devisi'

    ];
}
