<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Pendaftaran Online</title>
  </head>
  <body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Pendaftaran Online</h1>
        </div>
        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ url('/pendaftar/simpan') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <label>NIRM</label>
                    <input class="form-control" type="text" name="nirm" required readonly value="{{ $nirm }}">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" required value="" placeholder="Email">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <label>Password</label>
                    <input class="form-control" type="text" name="pass" required value="" placeholder="Password">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <label>Nama</label>
                    <input class="form-control" type="text" name="nama" required value="" placeholder="Nama">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <label>Nomor HP</label>
                    <input class="form-control" type="number" name="hp" required value="" placeholder="Nomor HP">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <label>Tempat Lahir</label>
                    <input class="form-control" type="text" name="tempatlahir" required value="" placeholder="Tempat Lahir">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" type="date" name="tgllahir" required value="{{ date('Y-m-d') }}" placeholder="Tanggal Lahir">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <label>Alamat</label>
                    <input class="form-control" type="text" name="alamat" required value="" placeholder="Alamat">
                </div>
                <div class="col-lg-12 col-md-12 col-12 mt-2">
                    <button type="submit" class="btn btn-block btn-primary">Daftar Sekarang</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>