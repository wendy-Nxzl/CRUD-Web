<?php 
  //Connect Database
  $server = "localhost";
  $user = "root";
  $password = "";
  $database = "dbcrudpractice";

  //Create Connection
  $koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

  //If button clicked
  if(isset($_POST['bsimpan'])){
    //New data will be saved
    $simpan = mysqli_query($koneksi, "INSERT INTO tbarang (kode, nama, asal, jumlah, satuan, tanggal_diterima)
                                      VALUE ( '$_POST[tkode]', 
                                              '$_POST[tnama]',
                                              '$_POST[tasal]',
                                              '$_POST[tjumlah]',
                                              '$_POST[tsatuan]',
                                              '$_POST[ttanggal_diterima]' )
                          ");

    //If submit success
    if ($simpan) {
      echo "<script>
              alert('Submit data Success!');
              document.location='index.php';
            </script>";
    } else {
      echo 
        "<script>
            alert('Submit data Failed!');
            document.location='index.php';
        </script>";
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
        <div class="col-md-6 mx-auto">
          <h5 class="text-center">Data Inventaris Pribadi</h5>
            <div class="card">
                <div class="card-header bg-info text-light">
                    Form Input Data Barang
                </div>
                <div class="card-body">
                    <!-- Start of Form -->
                    <form action="Post">
                      <div class="mb-3">
                        <label class="form-label">Kode Barang</label>
                        <input type="text" name="tkode" class="form-control" placeholder="Masukkan Kode Barang">
                      </div>
                    </form>

                    <form action="Post">
                      <div class="mb-3">
                        <label class="form-label">Nama Barang</label>
                        <input type="text" name="tnama" class="form-control" placeholder="Masukkan Nama Barang">
                      </div>
                    </form>

                    <form action="Post">
                      <div class="mb-3">
                        <label class="form-label">Asal Barang</label>
                        <select class="form-select" name="tasal">
                          <option selected>-Pilih-</option>
                          <option value="Pembelian">Pembelian</option>
                          <option value="Hibah">Hibah</option>
                          <option value="Sumbangan">Sumbangan</option>
                        </select>   
                      </div>                   
                    </form>

                    <!-- -->
                    <div class="row">
                      <div class="col">
                        <div class="mb-3">
                          <label class="form-label">Jumlah</label>
                          <input type="number" name="tjumlah" class="form-control" placeholder="Jumlah Barang">                        
                        </div>
                      </div>
                      <div class="col">
                        <div class="mb-3">
                          <label class="form-label">Satuan</label>
                            <select class="form-select" name="tsatuan">
                              <option selected>-Pilih-</option>
                              <option value="Unit">Unit</option>
                              <option value="Kotak">Kotak</option>
                              <option value="Pcs">Pcs</option>
                            </select>     
                        </div>                   
                      </div>
                      <!-- -->

                      <div class="col">
                        <div class="mb-3">
                          <label class="form-label">Tanggal diterima</label>
                          <input type="date" name="ttanggal_diterima" class="form-control">                        
                        </div>
                      </div>
                      <div class="text-center">
                        <hr>
                        <button class="btn btn-primary" name="bsimpan" type="submit">Simpan</button>
                        <button class="btn btn-danger" name="breset" type="reset">Kosongkan</button>
                      </div>
                    </div>
                    <!-- End of Form -->
                </div>
                <div class="card-footer bg-info">

                </div>
            </div>
        </div>

        <div class="card mt-3">
          <div class="card-header bg-info text-light">
            Data Barang
          </div>
          <div class="card-body">
            <div class="col-md-6 mx-auto">
              <form method="POST">
                <div class="input-group mb-3">
                  <input type="text" name="tcari" class="form-control" placeholder="Masukkan kata kunci">
                  <button class="btn btn-primary" type="submit" name="bcari">Cari</button>
                  <button class="btn btn-danger" type="submit" name="breset">Reset</button>
                </div>
              </form>
            </div>

            <table class="table table-striped table-hover table-bordered">
              <tr> <!-- Header Table -->
                <th>No.</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Asal Barang</th>
                <th>Jumlah</th>
                <th>Tanggal diterima</th>
                <th>Aksi</th>
              </tr>

              <!-- Looping Data from Database -->
              <?php 
                //Display Data
                $increment = 1;
                $tampil = mysqli_query($koneksi, "SELECT * FROM tbarang order by id_barang asc");
                while($data = mysqli_fetch_array($tampil)) :
              ?>

              <tr> <!-- Table Content -->
                <td><?= $increment++ ?></td>
                <td><?= $data['kode'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['asal'] ?></td>
                <td><?= $data['jumlah']?> <?= $data['satuan']?></td>
                <td><?= $data['tanggal_diterima']?></td>
                <td>
                  <a href="#" class="btn btn-warning">Edit</a>
                  <a href="#" class="btn btn-danger">Hapus</a>
                </td>                
              </tr>

              <?php endwhile; ?>

            </table>
          </div>
          <div class="card-footer bg-info">

          </div>
        </div>
    </div>    

    <!-- Don't delete this section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>