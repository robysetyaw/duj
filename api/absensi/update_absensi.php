<?php 
require_once('../config.php');

$id_absensi = addslashes(htmlentities($_POST['id_absensi']));
$tanggal = addslashes(htmlentities($_POST['tanggal']));
$login = addslashes(htmlentities($_POST['login']));
$id_customer = addslashes(htmlentities($_POST['id_customer']));

$getdata = mysqli_query($koneksi,"SELECT * FROM absensi WHERE id_absensi='$id_absensi'");
$rows = mysqli_num_rows($getdata);

$update = "UPDATE absensi SET tanggal='$tanggal',login='$login',id_customer='$id_customer'
WHERE id_absensi='$id_absensi'";
$exequery = mysqli_query($koneksi,$update);

$respose = array();

if($rows > 0)
{
  if($exequery)
  {
    $respose['code'] = 1;
    $respose['message'] = "Updated Success";
  }else{
    $respose['code'] = 0;
    $respose['message'] = "Updated Failed";
  }
}else{
  $respose['code'] = 0;
  $respose['message'] = "Updated Failed, Not data selected";
}
echo json_encode($respose);
 ?>
