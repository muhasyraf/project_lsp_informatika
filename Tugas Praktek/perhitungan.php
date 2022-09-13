<?php

$hEkonomi = 150000;
$hBisnis = 300000;
$hEksekutif = 600000;

if ($_POST['Kelas'] == 'Ekonomi') {
    echo "Rp" . ($_POST['JumlahP']*$hEkonomi) + $_POST['JumlahL']*(0.9*$hEkonomi);
}
else if ($_POST['Kelas'] == 'Bisnis') {
    echo "Rp" . ($_POST['JumlahP']*$hBisnis) + $_POST['JumlahL']*(0.9*$hBisnis);
}
else if ($_POST['Kelas'] == 'Eksekutif') {
    echo "Rp" . ($_POST['JumlahP']*$hEksekutif) + $_POST['JumlahL']*(0.9*$hEksekutif);
}

?>