<?php
include "koneksi.php";

$id_mhs=$_POST["id_mhs"];
$id_prodi=$_POST["id_prodi"];
$nama_mhs =$_POST["nama_mhs"];
$alamat_mhs=$_POST["alamat_mhs"];

$query2 = mysqli_query($koneksi, "SELECT * FROM tbl_mhs");
$cek = mysqli_fetch_array($query2);
if ($cek['id_mhs'] == $id_mhs) {
    ?>
    <script language="JavaScript">
        alert('NIM yang anda inputkan sudah ada');
        history.go(-1);
    </script>
    <?php

}
else{
    $sql="INSERT INTO tbl_mhs (id_mhs, id_prodi, nama_mhs, alamat_mhs)
    VALUES('$id_mhs', '$id_prodi', '$nama_mhs','$alamat_mhs')";
    $query=mysqli_query($koneksi,$sql);
    if ($query) {
        ?>
        <script language="JavaScript">
            alert('Data berhasil disimpan');
            document.location.href = 'datamhs.php';
        </script>
        <?php
    }
    else {
        ?>
        <script language="JavaScript">
            alert('Data gagal disimpan');
            document.location.href = 'add.php';
        </script>
        <?php
    }
}




  

?>