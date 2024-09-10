<?php
function cekTeks($teks)
{
    preg_match_all('/[\'^£$%&*!()}{@#~?><>,.|=_+¬-]/', $teks, $matches);

    if (count($matches[0]) > 0) {
        $karakterTerpisah = implode(', ', $matches[0]);
        echo "Teks: " . $teks . "<br>Teks mengandung karater: " . $karakterTerpisah;

        print_r($matches);
    } else {
        echo "Teks: " . $teks . "<br>Teks tidak mengandung karakter.";
    }
}
$teks = "Selamat ulang tahun yang ke-17";
$teks2 = "Selamat ulang tahun ya.";

cekTeks($teks);
echo "<br>";
cekTeks($teks2);

// 30 menit
?>