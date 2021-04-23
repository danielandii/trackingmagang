<?php

namespace App\Model;
use DB;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $fillable = ['no_tiket','tanggal_pengaduan','email','laporan_pengaduan','file','status'];

    public static function getId()
    {
        return $getId = DB::table('pengaduans')->orderBy('no_tiket','DESC')->take(1)->get();
    }
}
