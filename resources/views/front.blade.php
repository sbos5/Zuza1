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
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href= {{ route('post_index') }}>Posty</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href= {{ route('com_index') }}>komentarze</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href= {{ route('post_index') }}>Kontact</a>
    </li>
  </ul>
  @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

</nav>
</div>
<br><br>
<div class="container">
    <p ><label text="center"><h4>Witam na blogu motoryzacyjnym </h4></label></p>
</div>
</body>