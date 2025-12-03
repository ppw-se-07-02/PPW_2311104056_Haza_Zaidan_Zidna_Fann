<?php
// Tentukan nilai input awal
$suhu_awal_C = 30; // 30 Celcius
$suhu_awal_F = 68; // 68 Fahrenheit

echo "<h2>1. Konversi Suhu</h2>";

// --- 1. Celcius ke Fahrenheit ---
$F = ($suhu_awal_C * 9/5) + 32;
$F_rounded = round($F, 2);
echo "1. " . $suhu_awal_C . "°C ke Fahrenheit = " . $F_rounded . "°F<br>";

// --- 2. Fahrenheit ke Celcius ---
$C = ($suhu_awal_F - 32) * 5/9;
$C_rounded = round($C, 2);
echo "2. " . $suhu_awal_F . "°F ke Celcius = " . $C_rounded . "°C<br>";

// --- 3. Celcius ke Kelvin ---
$K = $suhu_awal_C + 273.15;
$K_rounded = round($K, 2);
echo "3. " . $suhu_awal_C . "°C ke Kelvin = " . $K_rounded . "K";

?>