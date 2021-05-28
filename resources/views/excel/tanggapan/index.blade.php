<table>
    <thead>
    <tr>
        <th>No</th>
        <th>No Tiket</th>
        <th>Tanggal Tanggapan</th>
        <th>Email Pengaduan</th>
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
            <td>{{ $item->tanggal_tanggapan }}</td>
            <td>{{ $item->pengaduan_email }}</td>
            <td>{{ $item->laporan_tanggapan }}</td>
            <td>{{ $item->pengaduan_status }}</td>
        </tr>
        @php ($i++)
    @endforeach
    </tbody>
</table>
