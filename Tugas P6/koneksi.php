<?php
$koneksi = mysqli_connect("localhost", "root", "","pawdatabase");
$sql = "SELECT * FROM tbl_mhs, tbl_prodi";
$hasil = mysqli_query($koneksi, $sql);
while($baris = mysqli_fetch_assoc($hasil)){
}
?>