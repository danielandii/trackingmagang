<?php

namespace App\Model;
use DB;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $fillable = ['no_tiket','tanggal_pengaduan','email','laporan_pengaduan','file','status'];

    public static function getId()
    {
        return $getId = DB::table('pengaduans')->orderBy('id','DESC')->take(1)->get();
    }

    public function tanggapan()
    {
        return $this->hasMany('App\Model\Tanggapan')->orderBy('created_at','DESC');
    }
}
