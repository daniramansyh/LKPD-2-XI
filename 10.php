<?php
$jawabanBenar = ['a', 'b', 'c', 'a', 'c', 'b', 'a', 'a', 'a', 'a'];

$jawabanSiswa = ['a', 'b', 'c', 'a', 'b', 'b', 'a', 'a', 'a', 'a'];

$namaSiswa = 'Xeta';

$jumlahBenar = 0;
$jumlahSalah = 0;

for ($i = 0; $i < count($jawabanBenar); $i++) {
    if ($jawabanSiswa[$i] == $jawabanBenar[$i]) {
        $jumlahBenar++;
    } else {
        $jumlahSalah++;
    }
}

echo "Nama: {$namaSiswa} <br> Jumlah Benar: {$jumlahBenar} <br> Jumlah Salah: {$jumlahSalah}";

// 30 menit
?>
