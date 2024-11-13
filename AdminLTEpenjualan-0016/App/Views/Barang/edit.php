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
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?controller=barang&action=update" method="POST">
                <div class="card-body">
                <div class="form-group">
                    <label for="kode_barang">Kode Barang:</label>
                    <input type="text"  class="form-control" name="kode_barang" placeholder="<?= $Barang['kode_barang'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="nama_barang">Nama Barang:</label>
                    <input type="text"  class="form-control" name="nama_barang" placeholder="<?= $Barang['nama_barang'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number"  class="form-control" name="harga" placeholder="<?= $Barang['harga'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="stok">Stok:</label>
                    <input type="number"  class="form-control" name="stok" placeholder="<?= $Barang['stok'] ?>" required>
                  </div>
                    <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="index.php?controller=barang&action=index">Batal</a>
                </div>
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