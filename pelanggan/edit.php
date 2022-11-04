<?php
include '../koneksi.php';
    $id_pelanggan = $_GET['id_pelanggan'];
    $query = mysqli_query($konek,"SELECT * FROM tb_pelanggan WHERE id_pelanggan = $id_pelanggan");
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
    <h1>Edit Pelanggan</h1>
    <form action="proses_edit.php" method="POST">
    <label>ID :<br></label>
    <input type="text" name="id_pelanggan" value="<?= $data['id_pelanggan']?>" class="form-control" readonly><br>
</p>
    <label>Nama :<br></label>
    <input type="text" name="nama" value="<?= $data['nama']?>" class="form-control"><br>
</p>
    <label> NIK :<br></label>
    <input type="text" name="nik" value="<?= $data['nik']?>"class="form-control"><br>
</p>
    <label>Jenis Kelamin :<br></label>
    <input type="text" name="jk" value="<?= $data['jk']?>" class="form-control"><br>
</p>
    <label>Alamat :<br></label>
    <input type="text" name="alamat" value="<?= $data['alamat']?>" class="form-control">
</p>
    <label>NO Telepon :<br></label>
    <input type="number" name="telp" value="<?= $data['telp']?>" class="form-control"><br>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-danger">
</p>

    </form>
</table>
</div>
</body>
</html>