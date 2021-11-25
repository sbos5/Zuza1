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
    <p> <h4>Wykaz komentarzy</h4></P>
    <div>
    <table class="table table-dark table-striped"> 
@foreach ($post as $user)
  <td>  <p> {{ $user->id }}</p></td>
  <td> <p> {{ $user->content }}</p></td>
  <td><p> {{ $user->title }}</p></td>
  <td><p><a href= {{ route('post_show',['id'=>$user->id]) }}>Edytuj </a></p></td>
  <td><p><a href= {{ route('post_update',['id'=>$user->id]) }}>Update </a></p></td>
  <td><p><a href= {{ route('post_delete',['id'=>$user->id]) }}>Usuń </a></p></td>

  
</tr>
@endforeach
</table>
</div>
<p><a href= {{ route('post_create') }}>Dodaj nowy rekord </a></p>
</body>