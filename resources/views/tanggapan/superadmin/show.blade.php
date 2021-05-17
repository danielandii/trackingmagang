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
									<th>Status Pengaduan</th>
									<th>Laporan Tanggapan</th>
								</tr>
                        		@foreach($dataTanggapan as $tanggapan)
                        			<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $tanggapan->pengaduan_tiket }}</td>
										<td>{{ $tanggapan->tanggal_tanggapan }}</td>
										<td>{{ $tanggapan->pengaduan_status}}</td>
										<td>{{ $tanggapan->laporan_tanggapan}}</td>
									</tr>
                        		@endforeach
                        	</thead>
						</table>
@endsection