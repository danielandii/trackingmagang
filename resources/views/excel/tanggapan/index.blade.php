<table>
    <thead>
    <tr>
        <th>No</th>
        <th>No Tiket</th>
        <th>Tanggal Tanggapam</th>
        <th>Email Pengadu</th>
        <th>Laporan Tanggapan</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dataTanggapan as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->pengaduan_tiket }}</td>
            <td>{{ $item->tanggal_tanggapan }}</td>
            <td>{{ $item->pengaduan_email }}</td>
            <td>{{ $item->laporan_tanggapan }}</td>
            <td>{{ $item->pengaduan_status }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
