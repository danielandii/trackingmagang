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
            <input type="date" name="" id="" class="" />

        </div>
        <div class="input-group mb-3">
            <label for="label">Tanggal Akhir :</label>
            <input type="date" name="" id="" class="">
        </div>

        <div class="input-group mb-3">
            <button type="submit">Cetak</button>
        </div>
    </div>
    </div>
</div>

@endsection