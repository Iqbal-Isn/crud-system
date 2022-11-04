<?php
 include '../koneksi.php';
 $query1 = mysqli_query($konek, "SELECT kd_kamar,jenis FROM tb_kamar");
 $query2 = mysqli_query($konek, "SELECT id_pelanggan,nama FROM tb_pelanggan");

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
  <div class="container">
    <h1>Transaksi</h1>
    <form action="proses_tambah.php" method="POST">
    <label>Jenis Kamar :<br></label>
    <select name="kd_kamar" class="form-control">
        <?php
  while($data1 = mysqli_fetch_array($query1)) { ?>
    <option value ="<?php echo $data1['kd_kamar']?>"><?php echo $data1['jenis']?>
    </option>
    <?php
  }
    ?>
   
  </select>
</p>
    <label>Id Pelanggan  :<br></label>
    <select name="id_pelanggan" class="form-control">
        <?php
  while($data2 = mysqli_fetch_array($query2)) { ?>
    <option value ="<?php echo $data2['id_pelanggan']?>"><?php echo $data2['nama']?>
    </option>
    <?php
  }
    ?>
   
  </select>
</p>
    <label>Tanggal Masuk:<br></label>
    <input type="date" name="tgl_masuk" class="form-control" ><br>
</p>
    <label>Tanggal Keluar:<br></label>
    <input type="date" name="tgl_keluar" class="form-control">

    <input type="hidden" name="tgl_bayar" hidden>
</p>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset"class="btn btn-danger">
</p>

    </form>
    </div>
</table>
</body>
</html>