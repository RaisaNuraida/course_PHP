<?php
    //Zia dan teman-teman ingin menonton film
    //di bioskop subang, mereka ingin nonton film "Air mata diujung sejadah."
    //Namun dibioskop tersebut ada syarat untuk bisa masuk, yaitu umurnya harus 17 tahun keatas.
    
    //Dan disana ada 3 kategori Tiket nonton:
    //1. VVIP (Tiket, makan dan Sweet Box)          Idr. 100.000/kursi
    //2. VIP (Tiket dan makan)                      Idr. 80.000/kursi
    //3. Reguler (Tiket)                            Idr. 50.000/kursi

    $nama = "Zia";
    $umur = 18;
    $film = "Air mata diujung sejadah";
    $tiket = "vip";
    $bayar = 100000;
    $vvip = 100000;
    $vip = 80000;
    $reg = 50000;
    $sisa;

    if ($nama == $nama) {
        echo "Nama : $nama <br>";
            if ($umur <= 16) {
                echo "Umur : $umur <br>";
                echo "Mohon maaf $nama kamu tidak memenuhi syarat usia";
            } else if ($umur >= 16) {
                echo "Umur : $umur <br>";
                if ($film == "Air mata diujung sejadah") {
                    echo "Film : Air mata diujung sejadah <br>";
                    echo "Silahkan Pilih Tiket <br>";
                    echo "1. VVIP (Tiket, makan dan Sweet Box) Idr. 100.000/kursi <br>";
                    echo "2. VIP (Tiket dan makan) Idr. 80.000/kursi <br>";
                    echo "3. Reguler (Tiket) Idr. 50.000/kursi <br>";
                    if ($tiket == "vvip") {
                        if ($bayar >= 100000) {
                            echo "Uang = $bayar <br>";
                            $sisa = $bayar - $vvip;
                            echo "Bayar = $bayar - $vvip <br>";
                            echo "Kembalian = $sisa <br>";
                            echo "Selamat $nama Menonton pada kursi VVIP <br>";
                        } else if ($bayar <= 99999) {
                            echo "Maaf uang anda kurang";
                        }
                    } else if ($tiket == "vip") {
                        if ($bayar >= 80000) {
                            echo "Uang = $bayar <br>";
                            $sisa = $bayar - $vip;
                            echo "Bayar = $bayar - $vip <br>";
                            echo "Kembalian = $sisa <br>";
                            echo "Selamat $nama Menonton pada kursi VIP <br>";
                        } else if ($bayar <= 79999) {
                            echo "Maaf uang anda kurang";
                        }
                    } else if ($tiket == "reg") {
                        if ($bayar >= 50000) {
                            echo "Uang = $bayar <br>";
                            $sisa = $bayar - $vip;
                            echo "Bayar = $bayar - $vip <br>";
                            echo "Kembalian = $sisa <br>";
                            echo "Selamat $nama Menonton pada kursi REGULAR <br>";
                        } else if ($bayar <= 49999) {
                            echo "Maaf uang anda kurang";
                        }
                    } else {
                        echo "Maaf tiket tidak tersedia";
                    }
                } else {
                    echo "Maaf film tidak tersedia";
                }
            }
    }
?>