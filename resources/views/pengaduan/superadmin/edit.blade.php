@extends('layout')

@section('content')
    <div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4><i class="icon-home2 mr-3 icon-2x"></i> <span class="font-weight-semibold">Laporan Pengaduan</span> - Tanggapan</h4>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>
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
                            <div class="center">
                                <!-- <a href="{{ route('home-pengaduan.tampil') }}"> -->
                               
                                </a>
                                <h4>Status Detail Pengaduan : {{$dataPengaduan->status}} </h4>
                            </div>
                    </div>
                        <div>
                            <p>{{ $dataPengaduan->created_at->format('d F Y H:i')}}</p>
                            <h5>{{ $dataPengaduan->laporan_pengaduan }}</h5>
                            <!-- <img src="{{ Storage::url($dataPengaduan->file) }}" title="{{ $dataPengaduan->file }}"> -->
                            <a href="{{ Storage::url($dataPengaduan->file) }}">
                                <button type="button" class="btn bg-teal-222 btn-icon">{{ $dataPengaduan->file }}
                             </a>
                        </div>
                        
                        <!-- <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                
                                <form action="{{route('home-pengaduan.onchange',$dataPengaduan->id)}}" method="post" >
                                    @csrf
                                    <select name="status" class="form-control" onchange="javascript:this.form.submit()">
                                        <option value="Baru" @if ($dataPengaduan->status == "Baru") selected @endif>Baru</option>
                                        <option value="Sedang di Cek" @if ($dataPengaduan->status == "Sedang di Cek") selected @endif>Sedang di Cek</option>
                                        <option value="Pengerjaan" @if ($dataPengaduan->status == "Pengerjaan") selected @endif>Pengerjaan</option>
                                        <option value="Selesai" @if ($dataPengaduan->status == "Selesai") selected @endif>Selesai</option>
                                    </select>
                                    
                                </form>
                                
                                <a href="/home-tanggapan/{{$dataPengaduan->id}}" class="btn btn-primary">Tanggapi</a>
                            </div>
                        </div> -->
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card card-body shadow">
                            
                                <div class="card-body">
                                    <form action="{{route('home-tanggapi', $dataPengaduan->id)}}" method="POST" accept-charset="utf-8">
                                    @csrf

                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" >
                                                    <option value="Baru" @if ($dataPengaduan->status == "Baru") selected @endif>Baru</option>
                                                    <option value="Sedang di Cek" @if ($dataPengaduan->status == "Sedang di Cek") selected @endif>Sedang di Cek</option>
                                                    <option value="Pengerjaan" @if ($dataPengaduan->status == "Pengerjaan") selected @endif>Pengerjaan</option>
                                                    <option value="Selesai" @if ($dataPengaduan->status == "Selesai") selected @endif>Selesai</option>
                                                </select>

                                        <div class="form-group">
                                        <input type="hidden" name ="tanggal_tanggapan" value="{{Carbon\Carbon::today()}}">
                                        <input type="hidden" name ="pengaduan_id" value="{{$dataPengaduan->id}}">
                                        <input type="hidden" name ="pengaduan_tiket" value="{{$dataPengaduan->no_tiket}}">
                                        <input type="hidden" name ="pengaduan_status" value="{{$dataPengaduan->status}}">
                                        <input type="hidden" name ="pengaduan_email" value="{{$dataPengaduan->email}}">
                                            <label for="tanggapan">Tanggapan</label>
                                            <textarea class="form-control" name="laporan_tanggapan" id="" cols="30" rows="10"></textarea>
                                        </div>
                                            <!-- <select name="pengaduan_status" class="form-control" >
                                            <option value="Baru" >Baru</option>
                                            <option value="Sedang di Cek" >Sedang di Cek</option>
                                            <option value="Pengerjaan" >Pengerjaan</option>
                                            <option value="Selesai">Selesai</option>
                                            </select> -->
                                        <button class="btn btn-primary form-control" type="submit">Tanggapi</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-body shadow mt-3">
                        <div class="card-header">
                            <h4>Tanggapan</h4>
                        </div>
                        @foreach($dataPengaduan->tanggapan as $tanggapan)
                        <div class="card-body">
                            <p>{{$tanggapan->created_at->format('d F Y H:i')}}</p> 
                            <span class="font-weight-bold"><p>{{$tanggapan->pengaduan_status}}</p></span>
                            <p>{{$tanggapan->laporan_tanggapan}}</p>
                           
                            <!-- <p>{{$tanggapan->pengaduan_tiket}}</p> -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection