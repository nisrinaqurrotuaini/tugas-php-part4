<?php

$siswa = [
    "Ridea" => 85,
    "Sindi" => 70,
    "Alfin" => 90,
    "Tio" => 75,
    "Mira" => 80,
];

foreach ($siswa as $nama => $nilai) {
    
    if ($nilai > 75) {
        $keterangan = "Lulus";
    } else {
        $keterangan = "Tidak Lulus";
    }


echo "Nama: $nama, Nilai: $nilai, Keterangan: $keterangan<br>";
}