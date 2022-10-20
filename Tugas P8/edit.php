<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_125");
$id = $_GET['id'];
$sql = "select * from tbl_rifqi where id_rifqi = $id";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Form Edit</title>
</head>
<body>
<div class="container mt-3">
    <?php
    session_start();
    echo $_SESSION['intro'];
    ?>

    <hr><br>
    <form action="aksi_edit.php" method="POST">
    <input type="hidden" name="id_rifqi" value="<?php echo $data['id_rifqi'];?>">
    <div class="mb-3 mt-3">
        <label for="nama_rifqi" class="form-label">Nama </label>
        <input type="text" class="form-control" name="nama_rifqi" value="<?php echo $data['nama_rifqi'];?>">
        <br>
        <label for="alamat_rifqi" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat_rifqi" value="<?php echo $data['alamat_rifqi'];?>">

    </div>
    <button type="submit" class="btn btn-primary" name="kirim" >Submit</button>
    </form>
</div>
</body>
</html>