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
    <style>
        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-title {
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
<div class="card-body">
<h2 class="form-title">Tambah Barang</h2>
<form action="index.php?controller=barang&action=store" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat" for="kode_barang">Kode Barang:</button>
                  </span>
                  <input type="text" class="form-control rounded-0" id="kode_barang" name="kode_barang" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat" for="nama_barang">Nama Barang:</button>
                  </span>
                  <input type="text" class="form-control rounded-0" id="nama_barang" name="nama_barang" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat" for="harga">Harga:</button>
                  </span>
                  <input type="number" class="form-control rounded-0" id="harga" name="harga" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat" for="stok">Stok:</button>
                  </span>
                  <input type="number" class="form-control rounded-0" id="stok" name="stok" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        <a href="index.php?controller=barang&action=index" class="btn btn-outline-light">Kembali</a>
    </form>
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
