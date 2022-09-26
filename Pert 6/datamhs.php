<?php
$koneksi = mysqli_connect("localhost", "root", "","pawpert5");
include "koneksi.php";
$sql = "SELECT id_mhs, nama_mhs, nama_prodi, alamat_mhs FROM tbl_mhs m, tbl_prodi p WHERE m.id_prodi=p.id_prodi";
$query = mysqli_query ($koneksi, $sql)


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example (pert6)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Data Mahasiswa</h2>
  <p>Data ini ditampilkan dari MySQL <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta sequi assumenda quaerat sapiente, quisquam error ab beatae perferendis commodi repellat dolorum maxime cupiditate ut reprehenderit officiis. Sunt obcaecati saepe porro? <br> 
  <table class="table table-striped">
    <thead>
    <br>
      <tr>
        <th>ID MHS</th>
        <th>Nama MHS</th>
        <th>Prodi MHS</th>
        <th>Alamat MHS</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php
        while($data=mysqli_fetch_assoc($query)){
        ?>
      <tr>
        <td><?php echo $data['id_mhs']; ?></td>
        <td><?php echo $data['nama_mhs']; ?></td>
        <td><?php echo $data['nama_prodi']; ?></td>
        <td><?php echo $data['alamat_mhs'];?></td>
        <td>
          <a href="edit.php"><button type="button" class="btn btn-success">Edit</button>
          <a href="delete.php"><button type="button" class="btn btn-danger">Delete</button>
        </td>
        <td>
          <?php }?>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <a href="add.php"><button type="button" class="btn btn-success">Tambah data</button></a>
  <a href="clear.php"><button type="button" class="btn btn-danger">Bersihkan Data</button></a>
</div>

</body>
</html>
