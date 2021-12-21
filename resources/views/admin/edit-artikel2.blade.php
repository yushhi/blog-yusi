<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Artikel</h1>

    <form method="POST" action="/update-artikel/{{$artikel->id}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <input type="text" name="judul" value="{{ $artikel->judul }}">
        <input type="text" name="keterangan" value="{{ $artikel->keterangan }}">
        <div class="form-group">
            <img width="120px" src="{{ url('/images/'.$artikel->file) }}">
            <label for="exampleInputEmail1">Upload File</label>
            <input name="file" type="file" class="form-control">
          </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
