<?php
include "koneksi.php";

$id_mhs=$_POST["id_mhs"];
$nama_mhs =$_POST["nama_mhs"];
$alamat_mhs=$_POST["alamat_mhs"];
$prodi_mhs=$_POST["prodi_mhs"];

$sql="INSERT INTO tbl_mhs, tbl_prodi(id_mhs,nama_mhs,alamat_mhs,prodi_mhs)
VALUES('$id_mhs','$nama_mhs','$alamat_mhs','$prodi_mhs')";
$query=mysqli_query($koneksi,$sql);

if ($query) {
    ?>
	<script language="JavaScript">
        alert('Input data berhasil');
    </script>
    <?php
}
else {
	echo "Gagal insert data";
}  

?>