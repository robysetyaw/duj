<?php
function http_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
$data = http_request("http://localhost/duj/api/customer/update_customer.php?id_customer=" . $_GET["id_customer"]);
$data = json_decode($data, TRUE);
?>
<!DOCTYPE html>
<html>
    <head>
	    <title>Edit Customer</title>
	    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    </head>
    <body>
        <div>
        <form action="../api/customer/update_customer.php" method="post" id="form">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-5">
					<h1>Edit Customer</h1>
					<p>Masukkan data dengan benar</p>
                    <hr class="mb-3">
					<label><b>Nama Customer</b></label>
					<input type="text" name="nama_customer" id="nama_customer" placeholder="Nama Customer" 
                    value="<?= $data["nama_customer"] ?>" class="form-control" >

					<label><b>NIK</b></label>
					<input class="form-control" type="text" name="nik" id="nik" placeholder="Nomer Induk Kependudukan" required>

					<label><b>Pekerjaan</b></label>
					<input class="form-control" type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" required>

					<label><b>No Telepon</b></label>
					<input class="form-control" type="text" name="no_telepon" id="no_telepon" placeholder="No Telepon" required>

					<label><b>Riwayat Penyakit</b></label>
					<input class="form-control" type="text" name="riwayat_penyakit" id="riwayat_penyakit" placeholder="" required>
                    
                    <label><b>Kendala</b></label>
					<input class="form-control" type="text" name="kendala" id="kendala" placeholder="" required>

					<label><b>Tanggal Daftar</b></label>
					<input class="form-control" type="date" name="terdaftar_sejak" id="terdaftar_sejak" placeholder="" required>

					<label><b>Staff Pendaftar</b></label>
					<input class="form-control" type="text" name="id_user" id="id_user" placeholder="" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" value="Simpan">
				</div>
			</div>
		</div>
	</form>
        </div>
    </body>