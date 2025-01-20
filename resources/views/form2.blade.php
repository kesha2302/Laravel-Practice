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
    <h1 class="text-center mt-2">Registration Form</h1>
    <div class="card mt-3 mx-auto" style="width:60rem;">
    <div class="card-body">
    <form class="row g-3" action="{{url('/customers2')}} " method="POST">
        @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" >
            <span class='text-danger'>
            @error('name')
            {{$message}}
            @enderror
            </span>
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" >
            <span class='text-danger'>
            @error('email')
            {{$message}}
            @enderror
            </span>
          </div>

        <div class="col-md-6">
          <label for="inputEmail4" class="form-label mt-2">Password:</label>
          <input type="password" class="form-control" name="password" >
          <span class='text-danger'>
          @error('password')
          {{$message}}
          @enderror
          </span>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label mt-2">Confirm Password:</label>
          <input type="password" class="form-control" name="password_confirmation">
          <span class='text-danger'>
          @error('password_confirmation')
          {{$message}}
          @enderror
          </span>
        </div>

        <div class="col-12">
          <label for="inputAddress" class="form-label mt-2">Address:</label>
          <input type="text" class="form-control" name="address">
          <span class='text-danger'>
          @error('address')
          {{$message}}
          @enderror
          </span>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label mt-2">State:</label>
          <input type="text" class="form-control" name="state">
          <span class='text-danger'>
          @error('state')
          {{$message}}
          @enderror
          </span>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label mt-2">Country:</label>
            <input type="text" class="form-control" name="country" >
            <span class='text-danger'>
            @error('country')
            {{$message}}
            @enderror
            </span>
          </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label mt-2">Gender:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="M"
                >
                <label class="form-check-label" for="exampleRadios2">Male</label>
            </div>
            <div class="form-check">
                 <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="F"
               >
                 <label class="form-check-label" for="exampleRadios2">Female</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="O"
                >
                <label class="form-check-label" for="exampleRadios2">Other</label>
            </div>
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label mt-2">DOB:</label>
            <input type="date" class="form-control" name="dob" >
          </div>

          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
    </div>
  </body>
</html>
