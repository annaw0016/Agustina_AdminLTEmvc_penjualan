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
<div class="card-body">
    <h2 class="form-title">Tambah Pelanggan</h2>
    <form action="index.php?controller=pelanggan&action=store" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat" for="id_pelanggan">ID Pelanggan:</button>
                  </span>
                  <input type="text" class="form-control rounded-0" name="id_pelanggan" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat" for="nama_pelanggan">Nama Pelanggan:</button>
                  </span>
                  <input type="text" class="form-control rounded-0" name="nama_pelanggan" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat" for="alamat">Alamat:</button>
                  </span>
                  <input type="text" class="form-control rounded-0" name="alamat" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="index.php?controller=pelanggan&action=index" class="btn btn-outline-light">Kembali</a>
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