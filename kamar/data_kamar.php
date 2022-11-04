<?php
include '../koneksi.php';
 $no = 1;
  $data = mysqli_query($konek, "SELECT * FROM tb_kamar");
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="../style.css">
    <title>Data Kamar</title>
</head>


<body>
<?php
include '../navbar.html';
?>
    <div class="container">
 

    <a href="tambah_kamar.php" class="btn btn-success my-3">+Tambah Kamar <br>
  
</a>
    <table border="1" width="500px" class="table table-striped table-hover">
    <tr>    
            <th>NO</th>
            <th>Kode kamar</th>
            <th>Jenis</th>
            <th>Type</th>
            <th>Tarif</th>
            <th>Jumlah</th>
            <th>Action</th>
    </tr>
    <?php
        
            while ($tampil = mysqli_fetch_array($data)){
    ?>
    <tr> <td><?= $no++;?></td>
    <td><?= $tampil['kd_kamar'];?></td>
    <td><?= $tampil['jenis'];?></td>
    <td><?= $tampil['type'];?></td>
    <td><?= $tampil['tarif'];?></td>
    <td><?= $tampil['jml'];?></td>
    <td><a href="edit.php?kd_kamar= <?= $tampil['kd_kamar'];?>" class="btn btn-primary" >Edit </a>
        <a href="hapus.php?kd_kamar= <?= $tampil['kd_kamar'];?>" class="btn btn-danger"> Hapus </a></td>
            </tr>
       <?php
            }   
       ?>

    </table>
    
    </div>
</body>
</html>