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
							<td>{{ $item->created_at->format('l, d F Y') }}</td>
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
								<form action="{{ url('delete-pengaduan',$item->id ) }}" method="post" class="d-inline" onsubmit="return confirm('yakin hapus data')">
									@method('delete')
									@csrf 
									<button class="btn btn-danger btn-sm">
									<i class="fa fa-trash">delete</i>
									</button>
								</form>
                            </td>
						</tr>
                        @endforeach
                        
					</thead>
			</table>

@endsection