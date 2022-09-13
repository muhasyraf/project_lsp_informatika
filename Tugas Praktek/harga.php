<?php

$hEkonomi = 150000;
$hBisnis = 300000;
$hEksekutif = 600000;

if ($_POST['Kelas'] == 'Ekonomi') {
    echo "Rp" . $hEkonomi;
}
elseif ($_POST['Kelas'] == 'Bisnis') {
    echo "Rp" . $hBisnis;
}
elseif ($_POST['Kelas'] == 'Eksekutif') {
    echo "Rp" . $hEksekutif;
}

?>