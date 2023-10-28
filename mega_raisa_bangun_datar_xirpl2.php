<?php
//persegi;
    $s = 5;
    $luas;
    $keliling;

    echo "<h3>Rumus Persegi <br></h3>";
    echo "Luas = sisi * sisi <br>";
    $luas = $s * $s;
    echo " 5 * 5 = $luas <br><br>";
    $keliling = 4 * $s;
    echo "Keliling = 4 * sisi <br>";
    echo " 4 * 5 = $keliling";

//persegi panjang;
    $p = 10;
    $l = 5;
    $luas;
    $keliling;

    echo "<h3>Rumus Persegi panjang <br></h3>";
    echo "Luas = panjang * lebar <br>";
    $luas = $p * $l;
    echo "10 * 5 = $luas <br><br>";
    $keliling = 2 * $p * $l;
    echo "Keliling = 2 * p * l <br>";
    echo "2 * 10 * 5 = $keliling";

//segitiga;
    $alas = 5;
    $tinggi = 15;
    $a = 10;
    $b = 5;
    $c = 10;
    $luas;
    $keliling;
    
    echo "<h3>Rumus Segitiga<br></h3>";
    echo "Luas = 1/2 * alas * tinggi <br>";
    $luas = 1/2 * $alas * $tinggi;
    echo "1/2 * 5 * 15 = $luas <br><br>";
    $keliling = "$a + $b + $c";
    echo "Keliling = a + b + c <br>";
    echo "10 + 5 + 10";

//lingkaran;
    $jari2 = 7;
    $luas;
    $keliling;

    echo "<h3>Rumus Lingkaran<br></h3>";
    echo "Luas = 22/7 * jari-jari * jari-jari<br>";
    echo "22/7 * 7 * 7 = $luas <br><br>";
    $luas = 22/7 * $jari2 * $jari2;
    echo "Keliling = 2 * π * jari-jari <br>";
    $keliling = 2 * 22/7 * $jari2;
    echo "2 * 22/7 * 7 = $keliling";

//trapesium
    $a = 10;
    $b = 5;
    $t = 8;
    $ab = 5;
    $bc = 9;
    $cd = 10;
    $da = 9;
    $set = 2;
    $luas;
    $keliling;

    $luas = ($a + $b) * $t / $set;
    echo "<h3>Rumus Trapesium<br></h3>";
    echo "Luas = 1/2 * (a * b) * t <br>";
    echo "1/2 * (10 + 5) * 8 <br>";
    echo "1/2 * (15) * 8 <br>";
    echo "1/2 * 120 = $luas <br><br>";
    $keliling = $ab + $bc + $cd + $da;
    echo "Keliling = AB + BC + CD + DA <br>";
    echo "5 + 9 + 10 + 9 = $keliling";
?>