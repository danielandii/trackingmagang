@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
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
                                <a href="{{ route('home-pengaduan.tampil') }}">
                                <i class="fas fa-arrow-circle-left fa-2x"></i>
                                </a>
                                <h4>Detail Pengaduan</h4>
                            </div>
                    </div>
                        <div>
                            <p>{{ $detailPengaduan->tanggal_pengaduan }}</p>
                            <h5>{{ $detailPengaduan->laporan_pengaduan }}</h5>
                            <img src="{{ Storage::url($detailPengaduan->file) }}" title="{{ $detailPengaduan->file }}">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <select name="status" class="form-control" w-25>
                                <option value="baru">Baru</option>
                                <option value="proses">Proses</option>
                                <option value="sedang dikonfirmasi">Sedang dikonfirmasi</option>
                                <option value="pengerjaan">Pengerjaan</option>
                                <option value="selesai">Selesai</option>
                                </select>
                                <a href="/home-tanggapan/{{$detailPengaduan->id}}" class="btn btn-primary">Tanggapi</a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-body shadow mt-3">
                        <div class="card-header">
                            <h4>Tanggapan</h4>
                        </div>
                        <div class="card-body">
                            ini tanggapan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection