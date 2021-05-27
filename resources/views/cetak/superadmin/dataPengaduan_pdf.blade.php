<html>
	<body>
		<center>
			<h4>Pengaduan Msayarakat</h4>
		</center>
	
		<div class="container">
			<div class="row">
					<table class="table">
							<thead class="thead-dark">
								<tr>
									<th>No</th>
									<th>No Tiket</th>
									<th>Tanggal Pengaduan</th>
									<th>email</th>
									<th>Status Laporan</th>
								</tr>
							</thead>
							<tbody>
							@php ($i = 1)
							@foreach($dataPengaduan as $Pengaduan)
								<tr>
									<td>{{ $i }}</td>
									<td>{{ $Pengaduan->pengaduan_tiket}}</td>
									<td>{{ $Pengaduan->created_at->format('d F Y H:i')}}</td>
									<td>{{ $Pengaduan->email}}</td>
									<td>{{ $Pengaduan->status}}</td>
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