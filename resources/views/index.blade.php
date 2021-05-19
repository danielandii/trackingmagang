@extends('layout')

@section('content')

	<!-- Page header -->
	<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4><i class="icon-home2 mr-3 icon-2x"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-clipboard3 mr-3 icon-2x"></i></a>
			</div>
		</div>
	</div>
	<!-- /page header -->

	<!-- Content area -->
<div class="content">
	
	<!-- Quick stats boxes -->
	<div class="row">
		<h3><span class="font-weight">info laporan</span></h3>
	</div>
	<!-- <div class="row">
		<h4><span class="font-weight-semibold">Total Pengaduan : {{ $dataPengaduan->count('pengaduan')}}</span></h4>
	</div> -->
	<div class="row">
		<div class="col-lg-4">
				<div class="card bg-green-400">
					<blockquote class="blockquote d-flex py-2 mb-0">
						<div class="mr-4" style="padding-left: 1.875rem;">
							<i class="icon-clipboard3 mr-1 icon-4x"></i>
						</div>
						
						<div>
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">{{ $dataPengaduan->count('pengaduan')}}</h3>
							</div>
							<div>
								total pengaduan
							</div>
						</div>
					</blockquote>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card bg-pink-400">
					<blockquote class="blockquote d-flex py-2 mb-0">
						<div class="mr-4" style="padding-left: 1.875rem;">
							<i class="icon-stack-plus icon-4x"></i>
						</div>
						
						<div>
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">{{ $dataPengaduan->where('status','Baru')->count()}}</h3>
							</div>
							<div>
								Laporan Baru
							</div>
						</div>
					</blockquote>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card bg-brown-400">
					<blockquote class="blockquote d-flex py-2 mb-0">
						<div class="mr-4" style="padding-left: 1.875rem;">
							<i class="icon-stack-check mr-1 icon-4x"></i>
						</div>
						
						<div>
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">{{ $dataPengaduan->where('status','Sedang di Cek')->count()}}</h3>
							</div>
							<div>
								Laporan Sedang di Cek
							</div>
						</div>
					</blockquote>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card bg-purple-400">
					<blockquote class="blockquote d-flex py-2 mb-0">
						<div class="mr-4" style="padding-left: 1.875rem;">
							<i class="icon-forward icon-4x"></i>
						</div>
						
						<div>
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">{{ $dataPengaduan->where('status','Pengerjaan')->count()}}</h3>
							</div>
							<div>
								Laporan Sedang Pengerjaan
							</div>
						</div>
					</blockquote>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card bg-orange-400">
					<blockquote class="blockquote d-flex py-2 mb-0">
						<div class="mr-4" style="padding-left: 1.875rem;">
							<i class="icon-clipboard2 icon-4x"></i>
						</div>
						
						<div>
							<div class="d-flex">
								<h3 class="font-weight-semibold mb-0">{{ $dataPengaduan->where('status','Selesai')->count()}}</h3>
							</div>
							<div>
								Laporan Selesai
							</div>
						</div>
					</blockquote>
				</div>
			</div>
		</div>
	<!-- /quick stats boxes -->
</div>
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


