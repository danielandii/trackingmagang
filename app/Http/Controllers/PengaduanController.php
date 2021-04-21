<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
            return view('indexawal');
    }

    public function store(Request $request)
    {
        $request->validate([
                'tanggal_pengaduan'=>'required|date_format:dd/mm/YY',
                'email'=>'required|email:rfc,dns',
                'laporan_pengaduan'=>'required',
                'file' => 'required|image|mimes:zip, rar, jpeg,png,jpg,,svg|max:2048',
            ]);
            set_time_limit(300);
            if (!File::isDirectory(public_path('images')) ) {
                //Make Folder
                File::makeDirectory(public_path('images'));
    
            }
    
            if (!File::isDirectory(public_path('images/products'))) {
                //Make Folder
                File::makeDirectory(public_path('images/products'));
            }
    
            if (!File::isDirectory(public_path('images/products/original'))) {
                //Make Folder
                File::makeDirectory(public_path('images/products/original'));
            }
    
            if (!File::isDirectory(public_path('images/products/75x75'))) {
                File::makeDirectory(public_path('images/products/75x75'));
            }

                $data = $request->except(['file']);
                if ($request->gambar != '') {
                    $gambar = $request->file('gambar');
                    $data['gambar'] = time().'_'.Str::random(10).'.'.$request->gambar->extension();
                    Image::make($gambar)->save('images/products/original/'.$data['gambar']);
                }
                $product = Pengaduan::create($data);
                return redirect('/')->with('success', 'Pengaduan saved!');
        }

    public function formPengaduan()
    {
            return view('pengaduan.create');
    }

    public function simpanPengaduan(Request $request)
    {
        //     $data_pengaduan = Pengaduan::create();
        //     return redirect('/')->with('success', 'Pengaduan saved!');
        return view('pengaduan.create');
    }

    public function indexLaporanPengaduan()
    {
            return view('indexawal');
    }
}
