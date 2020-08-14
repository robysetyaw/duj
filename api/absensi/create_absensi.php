<?php
include_once('../config.php');

$id_absensi = addslashes(htmlentities($_POST['id_absensi']));
$tanggal = addslashes(htmlentities($_POST['tanggal']));
$login = addslashes(htmlentities($_POST['login']));
$id_customer = addslashes(htmlentities($_POST['id_customer']));

$insertnorm = "INSERT INTO absensi(id_absensi,tanggal,login,id_customer) 
               VALUES(NULL, '$tanggal','$login','$id_customer')";
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
