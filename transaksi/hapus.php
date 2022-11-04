<?php
include '../koneksi.php';
 
    $id_trx = $_GET['id_trx'];
    $hapus = "DELETE FROM `tb_transaksi` WHERE `tb_transaksi`.`id_trx` = $id_trx;";

 if(mysqli_query($konek,$hapus)){
     echo "DATA BERHASIL HAPUS";
 }else{
        echo"DATA GAGAL";
 }

     

?>