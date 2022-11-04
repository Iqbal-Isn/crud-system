<?php
include '../koneksi.php';
 
    $kd_kamar = $_REQUEST['kd_kamar'];
    $hapus = "DELETE FROM `tb_kamar` WHERE `tb_kamar`.`kd_kamar` = $kd_kamar";

 if(mysqli_query($konek,$hapus)){
     echo "DATA BERHASIL HAPUS";
 }else{
        echo"DATA GAGAL";
 }

     

?>