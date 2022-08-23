<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer crud</title>
</head>
<body>
    <h1>Ingreso de Post</h1>
    <br><br><br>

    <form action="{{route('post.store')}}"  method="post">

        @csrf

        <label for="">Titulo</label>
        <input type="text" name="title">

        <label for="">Url Corta</label>
        <input type="text" name="slug">

        <label for="">Contenido</label>
        <textarea name="content"></textarea>

        <label for="">Descripcion</label>
        <textarea name="description"></textarea>



        <button type="submit">Enter</button>
    </form>
</body>
</html>
