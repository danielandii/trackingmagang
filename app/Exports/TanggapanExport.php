<?php

namespace App\Exports;

use App\Model\Tanggapan;
use Illuminate\Contracts\View\View;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class TanggapanExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $dataTanggapan = Tanggapan::where('pengaduan_status', '=' , 'Selesai')->orderBy('id', 'DESC')->get();
        return view('excel.tanggapan.index',['index'=> Tanggapan::where('pengaduan_status', '=' , 'Selesai')->orderBy('id', 'DESC')->get()
    ], compact('dataTanggapan'));
        // return Tanggapan::all();
    }
}
