<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_125");

$id = $_POST['id_rifqi'];
$nama = $_POST['nama_rifqi'];
$alamat = $_POST['alamat_rifqi'];

$sql = "update tbl_rifqi set
nama_rifqi = '$nama',
alamat_rifqi = '$alamat'
where id_rifqi = $id";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    ?>
    <script language="JavaScript">
        alert('Update data berhasil disimpan'); 
        document.location.href = 'tampilan.php';
    </script>
    <?php
}
else {
    ?>
    <script language="JavaScript">
        alert('Update data gagal disimpan');
        document.location.href = 'tampilan.php';
    </script>
    <?php
}
?>