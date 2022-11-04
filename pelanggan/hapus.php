<?php
include '../koneksi.php';
 
    $id_pelanggan = $_REQUEST['id_pelanggan'];
    $hapus = "DELETE FROM `tb_pelanggan` WHERE `tb_pelanggan`.`id_pelanggan` = $id_pelanggan";

 if(mysqli_query($konek,$hapus)){
     echo "DATA BERHASIL HAPUS";
 }else{
        echo"DATA GAGAL";
 }

     

?>