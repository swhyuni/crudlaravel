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
    <h1 class="text-center mb-4">Data pegawai</h1>

        <div class="container">
          <a href="/tambahpegawai" type="button" class="btn btn-success">Tambah + </a>
          <div class="row">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">No Telpon</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @php 
                $no =1;
              @endphp

              @foreach ($data as $row)
                <tr>
                  <th scope="row">{{$no++ }}</th>
                  <td>{{$row->nama}}</td>
                  <td>{{$row->jenisKelamin }}</td>
                  <td>0{{$row->notelpon }}</td>
                  <td>
                      <a href="/tampilkandata/{{ $row->id }}"  class="btn btn-primary">Edit</a>
                      <a href= "/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              @endforeach

              </tbody>
            </table>
          </div>
        </div>

    
    
    <!-- option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  </body>
</html>
