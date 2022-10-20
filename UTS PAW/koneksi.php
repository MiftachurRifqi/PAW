<?php
$koneksi = mysqli_connect("localhost", "root", "","pawpert5");
$sql = "SELECT * FROM tbl_mhs, tbl_prodi";
$query = mysqli_query($koneksi, $sql);
while($baris = mysqli_fetch_assoc($query)){
}
?>