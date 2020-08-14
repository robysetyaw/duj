<?php include_once('../config.php');

$id_barang = addslashes(htmlentities($_POST['id_customer']));
$getdata = mysqli_query($koneksi,"SELECT * FROM customer WHERE id_customer = '$id_customer'");
$rows = mysqli_num_rows($getdata);

$delete = "DELETE FROM customer WHERE id_customer = '$id_barang'";
$exedelete = mysqli_query($koneksi,$delete);

$respose = array();
if($rows > 0)
{
  if ($exedelete) {
    $respose['code'] = 1;
    $respose['message'] = "Deleted Success";
  }else{
    $respose['code'] = 0;
    $respose['message'] = "Failed to Delete";
  }
}else{
  $respose['code'] = 0;
  $respose['message'] = "Failed to Delete, data Not Found";
}


echo json_encode($respose);
 ?>
