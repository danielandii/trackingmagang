@extends('layout')

@section('content')
<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Pengaduan</h4>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>
	<!-- Content area -->
	<div class="content">

		<!-- Hover rows -->
		<div class="rows">
		<div class="col">
		@if ($message = Session::get('success'))
			<div class="alert alert-success">
				{{$message}}
				</div>
		@endif
		<div class="table-responsive">

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
                        @foreach($tampilPengaduan as $pengaduan)
                        <tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $pengaduan->no_tiket }}</td>
							<td>{{ $pengaduan->tanggal_pengaduan }}</td>	
							<td>{{ $pengaduan->email }}</td>
							<td>{{ $pengaduan->status }}</td>
                            <td>
							<!-- {{ route('home-pengaduan.detail', $pengaduan->no_tiket)}} -->
                                <a href="{{ route('home-pengaduan.detail', $pengaduan->id)}}" class="btn btn-info">
									<i class="fas fa-clipboard"> Detail</i>
								</a>
                                <a href="{{route('home-pengaduan.destroy', $pengaduan->id)}}" class="btn btn-danger">
									<i class="fas fa-trash-alt"> Hapus</i>
								</a>
                            </td>
						</tr>
                        @endforeach
                        
					</thead>
			</table>
			</div>
			</div>
		</div>
		<!-- /hover rows -->

	</div>
	<!-- /content area -->


@endsection

@section('js')

<!-- Theme JS files -->
<script src="{{asset('global_assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
<script src="{{asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
<script src="{{asset('global_assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
<script src="{{asset('global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
<script src="{{asset('global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>

<script src="{{asset('assets/js/app.js') }}"></script>
<script src="{{asset('global_assets/js/demo_pages/dashboard.js') }}"></script>
<!-- /theme JS files -->

@endsection

