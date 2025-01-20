<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <form class="m-4" method="POST" action="{{url('/register')}}">
        @csrf

        {{-- <pre>
@php
    print_r($errors->all());
@endphp
        </pre> --}}

        {{-- <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" value="{{old('name')}}">
              <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
              </span>
            </div>
          </div>

        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" name="email" value="{{old('email')}}">
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
              </span>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="password">
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
              </span>
          </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" name="password_confirmation">
              <span class="text-danger">
                @error('password_confirmation')
                    {{$message}}
                @enderror
              </span>
            </div>
          </div> --}}

          <x-input type="text" name="name" label="Name"/>
          <x-input type="email" name="email" label="Email"/>
          <x-input type="password" name="password" label="Password"/>
          <x-input type="password" name="password_confirmation" label="Confirmed Password"/>


        <button type="submit" class="btn btn-primary">Sign in</button>


        <x-ctitle title="Hello"/>
      </form>

  </body>
</html>
