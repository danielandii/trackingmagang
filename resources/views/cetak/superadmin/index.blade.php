@extends('layout')
@section('content')

<div class="content">
    <div class="card card-info card-outline">
    <div class="card-header">

        <h3> Cetak Data Pengaduan Masyarakat Per Tanggal</h3>

    </div>
    <div class="car-body">
        <div class="input-group mb-3">
            <label for="label">Tanggal Awal :</label>
            <input type="date" name="tglawal" id="tglawal" class="form-control" />

        </div>
        <div class="input-group mb-3">
            <label for="label">Tanggal Akhir :</label>
            <input type="date" name="tglakhir" id="tglakhir" class="form-control">
        </div>

        <div class="input-group mb-3">
           <a href="" onclick="this.href='/Excel-pertanggal/'+document.getElementById('tglawal').value + 
           '/' + document.getElementById('tglakhir').value " target="_blank" class="btn btn-primary col-md-12">Eksport Excel</a>
        </div>
        <div class="input-group mb-3">
           <a href="" onclick="this.href='/PDF-pertanggal/'+document.getElementById('tglawal').value + 
           '/' + document.getElementById('tglakhir').value " target="/cetak" class="btn btn-primary col-md-12">Eksport PDF</a>
        </div>
    </div>
    </div>
</div>

@endsection