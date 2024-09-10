<?php
    function cutTeks($teks) {
        $teks = substr($teks, 0,50) . "...";
        return $teks;
    };

    $longTeks = "Teknologi telah mengubah cara manusia berinteraksi satu sama lain di seluruh dunia. Internet menjadi salah satu inovasi terbesar yang memungkinkan orang untuk berkomunikasi tanpa batasan jarak.";
    echo "<b> Kalimat awal : </b>" . cutTeks($longTeks);

    // 20 menit
    ?>