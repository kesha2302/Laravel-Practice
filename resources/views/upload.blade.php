<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form action="{{url('/uploadfile')}}" method="POST" class="m-4" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Upload File:</label>
          <input type="file"
            class="form-control" name="image"  aria-describedby="helpId" placeholder="upload Image">
            @error('image')
                {{$message}}
            @enderror

            <button type="submit" class="btn btn-primary mt-4">submit</button>

        </div>
    </form>
</body>
</html>
