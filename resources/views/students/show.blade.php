<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afis Ganteng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center container my-5">
        <div class="card my-5 ">
            <div class="container">
    <form style="width:400px;">
  <fieldset disabled>
    <legend>DATA SISWA {{ $students['nama'] }}</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">NIS</label>
      <input type="text" id="disabledTextInput" class="form-control" value="{{ $students ['nis']}}">
    </div>  
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nama</label>
      <input type="text" id="disabledTextInput" class="form-control" value="{{ $students ['nama']}}">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Rombel</label>
      <input type="text" id="disabledTextInput" class="form-control" value="{{ $students ['rombel']}}">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Rayon</label>
      <input type="text" id="disabledTextInput" class="form-control" value="{{ $students ['rayon']}}">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Tanggal Lahir</label>
      <input type="text" id="disabledTextInput" class="form-control" value="{{ $students ['tgl_lahir']}}">
    </div>
  </fieldset>
  <a href="/students" class="btn btn-primary mb-3">Back</a>
</form>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>