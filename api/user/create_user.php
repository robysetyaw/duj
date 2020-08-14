<?php
include_once('../config.php');

$id = addslashes(htmlentities($_POST['id']));
$nama_user = addslashes(htmlentities($_POST['nama_user']));
$username = addslashes(htmlentities($_POST['username']));
$password = addslashes(htmlentities($_POST['password']));
$id_role = addslashes(htmlentities($_POST['id_role']));
$alamat_user = addslashes(htmlentities($_POST['alamat_user']));
$tanggal_lahir_user = addslashes(htmlentities($_POST['tanggal_lahir_user']));
$dibuat_tanggal_user = addslashes(htmlentities($_POST['dibuat_tanggal_user']));
$terupdate_tanggal_user = addslashes(htmlentities($_POST['terupdate_tanggal_user']));

$insertnorm = "INSERT INTO userr(id,nama_user,username,password,id_role,alamat_user,tanggal_lahir_user,dibuat_tanggal_user,terupdate_tanggal_user) 
               VALUES(NULL, '$nama_user','$username','$password','$id_role','$alamat_user','$tanggal_lahir_user','$dibuat_tanggal_user','$terupdate_tanggal_user')";
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
