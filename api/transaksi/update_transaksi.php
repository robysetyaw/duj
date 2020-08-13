<?php require_once('../config.php');
$id_transaksi = addslashes(htmlentities($_POST['id_transaksi']));
// $nama_user = addslashes(htmlentities($_POST['nama_user']));
$jumlah_uang = addslashes(htmlentities($_POST['jumlah_uang']));
$tanggal_diterima = addslashes(htmlentities($_POST['tanggal_diterima']));
$id_user = addslashes(htmlentities($_POST['id_user']));
$getdata = mysqli_query($koneksi,"SELECT * FROM transaksi_penjualan WHERE id_transaksi='$id_transaksi'");
$rows = mysqli_num_rows($getdata);

$update = "UPDATE transaksi_penjualan SET jumlah_uang='$jumlah_uang',tanggal_diterima='$tanggal_diterima',id_user='$id_user'
WHERE id_transaksi='$id_transaksi'";
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
