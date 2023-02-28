<?php
// defisinikan variable konstanta
define ('PHI', 3.14);

// soal 1 hitung luas lingkaran dengan jari2
// soal 2 hitung keliling nya

// defisinikan nilai jari2
$jari = 8;

// hitung nilai luas
$luas = PHI * $jari * $jari;
// hitung nilai keliling
$kll = 2 * PHI * $jari;

echo 'luas lingkaran dari jari jari ' .$jari. ' = '.$luas;
echo '<br/> keliling nya : ' .$kll;
?>