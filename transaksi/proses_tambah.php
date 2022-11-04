<?php
include '../koneksi.php';

        
         $kd_kamar = $_POST['kd_kamar'];
         $id_pelanggan = $_POST['id_pelanggan'];
         $tgl_masuk = $_POST['tgl_masuk'];
         $tgl_keluar = $_POST['tgl_keluar'];
         $tgl_bayar = $_POST['tgl_bayar'];

         $tgl1 = date_create($tgl_masuk);
         $tgl2 = date_create($tgl_keluar);
         $diff = date_diff($tgl1, $tgl2);
         $lama = $diff->days;

         $query = mysqli_query($konek, "SELECT * FROM tb_kamar WHERE kd_kamar = '$kd_kamar'");
         $data_kamar = mysqli_fetch_array($query);
         $tarif = $data_kamar['tarif'];

         $total_tagihan = $tarif * $lama;

     $tambah = "INSERT INTO `tb_transaksi` VALUES ('', '$kd_kamar', '$id_pelanggan', '$tgl_masuk', '$tgl_keluar', '$lama', '$total_tagihan', '$tgl_bayar', '0')";

 if(mysqli_query($konek,$tambah)){
     echo "DATA BERHASIL DITAMBAH";
 }else{
        echo"DATA GAGAL";
 }

     

?>
