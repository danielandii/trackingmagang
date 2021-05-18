@extends('layout')

@section('content')
	<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<h4><i class="icon-home2 mr-3 icon-2x"></i> <span class="font-weight-semibold">Home</span> -Laporan Pengaduan</h4>
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
						<!-- <div class="alert alert-success">
							{{$message}}
						</div> -->
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
                        		@foreach($dataPengaduan as $pengaduan)
                        			<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $pengaduan->no_tiket }}</td>
										<td>{{ $pengaduan->created_at->format('d F Y H:i') }}</td>	
										<td>{{ $pengaduan->email }}</td>
										<td>{{ $pengaduan->status }}</td>
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
										<td align="center">
											<div class="list-icons">
												<div class="btn-group ml-2 show">
														<a class="btn btn-info btn-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
															<i class="icon-menu7"></i>
														</a>

													<div class="dropdown-menu dropdown-menu-right">
														<a href="{{ route('admin.home-pengaduan.detail', $pengaduan->id)}}" class="dropdown-item"><i class="fas fa-clipboard text-blue-300"></i> tanggapi</a>
														<a class="dropdown-item delbutton" data-toggle="modal" data-target="#modal_theme_danger" data-uri="{{ route('admin.home-pengaduan.destroy',$pengaduan->id ) }}"><i class="icon-x badge-danger"></i> Delete</a>
													</div>
												</div>
											</div>
											<div id="modal_theme_danger" class="modal fade" tabindex="-1">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header bg-danger" align="center">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>

														<form action="{{ route('admin.home-pengaduan.destroy',$pengaduan->id ) }}" method="post" id="delform">
															@csrf
															@method('DELETE')
															<div class="modal-body" align="center">
																<h2> Hapus Data? </h2>
															</div>

															<div class="modal-footer">
																<button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
																<button type="submit" class="btn bg-danger">Hapus</button>
															</div>
														</form>
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
	<script src="{{asset('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/notifications/pnotify.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/notifications/bootbox.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/buttons/ladda.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/buttons/spin.min.js')}}"></script>

	<script src="{{asset('global_assets/js/demo_pages/components_modals.js')}}"></script>
	<script src="{{asset('assets/js/app.js')}}"></script>
	<script src="assets/js/app.js"></script>
	
<!-- /theme JS files -->
<script type="text/javascript">	
		$( document ).ready(function() {
	        // Default style
	        @if(session('error'))
	            new PNotify({
	                title: 'Error',
	                text: '{{ session('error') }}.',
	                icon: 'icon-blocked',
	                type: 'error'
	            });
            @endif
            @if ( session('success'))
	            new PNotify({
	                title: 'Success',
	                text: '{{ session('success') }}.',
	                icon: 'icon-checkmark3',
	                type: 'success'
	            });
            @endif

		});
	</script>


@endsection
