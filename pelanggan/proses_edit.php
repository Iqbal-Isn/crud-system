<?php
include '../koneksi.php';
 
if(isset($_POST['submit']))
     {
         $id_pelanggan = $_POST['id_pelanggan'];
         $nama = $_POST['nama'];
         $nik = $_POST['nik'];
         $jk = $_POST['jk'];
         $alamat = $_POST['alamat'];
         $telp = $_POST['telp'];

     $update = "UPDATE `tb_pelanggan` SET `id_pelanggan` = '$id_pelanggan', `nama` = '$nama', `nik` = '$nik', `jk` = '$jk', `alamat` = '$alamat', `telp` = '$telp' WHERE `tb_pelanggan`.`id_pelanggan` = $id_pelanggan;";

 if(mysqli_query($konek,$update)){
     echo "DATA BERHASIL DIEDIT";
 }else{
        echo"DATA GAGAL";
 }

     }

?>