<?php
include_once('../config.php');

$id_transaksi = addslashes(htmlentities($_POST['id_transaksi']));
$jumlah_uang = addslashes(htmlentities($_POST['jumlah_uang']));
$id_barang = addslashes(htmlentities($_POST['id_barang']));
$id_customer = addslashes(htmlentities($_POST['id_customer']));
$id_user = addslashes(htmlentities($_POST['id_user']));
$tanggal_diterima = addslashes(htmlentities($_POST['tanggal_diterima']));


$insertnorm = "INSERT INTO `transaksi_penjualan` (`id_transaksi`, `jumlah_uang`, `id_barang`, `id_customer`, `id_user`, `tanggal_diterima`) VALUES (NULL, '$jumlah_uang','$id_barang','$id_customer','$id_user','$tanggal_diterima')";
$exeinsertnorm = mysqli_query($koneksi,$insertnorm);
$response = array();
if($exeinsertnorm)
{
  $response['code'] =1;
  $response['message'] = "Success! Data Inserted";
}else{
  $response['code'] =0;
  $response['message'] = "Failed! Data Not Inserted";
}
// $getdata = mysqli_query($koneksi,"SELECT id_transaksi FROM transaksi_penjualan");
// $id_transaksiCICILAN = addslashes(htmlentities($_GET['getdata']));
// $insertdata = "INSERT INTO `transaksi_cicilan` (`id`, `id_transaksi`, `jumlah_uang`, `tanggal_diterima`, `id_customer`, `id_user`) VALUES (NULL,'$id_transaksiCICILAN', '$jumlah_uang','$tanggal_diterima','$id_barang','$id_customer','$id_user')";
// $exeinsertdata = mysqli_query($koneksi,$insertdata);
// if($exeinsertdata)
// {
//   $response['code'] =1;
//   $response['message'] = "SUCCES COK";
// }else {
//   $response['code'] =0;
//   $response['message'] = "Failed! Data Not Inserted";
// }
// echo json_encode($response);

echo json_encode($response);

?>
