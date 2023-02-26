<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Pembayaran SPP | SMK Telkom</title>
    <link rel="stylesheet" href="{{asset ('css/dashboard/style_adminHome.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header class="header">
        <a href="#">Data Kelas</a>

        <form method="POST" action="/logout" class="logout">
          @csrf
            <button class="btn btn-danger btn-sm">Logout</button>
        </form>
    </header>

    <aside>
        <ul>
            <li>
                <a href="{{ url('/admin/home') }}">Dashboard</a>
            </li>

            <li>
                <a href="{{ url('/kelas/index') }}">Data Pengguna</a>
            </li>

            <li>
                <a href="{{ url('/kelas/index') }}">Data Kelas</a>
            </li>

            <li>
                <a href="{{ url('/siswa/index') }}">Data Siswa</a>
            </li>

            <li>
                <a href="{{ url('/spp/index') }}">Data Spp</a>
            </li>

            <li>
                <a href="">Entry Pembayaran</a>
            </li>

            <li>
                <a href="">History Pembayaran</a>
            </li>

        </ul>
    </aside>

    <div class="content">
        <h1>
           <center>Data Kelas</center>
        </h1>

        <a href="{{ url('kelas/index/create') }}" class="btn btn-info"> Tambah </a>
        <br>
        <br>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Nama Kelas </th>
                    <th> Jurusan </th>
                    <th> &nbsp; </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $kls)
                    <tr>
                        <td> {{ $kls->id_kelas }} </td>
                        <td> {{ $kls->nama_kelas }} </td>
                        <td> {{ $kls->jurusan }} </td>

                        <td>
                            <center>
                                <a href="{{ URL::to('kelas/hapuskelas/' . $kls->id_kelas ) }}" class="btn btn-danger"> Hapus </a>
                            |
                                <a href="{{ URL::to('kelas/index/' . $kls->id_kelas . '/edit') }}" class="btn btn-warning"> Ubah </a>
                            </center>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>