<?php
// Bagian 1: Menampilkan informasi pengguna
$nis = 2233248123456";
$nama = "Daffa Raihan Nabawi";
$alamat = "Perum Telaga Kencana Cluster rt 7 rw 6 no 20";
$telepon = "081292909797";
$email = "foerzy404@gmail.com";

echo "<h1>Informasi Pengguna</h1>";
echo "Nis : $nis<br>";
echo "Nama : $nama<br>";
echo "Alamat : $alamat<br>";
echo "Telepon : $telepon<br>";
echo "Email : $email<br>";

// Bagian 2: Menghitung nilai dan menentukan grade
$tugas = 999;
$uts = 999;
$uas = 999;

$nilai_akhir = ($tugas * 0.20) + ($uts * 0.35) + ($uas * 0.45);

$grade = '';
if ($nilai_akhir >= 85) {
    $grade = 'A';
} elseif ($nilai_akhir >= 68.5) {
    $grade = 'B';
} elseif ($nilai_akhir >= 58.5) {
    $grade = 'C';
} elseif ($nilai_akhir >= 40) {
    $grade = 'D';
} else {
    $grade = 'E';
}

echo "<h1>Informasi Nilai</h1>";
echo "Nis : $nis<br>";
echo "Nama : $nama<br>";
echo "N. Tugas : $tugas<br>";
echo "N. UTS : $uts<br>";
echo "N. UAS : $uas<br>";
echo "N. Akhir : $nilai_akhir<br>";
echo "N. Huruf : $grade<br>";
?>
