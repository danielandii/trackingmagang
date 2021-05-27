<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Model\Pengaduan;
use App\Model\Tanggapan;
use App\Mail\SendTanggapanMail;
use App\Mail\SendMail;
use Carbon\Carbon;
use File;
use PDF;
use App\Exports\TanggapanExport;
use App\Exports\CetakExport;
use Maatwebsite\Excel\Facades\Excel;

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
        if (\Auth::user()->role == 1) {
        return view('tanggapan.superadmin.create',compact('detailpengaduan'));
        }elseif(\Auth::user()->role == 10) {
            return view('tanggapan.admin.create',compact('detailpengaduan'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {

        $request->validate([
            'laporan_tanggapan'=>'required ',
]);
        $dataPengaduan = Pengaduan::find($id);
        $dataPengaduan->status = request()->get('status');
        $dataPengaduan->save();
        // dd($dataPengaduan);

        $data_tanggapan = new Tanggapan();
        $data_tanggapan->tanggal_tanggapan = request()->get('tanggal_tanggapan');
        $data_tanggapan->pengaduan_id = request()->get('pengaduan_id');
        $data_tanggapan->pengaduan_tiket = request()->get('pengaduan_tiket');
        $data_tanggapan->pengaduan_status = request()->get('status');
        $data_tanggapan->pengaduan_email = request()->get('pengaduan_email');
        $data_tanggapan->laporan_tanggapan = request()->get('laporan_tanggapan');
        $data_tanggapan->save();

        Mail::to(request()->get('pengaduan_email'))->send(new SendTanggapanMail(request()->get('tanggal_tanggapan'), request()->get('status'), request()->get('pengaduan_tiket'),  request()->get('pengaduan_email')));

        if (\Auth::user()->role == 1) {
        return redirect()->to('/home-pengaduan')->with('success', "Tanggapan dengan pengaduan id : ".$data_tanggapan->pengaduan_id." Sukses Disimpan");
        }elseif(\Auth::user()->role == 10) {
            return redirect()->to('/admin/home-pengaduan')->with('success', "Tanggapan dengan pengaduan id : ".$data_tanggapan->pengaduan_id." Sukses Disimpan");
        }
        // return redirect()->to('/laporan-pengaduan')->with('success', "Tanggapan dengan pengaduan id : ".$data_tanggapan->pengaduan_id." Sukses Disimpan");
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
    
    public function historyTanggapan()
    {
        if (\Auth::user()->role == 1) {
            $historytanggapan = Tanggapan::where('Pengaduan_status', '=' , 'selesai')->orderBy('id', 'DESC')->get();
            // dd($historytanggapan);
        return view('tanggapan.superadmin.history', compact('historytanggapan'));
    }elseif(\Auth::user()->role == 10) {
        $historytanggapan = Tanggapan::where('Pengaduan_status', '=' , 'selesai')->orderBy('id', 'DESC')->get();
        
        return view('tanggapan.admin.history', compact('historytanggapan'));
    }
    }
    public function historyshow($id, Request $request)
    {
         if (\Auth::user()->role == 1) {
            $dataPengaduan = Pengaduan::where('no_tiket', '=', $id)->first();
            $dataTanggapan = Tanggapan::where('pengaduan_tiket', '=', $id)->orderBy('id', 'DESC')->get();
            
            // dd($dataPengaduan);
            // dd($dataTanggapan);
        //     $historytanggapan = Tanggapan::whereHas('pengaduan', function($query){
        //         $query->where('pengaduan_tiket',request()->route('no_tiket'));
        // })->first();
            // dd($historytanggapan);
        return view('tanggapan.superadmin.show', compact('dataTanggapan', 'dataPengaduan'));
    } elseif(\Auth::user()->role == 10) {
        $dataPengaduan = Pengaduan::where('no_tiket', '=', $id)->first();
        $dataTanggapan = Tanggapan::where('pengaduan_tiket', '=', $id)->orderBy('id', 'DESC')->get();
                // dd($dataPengaduan);
            return view('tanggapan.admin.show', compact('dataTanggapan', 'dataPengaduan'));
            }
        
    }
    public function historycetak_pdf()
    {
        if (\Auth::user()->role == 1) {
        $historytanggapan = Tanggapan::where('Pengaduan_status', '=' , 'selesai')->orderBy('id', 'DESC')->get();
        $pdf = PDF::loadview('cetak.superadmin.dataTanggapan_PDF',['historytanggapan'=>$historytanggapan]);
        return $pdf->download('superadmin_datahistory');
        }elseif(\Auth::user()->role == 10) {
            $historytanggapan = Tanggapan::where('Pengaduan_status', '=' , 'selesai')->orderBy('id', 'DESC')->get();
        $pdf = PDF::loadview('cetak.admin.dataTanggapan_PDF',['historytanggapan'=>$historytanggapan]);
        return $pdf->download('admin_datahistory');
        }
    }

    public function halamanCetak()
    {
        return view ('cetak.index');
    }
    public function halamancetakpertanggal($tgawal,$tgakhir){
        dd("Tanggal Awal:".$tgawal,"Tanggal Akhir:".$tgakhir);
    } 
    

    public function halamanTanggalCetak($tglawal, $tglakhir)
    {
        // dd("Tanggal awal :".$tglawal, "Tanggal Akhir :".$tglakhir);
        // return view ('cetak.index');
        // $cetakTanggapan = Tanggapan::whereBetween('created_at',[$tglawal, $tglakhir]);
        // $cetakPengaduan = Pengaduan::whereBetween('created_at',[$tglawal, $tglakhir]);
        // return view('cetak.show', compact('cetakPengaduan'));
        return Excel::download(new CetakExport($tglawal, $tglakhir), 'LaporanPertanggal.xlsx');
    }

    public function tanggapanexport() 
    {
        // $dataPengaduan = Pengaduan::where('status', '<' , 'Selesai')->orderBy('id', 'DESC')->get();
        return Excel::download(new TanggapanExport, 'tanggapan.xlsx');
        // return Excel::create('pengaduan.xlsx', function($excel) {

        //     $excel->sheet('New sheet', function($sheet) {
        
        //         $sheet->loadView('excel.pengaduan.index');
        
        //     });
        
        // })->download();
    }
}
