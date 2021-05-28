<html>
	<body>
		<center>
			<h4>Pengaduan Msayarakat</h4>
		</center>
	
		<div class="container">
			<div class="row">
					<table class="table">
                    <thead>
						<tr>
                            <th>No</th>
                            <th>No Tiket</th>
                            <th>Laporan Pengaduan</th>
                            <th>Tanggal Tanggapam</th>
                            <th>Email Pengadu</th>
                            <th>Laporan Tanggapan</th>
                            <th>Status</th>
						</tr>
					</thead>	
							<tbody>
							@php ($i = 1)
						@foreach($dataTanggapan as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->pengaduan_tiket }}</td>
                            <td>{{ @$item->pengaduan->laporan_pengaduan }}</td>
                            <td>{{ $item->tanggal_tanggapan }}</td>
                            <td>{{ $item->pengaduan_email }}</td>
                            <td>{{ $item->laporan_tanggapan }}</td>
                            <td>{{ $item->pengaduan_status }}</td>
                         </tr>
                         @php ($i++)
                        @endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
	</body>
</html>

@section('js')
<script src="{{asset('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
@endsection