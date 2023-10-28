<?php
    $nama = "Dzikri";
    $uang = 800;
    $tarif = 50000;
    $kembalian = $uang - $tarif;

    if ($uang >= 100000){
        echo "======================== MASUK TIKET DUFAN ======================== <br>";
        echo "Nama : $nama <br>";
        echo "Selamat Datang di Dufan, untuk masuk ke dalam harganya $tarif <br>";
        echo "Uang Kamu = $uang <br>";
        echo "Selamat $nama kamu bisa memasuki Kawasan Dufan, selamat bersenang-senang ^_^ <br>";
        echo "-----------------------------------------------------------------------------------------------------------------";
    } else {
        echo "======================== MASUK TIKET DUFAN ======================== <br>";
        echo "Nama : $nama <br>";
        echo "Selamat Datang di Dufan, untuk masuk ke dalam harganya $tarif <br>";
        echo "Uang Kamu = $uang <br>";
        echo "Maaf $nama kamu tidak bisa masuk ke Dufan <br>";
        echo "-----------------------------------------------------------------------------------------------------------------";
    }
?>