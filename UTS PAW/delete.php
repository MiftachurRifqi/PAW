<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "DELETE FROM tbl_mhs WHERE id_mhs = $id";
$query = mysqli_query($koneksi, $sql);
if ($query){
    ?>
    <script language="JavaScript">
        alert('Data berhasil dihapus');
        document.location.href = 'datamhs.php';
    </script>
    <?php
}
else{
    ?>
    <script language="JavaScript">
        alert('Data gagal dihapus');
        document.location.href = 'datamhs.php';
    </script>
    <?php
}
?>