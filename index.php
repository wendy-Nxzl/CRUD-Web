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
                    
          </div>
          <div class="card-footer bg-info">

          </div>
        </div>
    </div>    

    <!-- Don't delete this section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>