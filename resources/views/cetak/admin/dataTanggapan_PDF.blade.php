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
							<th>nomer tiket</th>
							<th>Tanggal Tanggapan</th>
							<th>Laporan Tanggapan</th>
							<th>Status Pengaduan</th>
						</tr>
					</thead>	
							<tbody>
						
							@php ($i = 1)
						@foreach($historytanggapan as $tanggapan)
                        			<tr>
                                        <td>{{$i}}</td>
                                        <td>{{ $tanggapan->pengaduan_tiket}}</td>
										<td>{{ $tanggapan->created_at->format('d F Y H:i') }}</td>
										<td>{{ $tanggapan->laporan_tanggapan}}</td>
										<td>{{ $tanggapan->pengaduan_status}}</td>
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