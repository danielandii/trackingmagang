@extends('layout')
@section('content')
<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4><i class="icon-home2 mr-3 icon-2x"></i> <span class="font-weight-semibold">History Tanggapan</span> - Show</h4>
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
                                <h4>Nomor Tiket Pengaduan : {{ $dataPengaduan->no_tiket }} </h4>
                            </div>
                    </div>
                        <div>
                            <p>Tanggal Pengaduan : {{ $dataPengaduan->created_at->format('d F Y H:i')}}</p>
                            <p>Pengadu : {{ $dataPengaduan->email}}</p>
                            <p>Laporan yang Diadukan : </p>
                            <p>{{ $dataPengaduan->laporan_pengaduan }}</p>
                            <!-- <img src="{{ Storage::url($dataPengaduan->file) }}" title="{{ $dataPengaduan->file }}"> -->
							<p>File Pengaduan :</p>
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

					<div class="card card-body shadow">
					<table class="table datatable-basic table-hover border">
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal Pengaduan</th>
									<th>Status Pengaduan</th>
									<th>Laporan Tanggapan</th>
								</tr>
                        		@foreach($historytanggapan as $tanggapan)
                        			<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $tanggapan->created_at->format('d F Y H:i') }}</td>
										<td>{{ $tanggapan->pengaduan_status}}</td>
										<td>{{ $tanggapan->laporan_tanggapan}}</td>
									</tr>
                        		@endforeach
                        	</thead>
						</table>
						</div>
					</div>
					</div>
					</div>
					</div>

    
@endsection
@section('js')
<link href="{{asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <script src="{{asset('assets/js/app.js')}}"></script>
@endsection