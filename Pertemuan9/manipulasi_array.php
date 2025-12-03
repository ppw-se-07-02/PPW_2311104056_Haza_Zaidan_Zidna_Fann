<?php
$nilai_mahasiswa = [75, 89, 65, 90, 85, 70, 98, 65, 69, 70, 12];
$nilai_lulus = 70;
$jumlah_lulus = 0;

echo "<h2>3. Manipulasi Array Nilai</h2>";
echo "Array Nilai: [" . implode(", ", $nilai_mahasiswa) . "]<br>";
echo "Batas Kelulusan: ≥" . $nilai_lulus . "<br><br>";

// 1. Nilai tertinggi
$nilai_tertinggi = max($nilai_mahasiswa);
echo "Nilai Tertinggi: " . $nilai_tertinggi . "<br>";

// 2. Nilai terendah
$nilai_terendah = min($nilai_mahasiswa);
echo "Nilai Terendah: " . $nilai_terendah . "<br>";

// 3. Rata-rata nilai
$total_nilai = array_sum($nilai_mahasiswa);
$jumlah_data = count($nilai_mahasiswa);
$rata_rata = round($total_nilai / $jumlah_data, 2);
echo "Rata-rata Nilai: " . $rata_rata . "<br>";

// 4. Jumlah mahasiswa yang lulus (>=70)
foreach ($nilai_mahasiswa as $nilai) {
    if ($nilai >= $nilai_lulus) {
        $jumlah_lulus++;
    }
}
echo "Jumlah Mahasiswa Lulus (≥70): " . $jumlah_lulus;

?>