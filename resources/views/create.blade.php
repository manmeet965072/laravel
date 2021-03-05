<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>Crud</title>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Crud</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('crud')}}">Home </a>
          </li>

        </ul>

      </div>
    </nav>

    <br><br>
    <h1>Create Post</h1><br>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form action="{{route('store.user')}}" method="POST">
      {{ csrf_field() }}
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">


        <div class="form-outline mb-4">
          <label class="form-label" for="form3Example2">User-id</label>
          <input type="text" id="form3Example2" class="form-control" name="user_id" />

        </div>

      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form3Example3">Name</label>
        <input type="text" id="form3Example3" class="form-control" name="name" />

      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form3Example4">Description</label>
        <input type="text-area" id="form3Example4" class="form-control" name="description" />

      </div>

      <!-- Checkbox -->


      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block mb-4">Create Post</button>

      <!-- Register buttons -->

    </form><br><br>

    <footer class="bg-light text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright
        <a class="text-dark" href="https://mdbootstrap.com/"></a>
      </div>
      <!-- Copyright -->
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>