@extends('layout')

@section('content')
    <div class="col-md-9 col-xl-12">
        @foreach($data_pengaduan as $pengaduan)
        <div class='card shadow mb-3'>
            <div class="card-body">
                <p>{{$pengaduan->tanggal_pengaduan}}</p>
                <p class="font-weight-bold text-white bg-success p-1">
                {{$pengaduan->status}}</p>
                <h5>{{$pengaduan->isi_laporan}}</h5>
            </div>
        </div>
        @endforeach
@endsection