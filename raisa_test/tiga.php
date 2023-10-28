<?php
    $nama = "dzikri";
    $gaji = 1000000;
    $tunjangan = 500000;
    $potongan = 500000;
    $sisa = $gaji + $tunjangan - $potongan;

    echo "=============== MENGHITUNG UPAH KERJA =============== <br>";
    echo "Nama : $nama <br>";
    echo "Gaji Pokok : $gaji <br>";
    echo "Tunjangan : $tunjangan <br>";
    echo "Potong : $potongan <br>";
    echo "Upah bersih yang diterima $nama adalah $sisa <br>";
    echo "-------------------------------------------------------------------------------------------";
?>