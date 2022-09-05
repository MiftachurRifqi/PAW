<?php
    session_start();
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $hobi = $_POST['hobi'];

    echo "File 1 <br>";
    echo "Nama: ".$nama;
    echo "<br> NIM: ".$nim;
    echo "<br> Prodi: ".$prodi;
    echo "<br> Hobi: ".$hobi;

    $_SESSION['nama'] = $nama;
    $_SESSION['nim'] = $nim;
    $_SESSION['prodi'] = $prodi;
    $_SESSION['hobi']= $hobi;
?>