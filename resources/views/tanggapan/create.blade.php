@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card card-body shadow">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('home-pengaduan.tampil') }}">
                            <i class="fas fa-arrow-circle-left fa-2x"></i>
                        </a>
                        <h4>Tanggapan</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('home-tanggapi', $detailpengaduan->id)}}" method="POST" accept-charset="utf-8">
                    @csrf
                        <div class="form-group">
                        <input type="hidden" name ="tanggal_tanggapan" value="{{Carbon\Carbon::today()}}">
                        <input type="hidden" name ="pengaduan_id" value="{{request()->route('id')}}">
                            <label for="tanggapan">Tanggapan</label>
                            <textarea class="form-control" name="laporan_tanggapan" id="" cols="30" rows="10"></textarea>
                        </div>

                        
                                    <select name="pengaduan_status" class="form-control" >
                                    <option value="Baru" >Baru</option>
                                    <option value="Sedang di Cek" >Sedang di Cek</option>
                                    <option value="Pengerjaan" >Pengerjaan</option>
                                    <option value="Selesai">Selesai</option>
                                    </select>
                                
                        
                        <button class="btn btn-primary form-control" type="submit">Tanggapi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection