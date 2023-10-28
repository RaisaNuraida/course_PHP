<?php
    $tarif = 1100000;
    $kembalian = $tarif - 1000000;

    if ($tarif >= 1000000){
        echo "=============== TIKET JALAN TOL =============== <br>";
        echo ("Selamat anda memasuki jalan tol subang-bandung <br>");
        echo ("Kembalian = $kembalian <br>");
        echo "------------------------------------------------------------------------------";
    } else {
        echo "=============== TIKET JALAN TOL =============== <br>";
        echo ("Mohon maaf saldo anda kurang, mohon topup terlebih dahulu <br>");
        echo "------------------------------------------------------------------------------";
    }
?>