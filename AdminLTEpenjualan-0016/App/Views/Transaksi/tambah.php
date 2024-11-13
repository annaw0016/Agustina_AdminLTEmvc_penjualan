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
            margin-bottom: 20px;
            font-weight: bold;
        }

        .total-harga {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
<div class="card-body">
<h2 class="form-title">Tambah Transaksi</h2>
        <form action="index.php?controller=transaksi&action=store" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat" for="id">ID Transaksi:</button>
                  </span>
                  <input type="text" class="form-control rounded-0" name="id" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat" for="kode_barang">Kode Barang:</button>
                  </span>
                  <input type="text" class="form-control rounded-0" name="kode_barang" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat" for="id_pelanggan">ID Pelanggan:</button>
                  </span>
                  <input type="text" class="form-control rounded-0" name="id_pelanggan" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat" for="jumlah">Jumlah:</button>
                  </span>
                  <input type="number" class="form-control rounded-0" name="jumlah" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat" for="harga_barang">Harga Barang:</button>
                  </span>
                  <input type="number" class="form-control rounded-0" name="harga_barang" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat" for="tanggal">Tanggal Transaksi:</button>
                  </span>
                  <input type="datetime-local" class="form-control rounded-0" name="tanggal" required>
            </div>

            <p>Total Harga: <span id="total_harga">0</span></p>
            
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="index.php?controller=transaksi&action=index" class="btn btn-outline-light">Kembali</a>
    </div>
    <script>
        document.querySelector("input[name='jumlah']").addEventListener("input", calculateTotal);
        document.querySelector("input[name='harga_barang']").addEventListener("input", calculateTotal);

        function calculateTotal() {
            let jumlah = parseFloat(document.querySelector("input[name='jumlah']").value) || 0;
            let hargaBarang = parseFloat(document.querySelector("input[name='harga_barang']").value) || 0;
            let total = jumlah * hargaBarang;
            document.getElementById("total_harga").innerText = total;
        }
    </script>
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

