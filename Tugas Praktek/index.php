<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tiket Bus AKAP</title>
    <link rel="stylesheet" href=".\assets\bootstrap-5.0.2-dist\css\bootstrap.css">
    <style>
        img {
            width: 100%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        body {
            background-color: midnightblue;
        }

        .kelas {
            text-align: center;
        }

        .table {
            background-color: aquamarine;
            width: 75%;
            margin-top: 25px;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <table class="table table-bordered border-primary" align="center">
        <thead class="table-dark">
            <tr>
                <td colspan="4" align="center">Bus Antar Kota Antar Provinsi</td>
            </tr>
        </thead>
        <tbody>
            <tr align="center">
                <th style="width:100px;">Kelas Bus</th>
                <th>Tampilan Interior</th>
                <th>Tampilan Eksterior</th>
                <th>Harga</th>
            </tr>
            <tr>
                <td class="kelas">Ekonomi</td>
                <td><img src=".\assets\interior_akap_eko.jpg"></td>
                <td><img src=".\assets\exterior_akap_eko.jpg"></td>
                <td>Rp150.000</br>
            <a href=".\formpemesanan.php"><button class="btn btn-success">Pesan Tiket</button></a></td>
            </tr>
            <tr>
                <td class="kelas">Bisnis</td>
                <td><img src=".\assets\interior_akap_bisnis.jpg"></td>
                <td><img src=".\assets\exterior_akap_bisnis.jpeg"></td>
                <td>Rp300.000</br>
                <a href=".\formpemesanan.php"><button class="btn btn-success">Pesan Tiket</button></a></td>
            </tr>
            <tr>
                <td class="kelas">Eksekutif</td>
                <td><img src=".\assets\interior_akap_ekse.jpg"></td>
                <td><img src=".\assets\exterior_akap_ekse.jpg"></td>
                <td>Rp600.000</br>
                <a href=".\formpemesanan.php"><button class="btn btn-success">Pesan Tiket</button></a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>