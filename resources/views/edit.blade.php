<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
<br><br><br>
<h1>Edit Post</h1>

<form action="{{route('update',$post->id)}}" method="POST">
{{ csrf_field() }}
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
   
      <div class="form-outline mb-4">
      <label class="form-label" for="form3Example2">User-id</label>
        <input type="text" id="form3Example2" class="form-control" name="user_id" value="{{$post->user_id}}" />
        
      </div>
    
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form3Example3">Name</label>
    <input type="text" id="form3Example3" class="form-control" name="name" value="{{$post->name}}" />
   
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form3Example4">Description</label>
    <input type="text-area" id="form3Example4" class="form-control" name="description" value="{{$post->description}}" />
    
  </div>

  <!-- Checkbox -->
  

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Edit Post</button>

  <!-- Register buttons -->
  
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
</body>
</html>


