@extends('layout')
@section('content')
<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4><i class="icon-home2 mr-3 icon-2x"></i> <span class="font-weight-semibold">Home</span> - Cetak Data Pengaduan Masyarakat Per Tanggal</h4>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>

<div class="content">
    <div class="card card-info card-outline">
    <div class="card-header">

        <h2> </h2>

    </div>
    <div class="card-body">
        <div class="input-group mb-3">
            <label for="label">Tanggal Awal :</label>
            <input type="date" name="tglawal" id="tglawal" class="form-control" />

        </div>
        <div class="input-group mb-3">
            <label for="label">Tanggal Akhir :</label>
            <input type="date" name="tglakhir" id="tglakhir" class="form-control">
        </div>

        <div class="input-group mb-3">
           <a href="" onclick="this.href='/admin/Excel-pertanggal/'+document.getElementById('tglawal').value + 
           '/' + document.getElementById('tglakhir').value " target="_blank" class="btn btn-outline bg-green text-green border-green col-md-12">Eksport Excel <i class="icon-file-excel icon-2x bg-white text-green border-green"></i></a>
        </div>

        <div class="input-group mb-3">
           <a href="" onclick="this.href='/admin/PDF-pertanggal/'+document.getElementById('tglawal').value + 
           '/' + document.getElementById('tglakhir').value " target="/cetak" class="btn btn-outline bg-danger text-danger border-danger col-md-12">CETAK PDF <i class="icon-file-pdf icon-2x bg-white text-danger border-danger"></i></a>
        </div>
    </div>
    </div>
</div>

@endsection

@section('js')
<link href="{{asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
@endsection