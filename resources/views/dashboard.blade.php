<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
    <div class="container">
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
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/dashboard') }}">Dashboard</a>
            <a class="btn btn-danger" href="{{ url('/logout') }}" onclick="return confirm('apakah kamu mau logout?')">Logout</a>
        </nav>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIRM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tgl Daftar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $row)
                <tr>
                    <td>
                        @if ($row->status == 'validasi')
                            <a href="{{ url('/dashboard/hapus', $row->id) }}" class="btn btn-danger" onclick="return confirm('apakah yakin untuk di hapus {{ $row->nama }}?')">
                                Hapus
                            </a>
                        @endif
                        @if ($row->status == 'daftar')
                            <a href="{{ url('/dashboard/tolak', $row->id) }}" class="btn btn-danger" onclick="return confirm('apakah yakin untuk di tolak {{ $row->nama }}?')">
                                Tolak
                            </a>
                            <a href="{{ url('/dashboard/validasi', $row->id) }}" class="btn btn-success" onclick="return confirm('apakah yakin untuk di validasi {{ $row->nama }}?')">
                                Validasi
                            </a>
                        @endif
                    </td>
                    <td>{{ $row->nirm }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>
                        @if ($row->status == 'daftar')
                            <span class="badge bg-warning">daftar</span>
                        @elseif ($row->status == 'tolak')
                            <span class="badge bg-danger">tolak</span>
                        @elseif ($row->status == 'validasi')
                            <span class="badge bg-success">validasi</span>
                        @elseif ($row->status == 'selesai')
                            <span class="badge bg-primary">selesai</span>
                        @endif
                    </td>
                    <td>{{ $row->tgldaftar }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
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