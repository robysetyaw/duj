<?php 
require_once('../config.php');

$id_customer = addslashes(htmlentities($_POST['id_customer']));
$nama_customer = addslashes(htmlentities($_POST['nama_customer']));
$nik = addslashes(htmlentities($_POST['nik']));
$pekerjaan = addslashes(htmlentities($_POST['pekerjaan']));
$no_telepon = addslashes(htmlentities($_POST['no_telepon']));
$riwayat_penyakit = addslashes(htmlentities($_POST['riwayat_penyakit']));
$kendala = addslashes(htmlentities($_POST['kendala']));
$terdaftar_sejak = addslashes(htmlentities($_POST['terdaftar_sejak']));
$id_user = addslashes(htmlentities($_POST['id_user']));

$getdata = mysqli_query($koneksi,"SELECT * FROM customer WHERE id_customer='$id_customer'");
$rows = mysqli_num_rows($getdata);

$update = "UPDATE customer SET nama_customer='$nama_customer',nik='$nik',pekerjaan='$pekerjaan',no_telepon='$no_telepon',
            riwayat_penyakit='$riwayat_penyakit',kendala='$kendala',terdaftar_sejak='$terdaftar_sejak',id_user='$id_user'
WHERE id_customer='$id_customer'";
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
