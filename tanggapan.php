<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>APLIKASI PELAPORAN PENGADUAN MASYARAKAT</title>

    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
  </head>
  <body>
    <div class="contrainer">
      <!-- JUDUL APP -->
      <div class="row mb">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1 class="text-center">APLIKASI PELAPORAN PENGADUAN MASYARAKAT</h1>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="co-md12">
          <nav class="nav">
            <a href="pengaduan.html" class="nav-link">Pengaduan</a>
            <a href="login.html" class="nav-link">Keluar</a>
          </nav>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              TANGGAPAN:
              <div class="span text-muted">Jalan Rusak oleh Dilla</div>
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Judul Laporan" required autofocus />
                </div>
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Tulis isi laporan disini..." required></textarea>
                </div>
                <div class="form-group">
                  <input type="file" accept="image/*" class="form-control" required />
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>