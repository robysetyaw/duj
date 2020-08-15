<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KASIR</title>

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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home_kasir.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">KASIR<sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="barang.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Daftar Barang</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="barang_add.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tambah Barang</span></a>
      </li>
    </ul> 
    <div>
	<form action="../api/barang/create_barang.php" method="post" id="form">
		<div class="container">
			
			<div >
				<div >
					<h1>Tambah Barang</h1>
					<p>Masukkan data dengan benar</p>
					<hr class="mb-3">
					<label><b>Nama Barang</b></label>
					<input type="text" name="nama_barang" id="nama_barang" placeholder="Nama Barang" class="form-control" >

					<label><b>Harga Jual</b></label>
					<input class="form-control" type="text" name="harga_jual" id="harga_jual" placeholder="Harga jual" required>

					<label><b>Harga Pokok</b></label>
					<input class="form-control" type="text" name="harga_pokok" id="harga_pokok" placeholder="harga_pokok" required>

					<label><b>Stok</b></label>
					<input class="form-control" type="text" name="stok" id="stok" placeholder="Stok Barang" required>

					<label><b>Update Barang</b></label>
					<input class="form-control" type="date" name="update_barang" id="update_barang" placeholder="" required>
                    <hr class="mb-3">
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