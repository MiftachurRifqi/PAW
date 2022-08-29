<?php
    // Tipe data String
    $intro = "Moch. Miftachur Rifqi Al Husain";
    echo ("Nama : $intro");

    // Tipe data Integer
    $nim = 210411100125;
    echo "<br><br> NIM : $nim";
    
    // Tipe data Boolean
    $mhs = "<br><br> Mahasiswa Teknik informatika Universitas Trunojoyo Madura";
    $pkl = "<br><br> Pedagang Kaki lima";
    
    $aku = $mhs;
    if ($aku == $mhs){
        echo $mhs;
    }
    elseif ($aku == $pkl){
        echo $pkl;
    }
    else{
        echo "<br><br> Not Found";
    }

    // Tipe data Float
    $ip1 = 3.78;
    $ip2 = 3.48;

    $jml = $ip1 + $ip2;
    $ipk = $jml / 2;
    $a = "<br><br> IP Kumulatif = $ipk";
    echo $a
?> 