<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $fillable = ['tanggal_pengaduan','email','laporan_pengaduan','file','status'];
}
