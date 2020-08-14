<?php require_once('../config.php');

$id_barang = addslashes(htmlentities($_POST['id_barang']));
$nama_barang = addslashes(htmlentities($_POST['nama_barang']));
$harga_jual = addslashes(htmlentities($_POST['harga_jual']));
$harga_pokok = addslashes(htmlentities($_POST['harga_pokok']));
$stok = addslashes(htmlentities($_POST['stok']));
$update_barang = addslashes(htmlentities($_POST['update_barang']));
$id_user = addslashes(htmlentities($_POST['id_user']));

$getdata = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$id_barang'");
$rows = mysqli_num_rows($getdata);

$update = "UPDATE barang SET nama_barang='$nama_barang',harga_jual='$harga_jual',harga_pokok='$harga_pokok',stok='$stok',update_barang='$update_barang',id_user='$id_user'
WHERE id_barang='$id_barang'";
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
