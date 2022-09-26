<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
    <h2>Masukkan Data Mahasiswa</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam dolores nihil tempora pariatur laboriosam voluptatem iure! Quam incidunt fuga iste maxime, culpa quis rem quidem eius, quae illo cum maiores.</p>
    <form action="save.php" method="post">
    <div class="mb-3 mt-3">
        <label for="id_mhs" class="form-label">ID Mahasiswa:</label>
        <input type="text" class="form-control" placeholder="Masukkan id mhs" name="id_mhs">
    </div>
    <div class="mb-3 mt-3">
        <label for="nama_mhs" class="form-label">Nama Mahasiswa:</label>
        <input type="text" class="form-control" placeholder="Masukkan nama mhs" name="nama_mhs">
    </div>
    <div class="mb-3">
        <label for="alamat_mhs" class="form-label">Alamat:</label>
        <input type="text" class="form-control" placeholder="Masukkan alamat mhs" name="alamat_mhs">
    </div>
    <div class="mb-3">
        <label for="prodi_mhs" class="form-label">Prodi:</label>
        <select class="form-control" name="id_prodi" id="id_prodi">
            <option value="prodi">---Pilih Prodi---</option>
            <?php 
            include "koneksi.php";
              $query = mysqli_query($koneksi, "SELECT * FROM tbl_prodi");
              while ($row = mysqli_fetch_array($query)) {
                echo '<option value="' . $row['id_prodi'] . '">' . $row['nama_prodi'] . '</option>';    
              }
            ?>
            </select>
    </div>
    <a href="save.php"><button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    
</body>
</html>
