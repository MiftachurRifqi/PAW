<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_125");
$sql = "SELECT * FROM tbl_rifqi";
$query = mysqli_query($koneksi, $sql)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Form Tambah</title>
</head>
<body>
<div class="container mt-3">
    <?php
    session_start();
    echo $_SESSION['intro'];
    ?>

    <hr><br>
    <h4>Tambah Data</h4>
    <form action="aksi_tambah.php" method="post">
    <!--<input type="hidden" name="id_rifqi" value="<?php echo $data['id_rifqi']?>">-->
    <div class="mb-3 mt-3">
        <label for="nama_rifqi" class="form-label">Nama: </label>
        <input type="text" class="form-control" name="nama_rifqi" placeholder="Masukkan Nama">
        <br>
        <label for="alamat_rifqi" class="form-label">Alamat: </label>
        <input type="text" class="form-control" name="alamat_rifqi" placeholder="Masukkan Alamat">
    </div>
    <a href="aksi_tambah.php"><button type="submit" class="btn btn-primary" name="kirim" >Simpan</button>
    </form>
</div>

</body>
</html>