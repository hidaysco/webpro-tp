<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Pegawai</h1>
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>
        @if(session('success')) 
          <div class="alert alert-success"> 
            {{ session('success') }} 
          </div> 
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Gaji</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $pgw)
                <tr>
                    <td>{{ $pgw->name }}</td>
                    <td>{{ $pgw->posisi }}</td>
                    <td>{{ $pgw->gaji }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
