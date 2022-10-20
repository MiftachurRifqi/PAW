<?php
include "koneksi.php";

$id_mhs = $_POST["id_mhs"];
$nama_mhs = $_POST["nama_mhs"];
$id_prodi = $_POST["id_prodi"];
$alamat_mhs = $_POST["alamat_mhs"];

$sql = "UPDATE tbl_mhs SET 
nama_mhs = '$nama_mhs', 
id_prodi = $id_prodi,
alamat_mhs = '$alamat_mhs'
WHERE id_mhs = $id_mhs";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    ?>
    <script language="JavaScript">
        alert('Update data berhasil disimpan'); 
        document.location.href = 'datamhs.php';
    </script>
    <?php
}
else {
    ?>
    <script language="JavaScript">
        alert('Update data gagal disimpan');
        document.location.href = 'datamhs.php';
    </script>
    <?php
}
?>