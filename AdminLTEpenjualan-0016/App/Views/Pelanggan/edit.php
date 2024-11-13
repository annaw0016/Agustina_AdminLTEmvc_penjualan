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
                <h3 class="card-title">Edit Pelanggan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?controller=pelanggan&action=update" method="POST">
                <div class="card-body">
                <div class="form-group">
                    <label for="id_pelanggan">ID Pelanggan:</label>
                    <input type="text"  class="form-control" name="id_pelanggan" placeholder="<?= $pelanggan['id_pelanggan'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="nama_pelanggan">Nama Pelanggan:</label>
                    <input type="text"  class="form-control" name="nama_pelanggan" placeholder="<?= $pelanggan['nama_pelanggan'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text"  class="form-control" name="alamat" placeholder="<?= $pelanggan['alamat'] ?>" required>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="index.php?controller=pelanggan&action=index">Batal</a>
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