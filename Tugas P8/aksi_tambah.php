<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_125");

if (isset($_POST['kirim'])){
    $nama = $_POST['nama_rifqi'];
    $alamat = $_POST['alamat_rifqi'];

    if (empty($nama) or empty($alamat)){
        ?>
        <script language="JavaScript">
            alert('Harap diisi dengan benar');
            document.location.href = 'tambah.php';
        </script>
        <?php
    }
    else{
        $sql = "insert into tbl_rifqi(nama_rifqi, alamat_rifqi)
        values('$nama', '$alamat')";
        $query = mysqli_query($koneksi, $sql);
        if ($query){
            ?>
            <script language="JavaScript">
                alert('Data berhasil disimpan');
                document.location.href = 'tampilan.php';
            </script>
            <?php
        }
        else{
            ?>
            <script language="JavaScript">
                alert('Data gagal disimpan');
                document.location.href = 'tambah.php';
            </script>
            <?php
        }
    }
}