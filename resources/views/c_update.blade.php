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
    <p> Komentarz do postu {{$coment->id}}</p>
    <div class="container">
    <p><h4> Tworzenie nowego komentarza</h4></p>
    
    <form method="POST" action="/coment/update/{{{$coment->id}}}">
    @csrf
    <input name="id" type="hidden" value="{{$coment->id}}">

    <label for="Komentarz">Content</label>

<input name="content" type="text" value="{{$coment->content}}">
<label for="Post">Post ID</label>

<input name="post_id" type="hidden" value="{{$coment->post_id}}">
<input type="submit" value="Submit">
</form>

</div>
</body>