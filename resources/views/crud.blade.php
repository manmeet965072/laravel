<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    
  </div>
</nav>



        @if(session('successMsg'))
        <div class="alert alert-success">
            {{session('successMsg')}}
        </div>

        @endif
        
        <h1 class="display-3">Posts</h1><br>
        <button class="btn btn-success" ><a href="{{route('create')}}"style="color:white;">Add post</a></button><br><br>
        <table class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->user_id}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->description}}</td>
                    <td><a class="btn btn-raised btn-primary btn-sm" href="{{route('edit',$post->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>

                    ||
                    <form method="POST" id="delete-form-{{$post->id}}" action="{{route('delete',$post->id)}}" style="display:none;">
                    @csrf
                    {{method_field('delete')}}

                    
                    
                    
                    
                    
                    </form>
                    
                    <button onclick="if(confirm('Are you sure to delete this post?')){
                        event.preventDefault();
                        document.getElementById('delete-form-{{$post->id}}').submit();


  


                    }else{
                        event.preventDefault();

                    }"
                    
                    class="btn btn-raised btn-danger btn-sm" ><i class="fa fa-trash" aria-hidden="true"></i>
                   </button></td>
                </tr>
                @endforeach


            </tbody>
        </table>
        {{$posts->links()}}
    </div>

    <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright
    <a class="text-dark" href="https://mdbootstrap.com/"></a>
  </div>
  <!-- Copyright -->
</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>