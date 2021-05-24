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
	<div class="card">
		<!-- Hover rows -->
		<div class="rows">
			<div class="col">
			@if ($message = Session::get('success'))
				<div class="alert alert-success">
					{{$message}}
				</div>
			@endif
			<div class="table-responsive">

				<table class="table datatable-basic table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Pengaduan_Id</th>
							<th>Tanggal Tanggapan</th>
							<th>Laporan Tanggapan</th>
							<th>Status Pengaduan</th>
							<th class="text-center">Actions</th>
							

						</tr>
						</thead>
						<tbody>
						@if(!$historytanggapan->isEmpty())
									@php ($i = 1)
						@foreach($historytanggapan as $tanggapan)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $tanggapan->pengaduan_tiket}}</td>
								<td>{{ $tanggapan->created_at->format('d F Y H:i')}}</td>
								<td>{{ $tanggapan->laporan_tanggapan}}</td>
								<td>{{ $tanggapan->pengaduan_status}}</td>
								<td align center>
							<a href="{{ route('admin.home-history.show', $tanggapan->pengaduan_tiket)}}" class="dropdown-item"><i class="icon-file-eye2 mr-0 icon-1x list-icons-item text-blue-300"></i> show</a>
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
		</div>
		<!-- /hover rows -->
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

@endsection


