<?php
error_reporting(0);
$server = "localhost";
$user = "root";
$pass = "";
$database = "project_asesmen";
$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));

$hEkonomi = 150000;
$hBisnis = 300000;
$hEksekutif = 600000;

function totalHarga($a, $b, $c)
{
    return ($a * $c) + $b * (0.9 * $c);
}

$kelas = ["Ekonomi", "Bisnis", "Eksekutif"];

if ($_POST['Kelas'] == 'Ekonomi') {
    $_POST['Harga'] = $hEkonomi;
} else if ($_POST['Kelas'] == 'Bisnis') {
    $_POST['Harga'] = $hBisnis;
} else if ($_POST['Kelas'] == 'Eksekutif') {
    $_POST['Harga'] = $hEksekutif;
}

if ($_POST['Kelas'] == 'Ekonomi') {
    $_POST['Total'] = totalHarga($_POST['JumlahP'], $_POST['JumlahL'], $hEkonomi);
} else if ($_POST['Kelas'] == 'Bisnis') {
    $_POST['Total'] = totalHarga($_POST['JumlahP'], $_POST['JumlahL'], $hBisnis);
} else if ($_POST['Kelas'] == 'Eksekutif') {
    $_POST['Total'] = totalHarga($_POST['JumlahP'], $_POST['JumlahL'], $hEksekutif);
}

if (isset($_POST['Pesan'])) {
    //Data akan disimpan Baru
    $simpan = mysqli_query($koneksi, "INSERT INTO tiket_bus (nama, no_identitas, no_hp, kelas, jumlah_pnp, jumlah_lns, harga, total)
            VALUES ('$_POST[Nama]', 
                     '$_POST[Identitas]', 
                     '$_POST[Hp]', 
                     '$_POST[Kelas]',
                     '$_POST[JumlahP]',
                     '$_POST[JumlahL]',
                     '$_POST[Harga]',
                     '$_POST[Total]'
                     )
           ");
}
if ($simpan) {
    echo "<script>
						alert('Pemesanan tiket berhasil!');
						document.location='index.php';
				     </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tiket Bus AKAP</title>
    <link rel="stylesheet" href=".\assets\bootstrap-5.0.2-dist\css\bootstrap.css">
    <script src=".\assets\bootstrap-5.0.2-dist\js\bootstrap.min.js"></script>
    <script src=".\assets\bootstrap-5.0.2-dist\jquery\jquery-3.6.1.min.js"></script>
    <style>
        body {
            background-color: aquamarine;
        }
    </style>
</head>

<body>
    <h1 style="text-align:center;">Pemesanan Tiket Bus AKAP Online</h1>
    <form action="" method="post">
        <table class="table border-primary" align="center" style="width:75%;">
            <thead>
                <tr>
                    <td colspan="2" align="center">Form Pembelian Tiket</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>Nama Lengkap</b></td>
                    <td><input type="text" name="Nama" class="form-control" required></td>
                </tr>
                <tr>
                    <td><b>Nomor Identitas</b></td>
                    <td><input type="text" name="Identitas" class="form-control" required></td>
                </tr>
                <tr>
                    <td><b>No. Hp</b></td>
                    <td><input type="text" name="Hp" class="form-control" required></td>
                </tr>
                <tr>
                    <td><b>Kelas Penumpang</b></td>
                    <td><select name="Kelas" id="Kelas" class="form-control" required>
                            <option value="" selected disabled hidden>Pilih Kelas</option>
                            <?php
                            foreach ($kelas as $qelas) {
                                echo "<option value=" . $qelas . ">" . $qelas . "</option>";
                            }
                            ?>
                        </select></td>
                </tr>
                <tr>
                    <td><b>Tanggal Keberangkatan</b></td>
                    <td><input type="date" name="Tanggal" class="form-control" required></td>
                </tr>
                <tr>
                    <td><b>Jumlah Penumpang</b></br>
                        Bukan lansia (Usia < 60)</td>
                    <td><select name="JumlahP" id="JumlahP" class="form-control" required>
                            <option value=0 selected hidden></option>
                            <?php
                            for ($i = 0; $i <= 100; $i++) {
                                echo "<option value=" . $i . ">" . $i . "</option>";
                            }
                            ?>
                        </select></td>
                </tr>
                <tr>
                    <td><b>Jumlah Penumpang Lansia</b></br>
                        Usia 60 tahun ke atas</td>
                    <td><select name="JumlahL" id="JumlahL" class="form-control">
                            <option value=0 selected hidden></option>
                            <?php
                            for ($j = 0; $j <= 100; $j++) {
                                echo "<option value=" . $j . ">" . $j . "</option>";
                            }
                            $jumlahP = $_POST['JumlahP'];
                            $jumlahL = $_POST['jumlahL'];
                            ?>
                        </select></td>
                </tr>
                <tr>
                    <td><b>Harga Tiket</b></td>
                    <td name="Harga" id="Harga"></td>
                </tr>
                <tr>
                    <td><b>Total Bayar</b></td>
                    <td name="Total" id="Total"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" name="Setuju" required>
                        <label for="Setuju">Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button type="button" id="Hitung" value="Hitung" class="btn btn-primary">Hitung Total bayar</button>
                        <button type="submit" name="Pesan" class="btn btn-success">Pesan Tiket</button>
                        <a href="index.php"><button type="button" name="Cancel" class="btn btn-danger">Cancel</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#Hitung').click(function() {
                $.ajax({
                    type: 'POST',
                    url: 'harga.php',
                    data: {
                        Kelas: $('#Kelas').val(),
                    },
                    success: function(data) {
                        $('#Harga').html(data);
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: 'perhitungan.php',
                    data: {
                        JumlahP: $('#JumlahP').val(),
                        JumlahL: $('#JumlahL').val(),
                        Kelas: $('#Kelas').val(),
                    },
                    success: function(data) {
                        $('#Total').html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>