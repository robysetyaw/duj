<?php
include_once('../config.php');

$id_barang = addslashes(htmlentities($_POST['id_barang']));
$nama_barang = addslashes(htmlentities($_POST['nama_barang']));
$harga_jual = addslashes(htmlentities($_POST['harga_jual']));
$harga_pokok = addslashes(htmlentities($_POST['harga_pokok']));
$stok = addslashes(htmlentities($_POST['stok']));
$update_barang = addslashes(htmlentities($_POST['update_barang']));
$id_user = addslashes(htmlentities($_POST['id_user']));

$insertnorm = "INSERT INTO barang(id_barang,nama_barang,harga_jual,harga_pokok,stok,update_barang,id_user) 
               VALUES(NULL, '$nama_barang','$harga_jual','$harga_pokok','$stok','$update_barang','$id_user')";
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

echo json_encode($response);

?>
