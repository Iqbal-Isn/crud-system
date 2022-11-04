<?php
include '../koneksi.php';
 $no = 1;
  $data = mysqli_query($konek, "SELECT * FROM tb_transaksi JOIN tb_kamar ON tb_kamar.kd_kamar = tb_transaksi.kd_kamar JOIN tb_pelanggan ON tb_pelanggan.id_pelanggan = tb_transaksi.id_pelanggan");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
   
  
    <a href="index.php" class="btn btn-success my-3">+Tambah Transaksi <br>
  
</a>
    <table border="1" width="900px" class="table table-striped table-hover">
    <tr>    
           
            <th>Kode kamar</th>
            <th>Nama pelanggan</th>
            <th>Tanggal masuk</th>
            <th>Tanggal keluar</th>
            <th>Lama</th>
            <th>Total tagihan</th>
            <th>Tanggal bayar</th>
            <th>Status</th>
            <th>Action</th>
    </tr>
    <?php
        
            while ($tampil = mysqli_fetch_array($data)){
    ?>
  
  
    <td><?= $tampil['kd_kamar'];?></td>
    <td><?= $tampil['nama'];?></td>
    <td><?= $tampil['tgl_masuk'];?></td>
    <td><?= $tampil['tgl_keluar'];?></td>
    <td><?= $tampil['lama'];?></td>
    <td><?= $tampil['total_tagihan'];?></td>
    <td><?= $tampil['tgl_bayar'];?></td>
<?php
 if ($tampil['status']== 0){
     echo "<td>Belum Lunas</td>";

 }else{
     echo "<td>Lunas</td>";
 }
 ?>
    <td class="d-flex">
    <a href="edit.php?id_trx=<?= $tampil['id_trx'];?>" class="btn btn-primary">Edit </a>
    <a href="hapus.php?id_trx=<?= $tampil['id_trx'];?>" class="btn btn-danger mx-2">Hapus</a>
        <?php
         if($tampil['status'] != '1'){
            ?>
          <a href="bayar.php?id_trx= <?= $tampil['id_trx'];?>" class="btn btn-success">Bayar</a>
            <?php
         } 
        ?>
  
   </td>
            </tr>
       <?php
            }
       ?>


    </table>

    </div>
</body>
</html>