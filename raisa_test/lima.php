<?php
    $umur = 11;
    $nama = "dzikri";
    $tiket = 5;
    $tiket1 = "VVIP";
    $tiket2 = "VIP";
    $tiket3 = "REGULAR";

    if ($umur <= 10){
        echo "========== STADION GELORA BUNG KARNO ========== <br>";
        echo "=ㅤㅤㅤㅤㅤㅤㅤINDONESIA VS ARGENTINAㅤㅤㅤㅤㅤㅤ= <br>";
        echo "================================================ <br>";
        echo "Nama : $nama <br>";
        echo "Umur : $umur <br>";
        echo "Mohon maaf $nama kamu tidak memenuhi syarat memasuki stadion";
    } else if ($umur >= 10 || $tiket == 1 || $tiket && $vvip) {
        echo "========== STADION GELORA BUNG KARNO ========== <br>";
        echo "=ㅤㅤㅤㅤㅤㅤㅤINDONESIA VS ARGENTINAㅤㅤㅤㅤㅤㅤ= <br>";
        echo "================================================ <br>";
        echo "Nama : $nama <br>";
        echo "Umur : $umur <br>";
        echo "Silahkan Pilih Tiket <br>";
        echo "1. $tiket1 <br>";
        echo "2. $tiket2 <br>";
        echo "3. $tiket3 <br>";
        echo "Pilih Tiket : $tiket <br>";
        if ($tiket == 1)
        {
            echo "Selamat $nama Menonton Pada Tribun $tiket1";
        } else if ($tiket == 2 ) {
            echo "Selamat $nama Menonton Pada Tribun $tiket2";
        } else if ($tiket == 3) {
            echo "Selamat $nama Menonton Pada Tribun $tiket3";
        } else {
            echo "Maaf tiket tidak ada";
        }
    }
?>