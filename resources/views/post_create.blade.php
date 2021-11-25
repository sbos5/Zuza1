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
    
    <div class="container">
    <p><h4> Tworzenie nowego posta</h4></p>
    <form method="POST" action="/post/create" >
    @csrf
    
    <label for="title">Tytuł</label>

<input name="title" type="text" >
<label for="content ">Content</label>

<input name="content" type="text" class="@error('title') is-invalid @enderror">
<input type="submit" value="Submit">
</form>
 
</div>
</body>