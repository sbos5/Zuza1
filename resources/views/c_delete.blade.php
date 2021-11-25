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
    <p> Usuwam komentarz do postu {{$coment->id}}</p>
    <div>
    <table class="table table-dark table-striped"> 

  <tr>
  <td>  <p> {{ $coment->id }}</p></td>
  <td> <p> {{ $coment->content }}</p></td>
  <td><p> {{ $coment->post_id }}</p></td>
  
</tr>
</table>
</div>
</body>