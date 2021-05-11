@extends('layout')

@section('content')

<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4><i class="icon-home2 mr-3 icon-2x"></i> <span class="font-weight-semibold">Home</span> - History Tanggapan</h4>
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
							<th>Pengaduan_Id</th>
							<th>Tanggal Tanggapan</th>
							<th>Laporan Tanggapan</th>
							<th>Status Pengaduan</th>
							<th class="text-center">Actions</th>
						</tr>
						@foreach($historytanggapan as $tanggapan)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $tanggapan->pengaduan_tiket}}</td>
								<td>{{ $tanggapan->created_at->format('d F Y H:i')}}</td>
								<td>{{ $tanggapan->laporan_tanggapan}}</td>
								<td>{{ $tanggapan->pengaduan_status}}</td>
								<td align="center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="" class="dropdown-item"><i class="icon-pencil7"></i> Edit</a>
							            <a class="dropdown-item delbutton" data-toggle="modal" data-target="#modal_theme_danger" data-uri=""><i class="icon-x"></i> Delete</a>
									</div>
								</div>
							</div>
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


