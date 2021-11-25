<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
</head>
<body>
    <p> Komentarz do postu {{$post->id}}</p>
    <div class="container">
    <p><h4> Update  komentarza</h4></p>
    
    <form method="POST" action="/post/update/{{{$post->id}}}">
    @csrf
    <input name="id" type="hidden" value="{{$post->id}}">

    <label for="Tytuł">Tytuł</label>

<input name="title" type="text" value="{{$post->title}}">
<label for="Post">Content</label>

<input name="content" type="text" value="{{$post->content}}">
<input type="submit" value="Submit">
</form>

</div>
</body