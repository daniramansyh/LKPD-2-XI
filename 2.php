<?php
date_default_timezone_set('Asia/Jakarta');
$money = 30000;

$hari_ini = date("l");

if ($hari_ini == "Tuesday") {
    $dayDiskon = $money * 0.05;
    if ($money > 100000) {
        $upDiskon = $money * 0.07;
        $moneyDeal = $money - $upDiskon - $dayDiskon;
    }
} else {
    if ($money > 100000) {
        $upDiskon = $money * 0.07;
        $moneyDeal = $money - $upDiskon;
    } else {
        $moneyDeal = $money;
    }
}

echo 'Hari ini hari: ' . $hari_ini . '<br>';
echo 'Total pembelanjaan: Rp.' . number_format($money, 3, ",", ".") . '<br>';
echo 'Total yang harus di bayarkan: Rp.' . number_format($moneyDeal, 2, ",", ".");

// 50 menit
?>