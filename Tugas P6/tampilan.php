<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_125");
$sql = "SELECT * FROM tbl_rifqi";
$query = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tampilan awal</title>
</head>
<body>
<div class="container mt-3">
    <?php
    session_start();
    $s = "Nama: Moch. Miftachur Rifqi Al Husain <br>NIM: 210411100125 <br> Kelas: PAW C";
    echo $s;
    $_SESSION['intro'] = "$s";
    ?>
    
    <hr><br>
    <h4>Output Pertemuan 8</h4>
    <table class="table table-striped mb-0">
        <thead>
            <br>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while($data=mysqli_fetch_assoc($query)){?>
            <tr>
                <td><?php echo $data['id_rifqi'];?></td>
                <td><?php echo $data['nama_rifqi'];?></td>
                <td><?php echo $data['alamat_rifqi'];?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id_rifqi'];?>" class="btn btn-success">Edit</a> | </a>
                    <a href="hapus.php?id=<?php echo $data['id_rifqi']; ?>" onclick="return confirm('Yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                </td>
                <td> <?php }?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <a href="tambah.php"><button type="button" class="btn btn-primary">Tambah data</button></a>

    
</body>
</html>