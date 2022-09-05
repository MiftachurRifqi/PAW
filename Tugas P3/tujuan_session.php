<?php
    session_start();
    echo "File 2 - Session <br>";
    echo "Nama: ".$_SESSION['nama'];
    echo "<br> NIM: ".$_SESSION['nim'];
    echo "<br> Prodi: ".$_SESSION['prodi'];
    echo "<br> Hobi: ".$_SESSION['hobi'];
?>