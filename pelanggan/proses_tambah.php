<?php
include '../koneksi.php';
 
if(isset($_POST['submit']))
     {
         $id = $_POST['id_pelanggan'];
         $nama = $_POST['nama'];
         $nik = $_POST['nik'];
         $jk = $_POST['jk'];
         $alamat = $_POST['alamat'];
         $telp = $_POST['telp'];

     $tambah = "INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama`, `nik`, `jk`, `alamat`,`telp`) 
     VALUES ('$id', '$nama', '$nik', '$jk', '$alamat','$telp')";

 if(mysqli_query($konek,$tambah)){
     echo "DATA BERHASIL DITAMBAH";
 }else{
        echo"DATA GAGAL";
 }

     }

?>