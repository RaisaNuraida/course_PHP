<?php
    echo "<h2>Konversi Suhu</h2>";

    $cel = 30;
    $konverf;
    $konverr;
    $konverrn;
    $konverk;

    $konverf = $cel * 9/5 + 32;
    echo "$cel Celsius = $konverf Farenheit <br";

    $konverr = $cel * 4/5;
    echo "$cel Celsius = $konverr Reamur <br>";

    $konverrn = ($cel + 273.15) * 9/5;
    echo "$cel Celsius = $konverrn Rankine <br>";

    $konverk = $cel + 273.215;
    echo "$cel Celsius = $konverk Kelvin <br>";
?>