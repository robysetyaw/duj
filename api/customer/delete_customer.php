<?php include_once('../config.php');

$id_customer = addslashes(htmlentities($_GET['id_customer']));
$getdata = mysqli_query($koneksi,"SELECT * FROM customer WHERE id_customer = '$id_customer'");
$rows = mysqli_num_rows($getdata);
echo $id_customer;

$delete = "DELETE FROM customer WHERE id_customer = '$id_customer'";
$exedelete = mysqli_query($koneksi,$delete);

$respose = array();
if($rows > 0)
{
  if ($exedelete) {
    header("Location: ../../customer/customer.php");
  }else{
    $respose['code'] = 0;
    $respose['message'] = "Failed to Delete";
  }
}else{
  $respose['code'] = 0;
  $respose['message'] = "Failed to Delete, data Not Found";
}
// header("location: ../../home.php");
// exit();


echo json_encode($respose);
 ?>
