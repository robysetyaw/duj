<?php include_once('../config.php');
$query = "SELECT c.id_customer, trc.id_transaksi, trc.jumlah_uang, trc.tanggal_diterima,u.nama_user FROM customer AS c RIGHT JOIN transaksi_cicilan AS trc ON c.id_customer=trc.id_customer JOIN userr AS u ON trc.id_user=u.id";
$result = mysqli_query($koneksi,$query);
$array_data = array();
while($baris = mysqli_fetch_assoc($result))
{
  $array_data[]=$baris;
}

echo json_encode($array_data);
 ?>
