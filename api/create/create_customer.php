<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    require_once('../config.php');

    $nama_customer = $_POST['nama_customer'];
    $nik = $_POST['nik'];
    $pekerjaan = $_POST['pekerjaan'];
    $no_telepon = $_POST['no_telepon'];
    $riwayat_penyakit = $_POST['riwayat_penyakit'];
    $kendala = $_POST['kendala'];
    $terdaftar_sejak = $_POST['terdaftar_sejak'];
    $id_user = $_POST['id_user'];

    $insertnorm = "INSERT INTO customer(nama_customer,nik,pekerjaan,no_telepon,riwayat_penyakit,kendala,terdaftar_sejak,id_user) 
               VALUES('$nama_customer','$nik','$pekerjaan','$no_telepon','$riwayat_penyakit','$kendala','$terdaftar_sejak','$id_user')";
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
}
?>
