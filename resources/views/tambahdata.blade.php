<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>CRUD LARAVEL</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Tambah Data Pegawai</h1>

        <div class="container">

          <div class="row justify-content-center">
              <div class="col-8">
                <div class="card">
                  <div class="card-body">  
                    <form action="/insertdata" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenisKelamin" aria-label="Default select example">
                          <option selected>Pilih Jenis Kelamin</option>
                          <option value="1">Laki-Laki</option>
                          <option value="2">Perempuan</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Telpon</label>
                        <input type="number" name="notelpon" class="form-control" id="exampleInputEmail1" 
                            aria-describedby="emailHelp">
                      </div>     
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>

    
    
    <!-- option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  </body>
</html>
