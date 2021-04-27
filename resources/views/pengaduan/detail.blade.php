@extends('layouts.app')

@section('content')
<div class="container mt-2">
<h2 class="text-center">Detail Pengaduan</h2>
    <div class="row">
        <div class="card card-body shadow">
                    <div class="card card-body shadow">
                        <!-- <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('home-pengaduan.tampil') }}">
                                <i class="fas fa-arrow-circle-left fa-2x"></i>
                                </a>
                                <h4>Detail Pengaduan</h4>
                            </div>
                        </div> -->
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('laporan-pengaduan') }}">
                                <i class="fas fa-arrow-circle-left fa-2x"></i>
                                </a>
                                <h4>Status Detail Pengaduan : {{$detailPengaduan->status}} </h4>
                            </div>
                    </div>
                        <div class="card-body">
                            <p>No Tiket : {{$detailPengaduan->no_tiket }}</p>
                            <p> Tanggal Pengaduan : {{ $detailPengaduan->tanggal_pengaduan }}</p>
                            <h5>Laporan Pengaduan : {{ $detailPengaduan->laporan_pengaduan }}</h5>
                            <img src="{{ Storage::url($detailPengaduan->file) }}" title="{{ $detailPengaduan->file }}">
                        </div>

                    </div>
                    <div class="card card-body shadow mt-3">
                        <div class="card-header">
                            <h4>Tanggapan</h4>
                        </div>
                        <div class="card-body">
                            <p>{{ @$dataTanggapan->laporan_tanggapan }}</p>
                        </div>
                    </div>
        </div>
    </div>
</div>
@endsection