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
    <p><h4> Wykaz komentarzy</h4></P>
    <table class="table table-dark table-striped"> 
@foreach ($coment as $user)
  <tr>
  <td>  <p> {{ $user->id }}</p></td>
  <td> <p> {{ $user->content }}</p></td>
  <td><p> {{ $user->post_id }}</p></td>
  <td><p><a href= {{ route('com_show',['id'=>$user->id]) }}>Edytuj </a></p></td>
  <td><p><a href= {{ route('com_update',['id'=>$user->id]) }}>Update </a></p></td>
  <td><p><a href= {{ route('com_delete',['id'=>$user->id]) }}>Usuń </a></p></td>

  
</tr>
@endforeach
</table>
<p><a href= {{ route('com_create') }}><h5>Dodaj nowy rekord </h5></a></p>
</div>

</body>