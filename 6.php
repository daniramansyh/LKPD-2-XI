<?php
$barang = [
    [
        'nama' => 'Pasta Gigi',
        'harga' => 18000,
        'jumlahBeli' => 2,
    ],
    [
        'nama' => 'Sabun Mandi',
        'harga' => 5000,
        'jumlahBeli' => 5,
    ],
    [
        'nama' => 'Aloe Vera Sheet Mask',
        'harga' => 15000,
        'jumlahBeli' => 10,
    ],
];

$totalHar = 0;

echo "Daftar belanjaan :";
echo "<ol>";

foreach ($barang as $item) {
    $subTot = $item['harga'] * $item['jumlahBeli'];
    $totalHar += $subTot;
    $formatSub = number_format($subTot, 0, ',', '.');
    echo "<li>{$item['nama']} ({$item['jumlahBeli']}) : Rp. {$formatSub}</li>";
}
echo "</ol>";
$formatTot = number_format($totalHar, 0, ',', '.');
echo "Total harga yang harus Anda bayar adalah Rp. {$formatTot}\n";

// 35 menit
?>