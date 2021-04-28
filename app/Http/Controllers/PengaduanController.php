<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pengaduan;
use App\Model\Tanggapan;
use App\Model\Petugas;
use File;

class PengaduanController extends Controller
{
    public function index()
    {
            $dataPengaduan = Pengaduan::get();
            return view('index',compact('dataPengaduan'));
    }

    public function store(Request $request)
    {
        //     $data = $request->except('_token', '_method');
        // dd($data);
            $request->validate([
                    'tanggal_pengaduan'=>'required',
                    'email'=>'required|email:rfc,dns',
                    'laporan_pengaduan'=>'required',
                    'file' => 'required|mimes:png,jpg,jpeg,xls,xlsx,doc,docx,pdf,zip,rar',
        ],
        [
                'required'          => 'wajib diisi.',
                'email.email'       => 'Email tidak valid.',
                'file.mimes'        => 'Format File Tidak Valid'
                
                ]);
                // dd($data);                
        
        $file = $request->file;
        $namaFile = $file->getClientOriginalName();

        $id = Pengaduan::getId();
        foreach ($id as $value);
        $idlm = $value->id;
        $idbaru = $idlm + 1;
        // $blt = date('my');
   

        $no_tiket = 'P-'.date('my').$idbaru;

                $data = new Pengaduan;
                $data->no_tiket = $no_tiket; 
                $data->tanggal_pengaduan = $request->tanggal_pengaduan;
                $data->email = $request->email;
                $data->laporan_pengaduan = $request->laporan_pengaduan;
                $data->file = $namaFile;
                $file->move(public_path().'/file_Laporan', $namaFile);
                $data->save();

                // \Mail::raw('Terima Kasih'.$data->email.'sudah melakukan Pengaduan', function ($message) use ($data){
                    
                //     $message->to($data->email);
                //     $message->subject('Pengaduan Anda Akan segera kami proses');
                // });

                return redirect()->to('/laporan-pengaduan')->with('success', "Laporan Pengaduan Sukses Disimpan");
        // $request->validate([
        //         'tanggal_pengaduan'=>'required|date_format:dd/mm/YY',
        //         'email'=>'required|email:rfc,dns',
        //         'laporan_pengaduan'=>'required',
        //         'file' => 'required',
        //     ]);
        //     set_time_limit(300);
        //     if (!File::isDirectory(public_path('images')) ) {
        //         //Make Folder
        //         File::makeDirectory(public_path('images'));
    
        //     }
    
        //     if (!File::isDirectory(public_path('images/products'))) {
        //         //Make Folder
        //         File::makeDirectory(public_path('images/products'));
        //     }
    
        //     if (!File::isDirectory(public_path('images/products/original'))) {
        //         //Make Folder
        //         File::makeDirectory(public_path('images/products/original'));
        //     }
    
        //     if (!File::isDirectory(public_path('images/products/75x75'))) {
        //         File::makeDirectory(public_path('images/products/75x75'));
        //     }

        //         $data = $request->except(['file']);
        //         if ($request->file != '') {
        //             $file = $request->file('file');
        //             $data['file'] = time().'_'.Str::random(10).'.'.$request->gambar->extension();
        //             Image::make($file)->save('images/products/original/'.$data['file']);
        //         }
        //         $pengaduan = Pengaduan::create($data);
        //         return redirect('/')->with('success', 'Pengaduan saved!');
        }

    public function create()
    {
            return view('pengaduan.create');
    }

    public function simpanPengaduan(Request $request)
    {
        //     $data_pengaduan = Pengaduan::create();
        //     return redirect('/')->with('success', 'Pengaduan saved!');
        // return view('pengaduan.create');
    }

    public function laporanPengaduan()
    {
            $dataPengaduan = Pengaduan::latest()->get();
            return view('laporan.data-laporan',compact('dataPengaduan'));
    }

    public function tampilPengaduan()
    {
            $dataPengaduan = Pengaduan::latest()->get();
        return view('pengaduan.index', compact('dataPengaduan'));
    }

    public function detailPengaduan($id)
    {
            $dataPengaduan = Pengaduan::find($id);
            $dataTanggapan = Tanggapan::whereHas('pengaduan', function($query){
                    $query->where('pengaduan_id',request()->route('id'));
            })->first();
        return view('pengaduan.edit', compact('dataPengaduan','dataTanggapan'));
    }
    

    public function destroyPengaduan($id)
    {
            $dataPengaduan = Pengaduan::find($id);
            $dataPengaduan->delete();
        return redirect()->back()->with('success','Pengaduan Berhasil Dihapus');
    }


    public function statusOnchange($id)
    {
            $dataPengaduan = Pengaduan::find($id);
            $dataPengaduan->status = request()->get('status');
            $dataPengaduan->save();
        return redirect()->back();
    }

    public function tampilDetailPengaduan($id)
    {
            $detailPengaduan = Pengaduan::find($id);
            $dataTanggapan = Tanggapan::whereHas('pengaduan', function($query){
                $query->where('pengaduan_id',request()->route('id'));
        })->first();
        return view('pengaduan.detail',compact('detailPengaduan','dataTanggapan'));
    }
}
