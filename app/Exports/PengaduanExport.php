<?php

namespace App\Exports;

use App\Model\Pengaduan;
use Illuminate\Contracts\View\View;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class PengaduanExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        // return Pengaduan::where('status', '<' , 'Selesai')->orderBy('id', 'DESC')->get();
        $dataPengaduan = Pengaduan::where('status', '<' , 'Selesai')->orderBy('id', 'DESC')->get();
        return view('excel.pengaduan.index',['index'=> Pengaduan::where('status', '<' , 'Selesai')->orderBy('id', 'DESC')->get()
    ], compact('dataPengaduan'));
    }
}
// $dataPengaduan = Pengaduan::where('status', '<' , 'Selesai')->orderBy('id', 'DESC')->get();
//         $pdf = PDF::loadview('cetak.dataPengaduan_pdf',['dataPengaduan'=>$dataPengaduan]);
//         return $pdf->download('dataPengaduan');