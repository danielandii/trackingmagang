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
			<div class="card">
				<div class="col">
<<<<<<< HEAD
				<br/>
		<a href="cetak" class="btn btn-primary">CETAK PDF</a>
=======
				<div class="right">
					<a href="/pengaduan/export" class="btn btn-primary">Eksport</a>
				</div>
>>>>>>> 60fbb6113a416f99a7f0240b21d5d7487c66b116
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
							</thead>
							<tbody>
								@if(!$dataPengaduan->isEmpty())
								@php ($i = 1)
                        		@foreach($dataPengaduan as $pengaduan)
                        			<tr>
										<td>{{$i}}</td>
										<td><div class="datatable-column-width">{{ $pengaduan->no_tiket }}</div></td>
										<td><div class="datatable-column-width">{{ $pengaduan->created_at->format('d F Y H:i') }}</div></td>	
										<td><div class="datatable-column-width">{{ $pengaduan->email }}</div></td>
										<td><div class="datatable-column-width">{{ $pengaduan->status }}</div></td>
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
										</td>
									</tr>
									@php ($i++)
                        		@endforeach
								@else
				  				<tr><td align="center" colspan="4">Data Kosong</td></tr>
								@endif 
							</tbody>
                        </table>
					</div>
				</div>
			<!-- /hover rows -->
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
                    			
									
	<!-- /content area -->


@endsection

@section('js')
<link href="{{asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
<!-- Theme JS files -->
<script src="{{asset('global_assets/js/plugins/notifications/pnotify.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/notifications/bootbox.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/buttons/spin.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/buttons/ladda.min.js')}}"></script>

	<script src="{{asset('assets/js/app.js')}}"></script>
	<script src="{{asset('global_assets/js/demo_pages/components_modals.js')}}"></script>
	<script>
		//modal delete
		$(document).on("click", ".delbutton", function () {
		     var url = $(this).data('uri');
		     $("#delform").attr("action", url);
		});

		var DatatableBasic = function() {

		    // Basic Datatable examples
		    var _componentDatatableBasic = function() {
		        if (!$().DataTable) {
		            console.warn('Warning - datatables.min.js is not loaded.');
		            return;
		        }

		        // Setting datatable defaults
		        $.extend( $.fn.dataTable.defaults, {
		            autoWidth: false,
		            columnDefs: [{ 
		                orderable: false,
		                width: 100,
		                targets: [ 3 ]
		            }],
		            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
		            language: {
		                search: '<span>Filter:</span> _INPUT_',
		                searchPlaceholder: 'Type to filter...',
		                lengthMenu: '<span>Show:</span> _MENU_',
		                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
		            }
		        });

		        // Basic datatable
		        $('.datatable-basic').DataTable();

		        // Alternative pagination
		        $('.datatable-pagination').DataTable({
		            pagingType: "simple",
		            language: {
		                paginate: {'next': $('html').attr('dir') == 'rtl' ? 'Next &larr;' : 'Next &rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr; Prev' : '&larr; Prev'}
		            }
		        });

		        // Datatable with saving state
		        $('.datatable-save-state').DataTable({
		            stateSave: true
		        });

		        // Scrollable datatable
		        var table = $('.datatable-scroll-y').DataTable({
		            autoWidth: true,
		            scrollY: 300
		        });

		        // Resize scrollable table when sidebar width changes
		        $('.sidebar-control').on('click', function() {
		            table.columns.adjust().draw();
		        });
		    };

		    // Select2 for length menu styling
		    var _componentSelect2 = function() {
		        if (!$().select2) {
		            console.warn('Warning - select2.min.js is not loaded.');
		            return;
		        }

		        // Initialize
		        $('.dataTables_length select').select2({
		            minimumResultsForSearch: Infinity,
		            dropdownAutoWidth: true,
		            width: 'auto'
		        });
		    };


		    //
		    // Return objects assigned to module
		    //

		    return {
		        init: function() {
		            _componentDatatableBasic();
		            _componentSelect2();
		        }
		    }
		}();


		// Initialize module
		// ------------------------------

		document.addEventListener('DOMContentLoaded', function() {
		    DatatableBasic.init();
		});
	</script>
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
