<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Fast Print Test 1</title>
  </head>
  <body>
    <h1 class="text-center">Data Produk</h1>

    <div class="container">
    <a href="/data" type="button" class="btn btn-success">Tampil Semua</a>
    <a href="/datadijual" type="button" class="btn btn-success">Dapat dijual</a>
    <a href="/tambahdata" type="button" class="btn btn-success">Tambah Data</a>
        <div class="row">
          @if($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{$message}}
          </div>
          @endif
        <table class="table">
  <thead>
    <tr>
        <th scope="col">Nama Produk</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Harga</th>
        <th scope="col">Kategori</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($dataproduk as $row)
    <tr>
        <th scope="row">{{$row->id_produk}}</th>
        <td>{{$row->nama_produk}}</td>
        <td>{{$row->harga}}</td>
        <td>{{$row->nama_kategori}}</td>
        <td>{{$row->nama_status}}</td>
        <td>
            <a href="/delete/{{$row->id_produk}}" onclick="return confirm('Are you sure?')" type="button" class="btn btn-danger">Hapus</button>
            <a href="/tampildata/{{$row->id_produk}}" class="btn btn-warning">Ubah</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
  </body>
</html>