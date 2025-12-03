<?php
// Input Total Belanja
$total_belanja = 550000; // Contoh input Rp 550.000

$diskon_persen = 0; // Inisialisasi diskon 0%

echo "<h2>2. Kalkulator Diskon</h2>";
echo "Total Belanja Awal: Rp " . number_format($total_belanja, 0, ',', '.') . "<br>";

// Cek kondisi diskon, dimulai dari yang tertinggi agar logikanya benar
if ($total_belanja >= 1000000) {
    $diskon_persen = 30;
} elseif ($total_belanja >= 500000) {
    $diskon_persen = 20;
} elseif ($total_belanja >= 100000) {
    $diskon_persen = 10;
} 
// Jika di bawah Rp 100.000, diskon tetap 0% (tidak perlu else)

// Hitung nilai diskon
$nilai_diskon = $total_belanja * ($diskon_persen / 100);

// Hitung total bayar
$total_bayar = $total_belanja - $nilai_diskon;

echo "Diskon Diterima: " . $diskon_persen . "% (Rp " . number_format($nilai_diskon, 0, ',', '.') . ")<br>";
echo "<strong>Total Bayar: Rp " . number_format($total_bayar, 0, ',', '.') . "</strong>";

?>