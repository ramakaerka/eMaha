<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'pelamar';
    protected $primaryKey = 'nik';
    protected $fillable = [
        'nik','nama','gender','tingkat_pendidikan','bidang_keahlian','gasal_21','genap_21','gasal_22'
    ];
}

