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
    <h1 class="text-center">Tambah Data Produk</h1>

    <div class="container">
        <div class="row jistify-content-center" >
            <div class="card">
              <div class="card-body">
              <form action="/insertdata" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" require >Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                      <select class="form-select" name="kategori_id_kategori" aria-label="Default select example">
                        <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $dbname = "test_fastprint";

                          $conn = new mysqli($servername, $username, $password, $dbname);

                          $sql = "SELECT * FROM kategori ";
                          $result = $conn->query($sql);

                          if($result->num_rows > 0){
                            while($rows = $result->fetch_assoc()){
                        ?>
                        <option value="{{$rows['id_kategori']}}">{{$rows['nama_kategori']}}</option>
                        <?php
                            }
                          }
                        ?>
                      </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Status</label>
                    <select class="form-select" name="status_id_status" aria-label="Default select example">
                      <?php
                        $sqlstatus = "SELECT * FROM status";
                        $resultstatus = $conn->query($sqlstatus);

                          if($resultstatus->num_rows > 0){
                            while($rows = $resultstatus->fetch_assoc()){
                      ?>
                        <option value="{{$rows['id_status']}}">{{$rows['nama_status']}}</option>
                        <?php
                            }
                          }
                        ?>
                      </select>
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
</form>
              </div>
            </div>
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