<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $fillable = ['admin_id','pengaduan_id','tanggal_tanggapan','laporan_tanggapan','status'];
}
