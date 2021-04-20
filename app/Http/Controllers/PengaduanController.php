<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Pengaduan};

class PengaduanController extends Controller
{
    public function index()
    {
            return view('indexawal');
    }

    public function formPengaduan()
    {
            return view('pengaduan.index');
    }

    public function simpanPengaduan()
    {
            $data_pengaduan = Pengaduan::create(request()->all());
            return redirect()->to('/');
    }
}
