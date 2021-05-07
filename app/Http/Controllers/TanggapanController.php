<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Model\Pengaduan;
use App\Model\Tanggapan;
use App\Mail\SendTanggapanMail;
use Carbon\Carbon;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $detail_tanggapan = Pengaduan::find($id);
        //  return view('tanggapan.history');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // dd($request);
        $detailpengaduan = Pengaduan::find($id);
      
        // dd($detailpengaduan);

        return view('tanggapan.create',compact('detailpengaduan'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_tanggapan = new Tanggapan();
        $data_tanggapan->tanggal_tanggapan = request()->get('tanggal_tanggapan');
        $data_tanggapan->pengaduan_id = request()->get('pengaduan_id');
        $data_tanggapan->pengaduan_status = request()->get('pengaduan_status');
        $data_tanggapan->pengaduan_email = request()->get('pengaduan_email');
        $data_tanggapan->laporan_tanggapan = request()->get('laporan_tanggapan');
        $data_tanggapan->save();

        Mail::to(request()->get('pengaduan_email'))->send(new SendTanggapanMail(request()->get('tanggal_tanggapan'), request()->get('pengaduan_status'),  request()->get('pengaduan_email')));

        return redirect()->to('/home-pengaduan')->with('success', "Tanggapan dengan pengaduan id : ".$data_tanggapan->pengaduan_id." Sukses Disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //  public function laporanPengaduan()
    // {
    //         $laporanPengaduan = Pengaduan::latest()->get();
    //         return view('laporan.data-laporan',compact('laporanPengaduan'));
    // }

    // public function tampilPengaduan(Request $request)
    // {
    //     return view('pengaduan.index');
    // }
    // public function detailPengaduan($id)
    // {
    //         $detailPengaduan = Pengaduan::find($id);
    //     return view('pengaduan.edit', compact('detailPengaduan'));
    // aa
    // }
    
    public function historytanggapan()
    {
            $historytanggapan = tanggapan::where('Pengaduan_status', '=' , 'selesai')->orderBy('id', 'DESC')->get();
            // dd($historytanggapan);
        return view('tanggapan.history', compact('historytanggapan'));
    }

}
