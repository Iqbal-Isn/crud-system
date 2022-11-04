<?php
include '../koneksi.php';

  $data = mysqli_query($konek, "SELECT * FROM tb_pelanggan");
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kamar</title>
</head>
<body>
<?php
include '../navbar.html';
?>
    <div class="container">
  
  
    <a href="tambah_pel.php" class="btn btn-success my-3">+Tambah Pelanggan <br>
 
</a>
    <table border="1" width="500px" class="table table-striped table-hover">
    <tr>    
            <th>ID</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Telpon</th>
            <th>Action</th>
    </tr>
    <?php
        
            while ($tampil = mysqli_fetch_array($data)){
    ?>
    <tr> 
    <td><?= $tampil['id_pelanggan'];?></td>
    <td><?= $tampil['nama'];?></td>
    <td><?= $tampil['nik'];?></td>
    <td><?= $tampil['jk'];?></td>
    <td><?= $tampil['alamat'];?>
    <td><?= $tampil['telp'];?></td>
    <td><a href="edit.php?id_pelanggan= <?= $tampil['id_pelanggan'];?>" class="btn btn-primary">Edit </a>
        <a href="hapus.php?id_pelanggan= <?= $tampil['id_pelanggan'];?>" class="btn btn-danger">Hapus</a></td>
            </tr>
       <?php
            }
       ?>

    </table>

    </div>
</body>
</html>