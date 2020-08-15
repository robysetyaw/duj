<?php
include_once('../config.php');

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga_jual = $_POST['harga_jual'];
$harga_pokok = $_POST['harga_pokok'];
$stok = $_POST['stok'];
$update_barang = $_POST['update_barang'];
$id_user = $_POST['id_user'];

$insertnorm = "INSERT INTO barang(id_barang,nama_barang,harga_jual,harga_pokok,stok,update_barang,id_user) 
               VALUES(NULL, '$nama_barang','$harga_jual','$harga_pokok','$stok','$update_barang','$id_user')";
$exeinsertnorm = mysqli_query($koneksi,$insertnorm);
$response = array();
if($exeinsertnorm)
{
  header("Location: ../../kasir/barang.php");
}else{
  $response['code'] =0;
  // $response['message'] = "Failed! Data Not Inserted";
}

echo json_encode($response);

?>
