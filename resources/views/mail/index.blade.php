<!-- <h1>Halo {{ $email }}</h1>
<p>Pengaduan Anda telah kami simpan dengan No Tiket : {{$no_tiket}} <a href="http://dev.tracking.local/pengaduan/cari?query={{$no_tiket}}">klik disini</a> yang Anda Adukan pada Tanggal {{$tanggal_pengaduan}},
Pengaduan anda akan segera kami proses atas perhatiannya kami ucapkan terima kasih.</p> -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<style>
    .bordered {
        border: 1px solid black
    }

    td {
        border: 1px solid black
    }
</style>

<body>
    <h1>
        <center>
            <font size="5" face="arial">PENGADUAN MASYARAKAT</font>
        </center>
    </h1>
    <center><b>
            <img src="tracking/public/assets/image/Pusat-Pelayanan-Pengaduan-Masyarakat-e1522591013592.png">
            <center>
                    <hr>
                    <h4>Hallo, {{ $email }}</h4>
                    <p>Kami telah Memverifikasi Pengaduan Anda pada Tanggal {{$tanggal_pengaduan}}. </a></p>
                    <p>
                        Selanjutnya, silahkan cek No Tiket : {{$no_tiket}} dan bisa langsung menuju ke link <a href="http://dev.tracking.local/pengaduan/cari?query={{$no_tiket}}">klik disini</a> ,
                        Pengaduan anda akan segera kami proses atas perhatiannya kami ucapkan terima kasih
                    </p>
                    <hr>
</body>

</html>

