
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
    <div class="container">
    <h1>Tambah Kamar</h1>
    <form action="proses_tambah.php" method="POST">
    <label>Kode kamar :<br></label>
    <input type="text" name="kd_kamar" class="form-control">
</p>
    <label>Jenis :<br></label>
    <input type="text" name="jenis" class="form-control">
</p>
    <label> Type :<br></label>
    <select name="type" class="form-control">
    <option value="single">Single</option>
    <option value="double">Double</option>

    </select>
</p>
    <label>Tarif :<br></label>
    <input type="text" name="tarif" class="form-control">
</p>
    <label>Jumlah :<br></label>
    <input type="number" name="jml" class="form-control"> <br>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-danger">
</p>

    </form>
    </div>
</table>
</body>
</html>