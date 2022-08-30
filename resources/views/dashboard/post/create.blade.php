<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/styless.css')}}">
    <title>Mi primer crud</title>

    <link rel="stylesheet" href="{{asset("css/>app.css")}}">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


</head>
<body>


    <h1>Ingreso de Post</h1>
    <br><br><br>

<!--     @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert" alert-danger>
             {{$error}}
            </div>
        @endforeach
    @endif -->


    <div class="form">

    <form action="{{route('post.store')}}"  method="post">

    @csrf


    @if(session('status'))
    <div class="alert-success">
        {{session('status')}}


    </div>


    @endif



<label for="">Titulo</label>
<input type="text" placeholder="Titulo" name="title">
    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror

<br>  <br>
<label for="">Url Corta</label>
<input type="text" placeholder="Url Corta" name="slug">
@error('slug')
        <small class="text-danger">{{$message}}</small>
@enderror

<br> <br>
<label for="">Contenido</label>
<textarea name="content" placeholder="Contenido" cols="30" rows="7"></textarea>
@error('content')
        <small class="text-danger">{{$message}}</small>
@enderror

<br> <br>
<label for="">Descripcion</label>
<textarea name="description" placeholder="Descripcion" cols="30" rows="7"></textarea>
@error('description')
        <small class="text-danger">{{$message}}</small>
@enderror

<br> <br>

<button type="submit">Enter</button>
</form>

    </div>


</body>
</html>
