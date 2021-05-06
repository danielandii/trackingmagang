@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<table class="table datatable-basic table-hover text-center">
				<thead>
						<tr>
							<th>No</th>
							<th>No Tiket</th>
							<th>Tanggal Pengaduan</th>
							<th>Email</th>
							<th>laporan Pengaduan</th>
							<th>File</th>
							<th>Url File</th>
							<th>Status</th>
							<th class="text-center">Actions</th>
						</tr>
                        @foreach($dataPengaduan as $item)
                        <tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $item->no_tiket }}</td>
							<td>{{ $item->created_at->format('d F Y H:i') }}</td>
							<td>{{ $item->email }}</td>
                            <td>{{ $item->laporan_pengaduan }}</td>
                            <td>
                            {{ $item->file }}
                                <!-- <a href="{{ asset('storage'. $item->file) }}" target="_blank" rel="noopener noreferrer">Lihat File</a> -->
                            </td>
							<td>
                                            <a href="{{ Storage::url($item->file) }}">
                                                View
                                            </a>
                                        </td>
							<td>{{ $item->status }}</td>
							<td>
                                <a href="/detail-pengaduan/{{$item->id}} {{$item->no_tiket}}" class="btn btn-info">
									<i class="fas fa-clipboard">Detail</i>
								</a>
                            </td>
						</tr>
                        @endforeach
                        
					</thead>
			</table>
=======
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
                            <p> Tanggal Pengaduan : {{ $detailPengaduan->created_at->format('d F Y H:i') }}</p>
                            <h5>Laporan Pengaduan : {{ $detailPengaduan->laporan_pengaduan }}</h5>
                            <img title="{{ $detailPengaduan->file }}">
                            <!-- <button type="button" class="btn bg-teal-400 btn-icon"><i class="icon-download7"></i>
                            </button> -->
                            <a href="{{ Storage::url($detailPengaduan->file) }}">
                                <button type="button" class="btn bg-teal-400 btn-icon"><i class="icon-download7"></i>
                             </a>
                        </div>
>>>>>>> d060109405482e811d31e8f37be7a19fe1b915cb

                    </div>
                    <div class="card card-body shadow mt-3">
                        <div class="card-header">
                            <h4>Tanggapan</h4>
                        </div>
                        @foreach($detailPengaduan->tanggapan as $tanggapan)
                        <div class="card-body">
                            <p>{{$tanggapan->tanggal_tanggapan}}</p>
                            <p>{{$tanggapan->laporan_tanggapan}}</p>
                            <p>{{$tanggapan->pengaduan_status}}</p>
                        </div>
                        @endforeach
                    </div>
        </div>
    </div>
</div>
@endsection
