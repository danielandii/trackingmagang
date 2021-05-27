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
        $dataTanggapan = Tanggapan::all();
        return view('excel.tanggapan.index',['index'=> Tanggapan::all()
    ], compact('dataTanggapan'));
        // return Tanggapan::all();
    }
}
