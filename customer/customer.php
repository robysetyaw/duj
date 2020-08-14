<?php

function http_request($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("http://localhost/mber/api/view/view_customer.php");
$data = json_decode($data, TRUE); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="customer.php">
    <img src="../image/customers.png" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="customer_add.php">Tambah Customer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
  </ul>
</nav>

<div class="container">
  <h2>Data Customer</h2>
  <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"> -->
  <table id="example" class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Customer</th>
        <th>No Telepon</th>
        <th>Riwayat Penyakit</th>
        <th>Kendala</th>
        <th>Tanggal Daftar</th>
      </tr>
    </thead>
    <?php foreach ($data as $data) { ?>
    <tbody>
      <tr class="table-active">
        <td>
            <?= $data["id_customer"] ?>
        </td>
        <td>
            <?= $data["nama_customer"] ?>
        </td>
        <td>
            <?= $data["no_telepon"] ?>
        </td>
        <td>
            <?= $data["riwayat_penyakit"] ?>
        </td>
        <td>
            <?= $data["kendala"] ?>
        </td>
        <td>
            <?= $data["terdaftar_sejak"] ?>
        </td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>
</div>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#mytable').DataTable();
} );
</script>
</body>
</html>
