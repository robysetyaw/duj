<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CUSTOMER</title>

  <!-- Custom fonts for this template-->
  <link href="../css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="customer.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Daftar Customer<sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="customer_add.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tambah Customer</span></a>
      </li>
    </ul> 
    <div>
	<form action="../api/customer/create_customer.php" method="post" id="form">
		<div class="container">
			
			<div >
				<div >
					<h1>Tambah Barang</h1>
					<p>Masukkan data dengan benar</p>
					<hr class="mb-3">
					<label><b>Nama Customer</b></label>
					<input type="text" name="nama_customer" id="nama_customer" placeholder="Nama Customer" class="form-control" >

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
</div>