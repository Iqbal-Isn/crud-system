<?php
include '../koneksi.php';
 
if(isset($_POST['submit']))
     {
         $kd_kamar = $_POST['kd_kamar'];
         $jenis = $_POST['jenis'];
         $type = $_POST['type'];
         $tarif = $_POST['tarif'];
         $jml = $_POST['jml'];

     $tambah = "INSERT INTO `tb_kamar` (`kd_kamar`, `jenis`, `type`, `tarif`, `jml`) VALUES ('$kd_kamar', '$jenis', '$type', '$tarif', '$jml')";

 if(mysqli_query($konek,$tambah)){
     echo "DATA BERHASIL DITAMBAH";
 }else{
        echo"DATA GAGAL";
 }

     }

?>