<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Penjualan-0061</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/AdminLTE/dist/css/adminlte.min.css">
    </head>

<body>
<div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title m-0">Detail Transaksi ID: <?= htmlspecialchars($transaksiDetail['id']) ?></h3>
              </div>
              <div class="card-body">
              <div class="card-body">
              <div class="row">
                    <div class="col-5 label">Nama Barang :</div>
                    <div class="col-7"><?= htmlspecialchars($transaksiDetail['nama_barang']) ?></div>
                </div>
                <div class="row">
                    <div class="col-5 label">Nama Pelanggan :</div>
                    <div class="col-7"><?= htmlspecialchars($transaksiDetail['nama_pelanggan']) ?></div>
                </div>
                <div class="row">
                    <div class="col-5 label">Jumlah :</div>
                    <div class="col-7"><?= htmlspecialchars($transaksiDetail['jumlah']) ?></div>
                </div>
                <div class="row">
                    <div class="col-5 label">Harga Barang :</div>
                    <div class="col-7"><?= htmlspecialchars($transaksiDetail['harga']) ?></div>
                </div>
                <div class="row">
                    <div class="col-5 label">Total Harga :</div>
                    <div class="col-7"><?= htmlspecialchars($transaksiDetail['total_harga']) ?></div>
                </div>
                <div class="row">
                    <div class="col-5 label">Tanggal Transaksi :</div>
                    <div class="col-7"><?= htmlspecialchars($transaksiDetail['tanggal']) ?></div>
                </div>
                <a href="index.php?controller=transaksi&action=index" class="btn btn-outline-success">kembali</a>
              </div>
            </div>
<!-- jQuery -->
<script src="public/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/AdminLTE/dist/js/demo.js"></script>
</body>
</html>
