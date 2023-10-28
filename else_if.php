<?php
    $nilai = 80;

    if ($nilai > 80){
        echo ("LULUS <br>");
    } else {
        echo ("TIDAK LULUS <br>");
    }


    $username = "";
    $password = 123;

    if ($username == "Raisa" && $password == 123) {
        echo ("Sudah login <br>");
    } else if ($username == "" || $password = "") {
        echo ("Usn/pw tidak boleh kosong <br>");
    } else {
        echo ("Gagal Login <br>");
    }

    $nilai = 123;

    if ($nilai >= 100){
        echo ("YANG BENER INPUTNYA");
    } else if ($nilai >= 100) {
        echo ("BAGUS BANGET");
    } else if ($nilai >= 89) {
        echo ("BAGUS AJA");
    } else if ($nilai >= 79) {
        echo ("BAGUS BAGUS");
    } else if ($nilai >= 69) {
        echo ("BAGUS");
    } else if ($nilai >= 59) {
        echo ("CUKUP");
    } else if ($nilai >= 49) {
        echo ("SANGAT JELEK");
    } else if ($nilai >= 30) {
        echo ("JELEK BANGET");
    } else {
        echo ("GATAU");
    }
?>