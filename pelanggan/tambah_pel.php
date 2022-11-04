
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
    <h1>Tambah Pelanggan</h1>

    <form action="proses_tambah.php" method="POST">
    <label>ID :</label><br>
    <input type="text" name="id_pelanggan" class="form-control">
   
</p>
    <label>Nama :</label><br>
    <input type="text" name="nama" class="form-control">
</p>
    <label> NIK :<br></label>
    <input type="text" name="nik" class="form-control">
</p>
    <label>Jenis Kelamin :<br></label>
    <input type="text" name="jk" class="form-control">
</p>
    <label>Alamat :<br></label>
    <input type="text" name="alamat" class="form-control">
</p>
    <label>No Telepon :</label><br>
    <input type="text" name="telp" class="form-control"><br>
</p>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-danger" >
</p>

    </form>
</table>
</div>
</body>
</html>