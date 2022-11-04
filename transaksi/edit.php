<?php
include '../koneksi.php';
    $id_trx = $_GET['id_trx'];
    $query = mysqli_query($konek,"SELECT * FROM tb_transaksi WHERE id_trx = $id_trx");
    $data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
</head>
<body>
    <div class="container">
    <h1>Edit Transaksi

    </h1>
    
    <form action="proses_edit.php" method="POST">
    <label>Id transaksi :<br></label>
    <input type="text" name="id_trx" value="<?= $data['id_trx']?>" class="form-control" readonly><br>
</p>
    <label>Kode kamar :<br></label>
    <input type="text" name="kd_kamar" value="<?= $data['kd_kamar']?>"  class="form-control"readonly><br>
</p>
    <label>ID pelanggan :<br></label>
    <input type="text" name="id_pelanggan" value="<?= $data['id_pelanggan']?>" class="form-control" readonly><br>
</p>
    <label> Tanggal Masuk :<br></label>
    <input type="date" name="tgl_masuk" value="<?= $data['tgl_masuk']?>" class="form-control"><br>
</p>
    <label>Tanggal Keluar :<br></label>
    <input type="date" name="tgl_keluar" value="<?= $data['tgl_keluar']?>" class="form-control">

    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-danger">
</p>

    </form>
</table>
</div>
</body>
</html>