<table>
    <thead>
    <tr>
        <th>No</th>
        <th>No Tiket</th>
        <th>Tanggal Pengaduan</th>
        <th>Email</th>
        <th>Laporan Pengaduan</th>
        <th>Laporan Tanggapan</th>
        <th>File</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cetakPengaduan->tanggapan as $tanggapan)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $cetakPengaduan->no_tiket }}</td>
            <td>{{ $cetakPengaduan->tanggal_pengaduan }}</td>
            <td>{{ $cetakPengaduan->email }}</td>
            <td>{{ $cetakPengaduan->laporan_pengaduan }}</td>
            <td>{{ $tanggapan->tanggal_tanggapan}}</td>
            <td>{{ $tanggapan->laporan_tanggapan}}</td>
            <td>{{ $cetakPengaduan->file }}</td>
            <td>{{ $cetakPengaduan->status }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
