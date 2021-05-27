<table>
    <thead>
    <tr>
        <th>No</th>
        <th>No Tiket</th>
        <th>Tanggal Pengaduan</th>
        <th>Email</th>
        <th>Laporan Pengaduan</th>
        <th>File</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @php ($i = 1)
    @foreach($dataPengaduan as $item)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $item->no_tiket }}</td>
            <td>{{ $item->tanggal_pengaduan }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->laporan_pengaduan }}</td>
            <td>{{ $item->file }}</td>
            <td>{{ $item->status }}</td>
        </tr>
        @php ($i++)
    @endforeach
    </tbody>
</table>
