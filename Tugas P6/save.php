<?php
include "koneksi.php";

$id_mhs=$_POST["id_mhs"];
$id_prodi=$_POST["id_prodi"];
$nama_mhs =$_POST["nama_mhs"];
$alamat_mhs=$_POST["alamat_mhs"];

$sql="INSERT INTO tbl_mhs (id_mhs, id_prodi, nama_mhs, alamat_mhs)
VALUES('$id_mhs', '$id_prodi', '$nama_mhs','$alamat_mhs')";
$query=mysqli_query($koneksi,$sql);

if ($query) {
    ?>
    <script language="JavaScript">
        alert('Input data berhasil');
        document.location.href = 'datamhs.php';
    </script>
    <?php
}
else {
    ?>
    <script language="JavaScript">
        alert('Input data gagal');
        document.location.href = 'datamhs.php';
    </script>
    <?php
}  

?>