<?php
include '../koneksi.php';
 
if(isset($_POST['submit']))
     {
         $kd_kamar = $_POST['kd_kamar'];
         $jenis = $_POST['jenis'];
         $type = $_POST['type'];
         $tarif = $_POST['tarif'];
         $jml = $_POST['jml'];

     $update = "UPDATE `tb_kamar` SET `kd_kamar` = '$kd_kamar', `jenis` = '$jenis', `type` = '$type', `tarif` = '$tarif', `jml` = '$jml'
      WHERE `tb_kamar`.`kd_kamar` = $kd_kamar;";

 if(mysqli_query($konek,$update)){
     echo "DATA BERHASIL DIEDIT";
 }else{
        echo"DATA GAGAL";
 }

     }

?>