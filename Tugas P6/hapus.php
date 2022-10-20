<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_125");
$id = $_GET['id'];

$sql = "delete from tbl_rifqi where id_rifqi = $id";
$query = mysqli_query($koneksi, $sql);

if ($query){
    ?>
    <script language="JavaScript">
        alert('Data berhasil dihapus');
        document.location.href = 'tampilan.php';
    </script>
    <?php
}
else{
    ?>
    <script language="JavaScript">
        alert('Data gagal dihapus');
        document.location.href = 'tampilan.php';
    </script>
    <?php
}
?>