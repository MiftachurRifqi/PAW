<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT * FROM tbl_mhs where id_mhs = $id");
$row = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Perbarui Data Mahasiswa</title>
</head>
<body>
<div class="container mt-3">
    <h2>Perubahan Data Mahasiswa</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, corrupti facere? <br> Optio, unde voluptatibus dolore aut ducimus, eaque doloribus atque praesentium beatae, expedita ex earum quae excepturi eveniet at maxime?</p>
    <form action="save2.php" method="POST">
    <div class="mb-3 mt-3">
        <input type="hidden" class="form-control" name="id_mhs" value="<?php echo $row['id_mhs']?>">
    </div>
    <div class="mb-3 mt-3">
        <label for="nama_mhs" class="form-label">Nama Mahasiswa:</label>
        <input type="text" class="form-control" placeholder="Masukkan perubahan nama mhs" name="nama_mhs" value="<?php echo $row['nama_mhs']?>">
    </div>
    <div class="mb-3">
        <label for="alamat_mhs" class="form-label">Alamat:</label>
        <input type="text" class="form-control" placeholder="Masukkan perubahan alamat mhs" name="alamat_mhs" value="<?php echo $row['alamat_mhs']?>">
    </div>
    <div class="mb-3">
        <label for="prodi_mhs" class="form-label">Prodi:</label>
        <select class="form-control" name="id_prodi" id="id_prodi">
            <option value="prodi"><?php $sql2 = mysqli_query($koneksi, "SELECT * FROM tbl_prodi WHERE id_prodi = $row[id_prodi]"); $row = mysqli_fetch_array($sql2); echo $row['nama_prodi'] ?></option>
            <?php 
            include "koneksi.php";
              $query = mysqli_query($koneksi, "SELECT * FROM tbl_prodi");
              while ($row = mysqli_fetch_array($query)) {
                echo '<option value="' . $row['id_prodi'] . '">' . $row['nama_prodi'] . '</option>';    
              }
            ?>
            </select>
    </div>
    <a href="save2.php"><button type="submit" class="btn btn-primary">Simpan</button> </a>
    <a href="datamhs.php"><button type="button" class="btn btn-warning">Kembali</button> </a>
    </form>
        

</body>
</html>