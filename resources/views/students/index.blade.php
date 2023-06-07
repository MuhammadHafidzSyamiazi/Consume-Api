<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data API Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container my-5">
        <a href="/students/create" class="btn btn-success">Tambah Data</a>
        <table class="table table-bordered table-warning my-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Rombel</th>
                <th>Rayon</th>
                <th>Tanggal Lahir</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $value)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{ $value['nis'] }}</td>
                    <td>{{ $value['nama'] }}</td>
                    <td>{{ $value['rombel'] }}</td>
                    <td>{{ $value['rayon'] }}</td>
                    <td>{{ $value['tgl_lahir'] }}</td>
                    <td><img src="{{ asset($item['image_path'])}}" alt="" width="100"></td>
                    <td>
                        <form action="/students/delete/{{ $value['id'] }}" method="post" >
                        <a href="/students/{{ $value['id'] }}" class="btn btn-primary"><i class="bi bi-eye-fill"></i></a>
                        <a href="/students/edit/{{ $value['id'] }}" class="btn btn-warning"><i class="bi bi-clipboard2-pulse-fill"></i></a>
                        <!-- <a href="/students/delete/{{ $value['id'] }}" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a> -->
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger "><i class="bi bi-trash3-fill"></i</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>