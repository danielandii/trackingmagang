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

    <table class="table datatable-basic table-hover border">
							<thead>
								<tr>
									<th>No</th>
									<th>No Tiket</th>
									<th>Tanggal Pengaduan</th>
									<th>Email</th>
									<th>Status Laporan</th>
									<th class="text-center">Actions</th>
								</tr>
                        		@foreach($dataPengaduan->tanggapan as $tanggapan)
                        			<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $tanggapan->pengaduan_tiket }}</td>
										
										<!-- {{ route('home-pengaduan.detail', $pengaduan->no_tiket)}} -->
											<!-- <a href="{{ route('home-pengaduan.detail', $pengaduan->id)}}" class="btn btn-info">
												<i class="fas fa-clipboard"> Detail</i>
											</a>
											<form action="{{ route('home-pengaduan.destroy',$pengaduan->id ) }}" method="post" class="d-inline" onsubmit="return confirm('yakin hapus data')">
												@method('delete')
												@csrf 
												<button class="btn btn-danger btn-sm">
												<i class="fa fa-trash">delete</i>
												</button>
											</form> -->
										
									</tr>
                        		@endforeach
                        	</thead>
						</table>
@endsection