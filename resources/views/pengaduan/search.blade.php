@extends('layouts.app')
<link href="{{asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
@section('content')

<div class="container mt-2">
<h2 class="text-center "style="color:white">Detail Pengaduan</h2>
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
                            <p> Tanggal Pengaduan : {{ $detailPengaduan->created_at->format('d F Y H:i') }}</p>
                            <h5>Laporan Pengaduan : {{ $detailPengaduan->laporan_pengaduan }}</h5>
                            <!-- <button type="button" class="btn bg-teal-400 btn-icon"><i class="icon-download7"></i>
                            </button> -->
                            <a href="{{ Storage::url($detailPengaduan->file) }}">
                                <button type="button" class="btn bg-teal-1 btn-icon">{{ $detailPengaduan->file }}
                             </a>
                        </div>

                    </div>
                    <div class="card card-body shadow mt-3">
                        <div class="card-header">
                            <h4>Tanggapan</h4>
                        </div>
                        @foreach($detailPengaduan->tanggapan as $tanggapan)
                        <div class="card-body">
                            <p>{{$tanggapan->created_at->format('d F Y H:i')}}</p>
                            <span class="font-weight-semibold"><p>{{$tanggapan->pengaduan_status}}</p></span> 
                            <p>{{$tanggapan->laporan_tanggapan}}</p>
                        </div>
                        @endforeach
                    </div>
        </div>
    </div>
</div>
@endsection
@section('JS')

@endsection