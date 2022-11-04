<?php
    include '../koneksi.php';
    
if(isset($_POST['submit']))
     {
         $id_trx = $_POST['id_trx'];
         $kd_kamar = $_POST['kd_kamar'];
         $id_pelanggan = $_POST['id_pelanggan'];
         $tgl_masuk = $_POST['tgl_masuk'];
         $tgl_keluar = $_POST['tgl_keluar'];
        

         $tgl1 = date_create($tgl_masuk);
         $tgl2 = date_create($tgl_keluar);
         $diff = date_diff($tgl1, $tgl2);
         $lama = $diff->days;

         $query = mysqli_query($konek, "SELECT * FROM tb_kamar WHERE kd_kamar = '$kd_kamar'");
         $data_kamar = mysqli_fetch_array($query);

         $tarif = $data_kamar['tarif'];
         $total_tagihan = $tarif * $lama;
        

     $update = "UPDATE tb_transaksi SET kd_kamar = '$kd_kamar', id_pelanggan = '$id_pelanggan',
      tgl_masuk = '$tgl_masuk', tgl_keluar = '$tgl_keluar', lama = '$lama', total_tagihan = '$total_tagihan' WHERE tb_transaksi.id_trx = $id_trx;";

 if(mysqli_query($konek,$update)){
     echo "DATA BERHASIL DIEDIT";
 }else{
        echo"DATA GAGAL";
 }

     }

?>