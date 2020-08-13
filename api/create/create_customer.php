<?php
include_once('../config.php');

$id_customer = addslashes(htmlentities($_POST['id_customer']));
$nama_customer = addslashes(htmlentities($_POST['nama_customer']));
$nik = addslashes(htmlentities($_POST['nik']));
$pekerjaan = addslashes(htmlentities($_POST['pekerjaan']));
$no_telepon = addslashes(htmlentities($_POST['no_telepon']));
$riwayat_penyakit = addslashes(htmlentities($_POST['riwayat_penyakit']));
$kendala = addslashes(htmlentities($_POST['kendala']));
$terdaftar_sejak = addslashes(htmlentities($_POST['terdaftar_sejak']));
$id_user = addslashes(htmlentities($_POST['id_user']));

$insertnorm = "INSERT INTO customer(id_customer,nama_customer,nik,pekerjaan,no_telepon,riwayat_penyakit,kendala,terdaftar_sejak,id_user) 
               VALUES(NULL, '$nama_customer','$nik','$pekerjaan','$no_telepon','$riwayat_penyakit','$kendala','$terdaftar_sejak','$id_user')";
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
