<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Tanggapan extends Model
{
    protected $fillable = ['pengaduan_tiket','tanggal_tanggapan','laporan_tanggapan'];

    public function pengaduan()
    {
        return $this->belongsTo('App\Model\Pengaduan');
    }

   
}
