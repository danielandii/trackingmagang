<?php

namespace App\Exports;

use App\Model\Tanggapan;
use App\Model\Pengaduan;
use Illuminate\Contracts\View\View;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class CetakExport implements FromView
{
    public $tglawal, $tglakhir;

    public function __construct($tglawal, $tglakhir){
        $this->tglawal=$tglawal;
        $this->tglakhir=$tglakhir;
        // dd($tglawal);
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function view(): View
    {
        $dataTanggapan= Tanggapan::whereBetween('created_at',[$this->tglawal, $this->tglakhir])->with('pengaduan')->whereHas('pengaduan')->get();
        // dd($dataTanggapan);
        return view('excel.cetaktanggal', compact('dataTanggapan'));
    }

}
