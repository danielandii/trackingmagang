@extends('layouts.app')

@section('content')
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
