<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Model\Pengaduan;
use App\Model\Tanggapan;
use App\Model\Petugas;
use App\Mail\SendMail;
use Carbon\Carbon;
use File;


class PengaduanController extends Controller
{
    public function index(Request $request)
    {
        if ($request) {
              $dataPengaduan = Pengaduan::where('no_tiket', 'like', '%'.$request->cari.'%')->get();
        }else{
            $dataPengaduan = Pengaduan::all();
        } 
            return view('index',compact('dataPengaduan'));
    }

    public function store(Request $request)
    {
        //     $data = $request->except('_token', '_method');
        // dd($data);
            $request->validate([
                    'tanggal_pengaduan'=>'required ',
                    'email'=>'required|email:rfc,dns',
                    'laporan_pengaduan'=>'required',
                    'file' => 'nullable|mimes:png,jpg,jpeg,xls,xlsx,doc,docx,pdf,zip,rar,wmv,mp4,txt',
        ],
        [
                'required'          => 'wajib diisi.',
                'email.email'       => 'Email tidak valid.',
                'file.mimes'        => 'Format File Tidak Valid'
                
                ]);
                // dd($data);                
        
        // $file = $request->file;
        // $namaFile = $file->getClientOriginalName();

        
        $image = $request->file('file');
        // dd($image);
        if ($image) {
            
            $namaFile = $image->getClientOriginalName();
            $image->move(public_path().'/storage', $namaFile);
        } else {
            
            $namaFile = '';
        }

        // dd($namaFile);
        // $id = Pengaduan::getId();
        // foreach ($id as $value);
        // $idlm = $value->id;
        // $idbaru = $idlm + 1;
        // $blt = date('my');
   

        $no_tiket = uniqid().date('my');

                $data = new Pengaduan;
                $data->no_tiket = $no_tiket; 
                $data->tanggal_pengaduan = $request->tanggal_pengaduan;
                $data->email = $request->email;
                $data->laporan_pengaduan = $request->laporan_pengaduan;
                $data->file = $namaFile;
                $data->save();

                // \Mail::raw('Terima Kasih'.$data->email.'sudah melakukan Pengaduan', function ($message) use ($data){
                    
                //     $message->to($data->email);
                //     $message->subject('Pengaduan Anda Akan segera kami proses');
                // });
                // \Mail::to($data->email)->send(new \App\Mail\SendMail($data));
                // \Mail::send('mail.index', ['no_tiket' => $data->no_tiket, 'email' => $data->email, 'laporan_pengaduan' => $data->laporan_pengaduan, 'file' => $data->file], function ($message) {

                //         $message->to('your.email@gmail.com')->subject('Subject of the message!');
                //     });
                //     dd($data);

                Mail::to($request->email)->send(new SendMail($no_tiket, $request->tanggal_pengaduan, $request->email));
            

                return redirect()->to('/')->with('success', "Laporan Pengaduan Sukses Disimpan dan No tiket Anda sudah di kirimkan");
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
        if (\Auth::user()->role == 1) {
            $dataPengaduan = Pengaduan::where('status', '<' , 'Selesai')->orderBy('id', 'DESC')->get();
        return view('pengaduan.superadmin.index', compact('dataPengaduan'));
        }elseif(\Auth::user()->role == 10) {
            $dataPengaduan = Pengaduan::where('status', '<' , 'Selesai')->orderBy('id', 'DESC')->get();
            return view('pengaduan.admin.index', compact('dataPengaduan'));
        }
    }

    public function detailPengaduan($id)
    {
        if (\Auth::user()->role == 1) {
            $dataPengaduan = Pengaduan::find($id);
            // dd($dataPengaduan);
            $dataTanggapan = Tanggapan::whereHas('pengaduan', function($query){
                    $query->where('pengaduan_id',request()->route('id'));
            })->first();
        return view('pengaduan.superadmin.edit', compact('dataPengaduan','dataTanggapan'));
        }elseif(\Auth::user()->role == 10) {
            $dataPengaduan = Pengaduan::find($id);
            // dd($dataPengaduan);
            $dataTanggapan = Tanggapan::whereHas('pengaduan', function($query){
                    $query->where('pengaduan_id',request()->route('id'));
            })->first();
        return view('pengaduan.admin.edit', compact('dataPengaduan','dataTanggapan'));
        }
    }
    

    public function destroyPengaduan($id)
    {
            $dataPengaduan = Pengaduan::find($id);
            $dataPengaduan->delete();
        return redirect()->back()->with('success','Pengaduan Berhasil Dihapus');
    }


    public function statusOnchange($id)
    {
        if (\Auth::user()->role == 1) {
            $dataPengaduan = Pengaduan::find($id);
            $dataPengaduan->status = request()->get('status');
            $dataPengaduan->save();
        return redirect()->back();
        }elseif(\Auth::user()->role == 10) {
            $dataPengaduan = Pengaduan::find($id);
            $dataPengaduan->status = request()->get('status');
            $dataPengaduan->save();
        return redirect()->back();
        }
    }

    public function tampilDetailPengaduan($id)
    {
            $detailPengaduan = Pengaduan::find($id);
            dd($detailPengaduan);
        //     $dataTanggapan = Tanggapan::whereHas('pengaduan', function($query){
        //         $query->where('pengaduan_id',request()->route('id'));
        // })->first();
        return view('pengaduan.detail',compact('detailPengaduan'));
    }

    public function getview()
        {
                 //PDF file is stored under project/public/download/info.pdf
                $file= public_path(). "storage";
                $headers = array(
              'Content-Type: application/file',);

        return Response::download($file, 'storage', $headers);
        }       
   public function cari()
        {
                $cari = request()->query('query');

                // dd($cari);
                if ($cari){
                    $detailPengaduan = Pengaduan::where('no_tiket','like', "%{$cari}%")
                    ->first();
                }
                else{
                    return redirect()->to('/');
                }
                // dd($detailPengaduan);

                return view('pengaduan.search',compact('detailPengaduan'));
        }
   public function show($id)
   {
    $file= public_path(). "storage";
    $headers = array(
  'Content-Type: application/file',);

return Response::download($file, 'storage', $headers);
   }
   public function delete($id)
   {
    $dataPengaduan = Pengaduan::find($id);
    $dataPengaduan->delete();
    return redirect()->back()->with('success','Pengaduan Berhasil Dihapus');
   }

   public function historyTanggapanshow($id)
    {
         if (\Auth::user()->role == 1) {
            $dataPengaduan = Pengaduan::find($id);
            // dd($dataTanggapan);
            $dataTanggapan = Tanggapan::whereHas('pengaduan', function($query){
                $query->where('pengaduan_id',request()->route('id'));
        })->first();
        return view('tanggapan.superadmin.show', compact('dataPengaduan','dataTanggapan'));
    } elseif(\Auth::user()->role == 10) {
                $dataPengaduan = Pengaduan::find($id);
                // dd($dataPengaduan);
            return view('tanggapan.admin.show');
            }
        
    }
}
