<?php
// Fungsi untuk mengecek apakah bilangan ganjil
function isGanjil($bilangan) {
    return $bilangan % 2 != 0;
}

// Hitung jumlah bilangan ganjil antara 10 sampai 123456
$jumlahGanjil = 0;
for ($i = 10; $i <= 123456; $i++) {
    if (isGanjil($i)) {
        $jumlahGanjil++;
    }
}

echo "Jumlah bilangan ganjil antara 10 sampai 123456 adalah: $jumlahGanjil";
?>