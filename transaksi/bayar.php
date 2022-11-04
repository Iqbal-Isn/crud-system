<?php
include '../koneksi.php';

$id_trx = $_REQUEST['id_trx'];
$bayar = "UPDATE tb_transaksi SET status = '1',tgl_bayar = CURRENT_TIMESTAMP WHERE id_trx = $id_trx";

if(mysqli_query($konek,$bayar)){
 echo "BERHASIL DIBAYAR";
}else{
    echo"GAGAL";
}



?>