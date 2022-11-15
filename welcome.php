<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <form method="POST" action="TambahDataPemesan.php" enctype="multipart/form-data">
  <div class="card-body">
    <h3 class="card-title">Input Data Pemesan</h3>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input name="namaI" type="text" class="form-control" id="namaI" placeholder="Masukan Nama">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="Masukan Email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea name="Alamat" class="form-control" id="alamat" rows="1s"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telepon</label>
    <input name="Telepon" type="text" class="form-control" id="telepon" placeholder="Masukan Nomor Telepon">
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlFile1">Foto</label>
    <input name="file" type="file" class="form-control-file" id="file">
  </div>
  <br>
  <button type="submit" class="btn btn-success">Submit</button>
  <button type="button" class="btn btn-danger">Cancel</button>
</form>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
</body>
</html>