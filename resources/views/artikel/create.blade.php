<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create</title>
</head>
<body>
    <div class="container custom-container-artikel">
        <h1 class="h2 my-4">
            Buat Artikel
        </h1>
        <form action="{{ url('/artikels') }}" method="POST" enctype="multipart/form-data" class="form">
            <div class="form-group">
                <label for="gambar">Gambar Artikel</label>
                <input type="file" class="form-control  @error('gambar') is-invalid @enderror" name="gambar" id="gambar" value="{{old('gambar')}}">
                @error('gambar')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{old('judul')}}">
                @error('judul')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="isi">Isi artikel</label>
                <textarea name="isi" id="isi" cols="30" rows="3" class="form-control"> {{old('isi')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-5   " value="submit">Daftar</button>
            @csrf
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
