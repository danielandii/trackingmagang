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
                               
                                
                                </a>
                                <h4>Status Detail Pengaduan : {{$detailPengaduan->status}} </h4>
                            </div>
                    </div>
                        <div class="card-body">
                            <p>No Tiket : {{$detailPengaduan->no_tiket }}</p>
                            <p> Tanggal Pengaduan : {{ $detailPengaduan->tanggal_pengaduan }}</p>
                            <h5>Laporan Pengaduan : {{ $detailPengaduan->laporan_pengaduan }}</h5>
                            <img src="{{ Storage::url($detailPengaduan->file) }}" title="{{ $detailPengaduan->file }}">
                            <button type="button" class="btn bg-teal-400 btn-icon"><i class="icon-download7"></i>
                            </button>
                        </div>

                    </div>
                    <div class="card card-body shadow mt-3">
                        <div class="card-header">
                            <h4>Tanggapan</h4>
                        </div>
                        @foreach($detailPengaduan->tanggapan as $tanggapan)
                        <div class="card-body">
                            <p>{{$tanggapan->tanggal_tanggapan}}</p>
                            <p>{{$tanggapan->laporan_tanggapan}}</p>
                            <p>{{$tanggapan->status}}</p>
                        </div>
                        @endforeach
                    </div>
        </div>
    </div>
</div>
@endsection