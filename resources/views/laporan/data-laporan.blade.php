@extends('layouts')

@section('content')


	<!-- Content area -->
	<div class="content">

		<!-- Hover rows -->
		<div class="card">
			<div class="card-header header-elements-inline">
				<a href="{{ route('form-pengaduan') }}"><button type="button" class="btn btn-success rounded-round"><i class="icon-add mr-2"></i> Tambah Pengaduan</button></a>
			</div>
			<p>Cari Data Pegawai :</p>
			<form action="/pengaduan/cari" method="get">
							<div class="input-group mb-2">
								<div class="form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control" name="cari" value="" placeholder="Search">
									<div class="input-group-btn">
										<button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>Search</button>
								</div>
							</div>
						</form>
			<div class="table-responsive">

			<table class="table datatable-basic table-hover">
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
							<td>{{ $item->tanggal_pengaduan }}</td>
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
                                <a href="/detail-pengaduan/{{$item->id}}" class="btn btn-info">
									<i class="fas fa-clipboard">Detail</i>
								</a>
                            </td>
						</tr>
                        @endforeach
                        
					</thead>
			</table>
			</div>
		</div>
		<!-- /hover rows -->

	</div>
	<!-- /content area -->

@endsection

@section('js')
	<!-- Theme JS files -->
	<script src="{{asset('global_assets/js/plugins/notifications/pnotify.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/notifications/bootbox.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/buttons/spin.min.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/buttons/ladda.min.js')}}"></script>

	<script src="{{asset('assets/js/app.js')}}"></script>
	<script src="{{asset('global_assets/js/demo_pages/components_modals.js')}}"></script>
	<script src="{{asset('global_assets/js/demo_pages/content_cards_content.js')}}"></script>
	<script src="{{asset('global_assets/js/plugins/media/fancybox.min.js')}}"></script>

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