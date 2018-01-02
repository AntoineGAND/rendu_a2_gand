<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom styles for this template -->

    <link href="{{ asset('css/post.css') }}" rel="stylesheet" type="text/css" > <!-- J'ai passé 3h à trouver comment intègrer cette ******* de feuille de css pour qu'elle fonctionne sur toute les pages et pas juste l'accueil -->

</head>

<body>

@include ('layouts.nav')

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">Laravel Blog with Bootstrap</h1>
        <p class="lead blog-description">Laravel, parce que je le vaux bien</p>
    </div>
</div>

<div class="container">

    <div class="row">

        @yield('content')

        @include('layouts.sidebar')

    </div>

</div>

@include ('layouts.footer')

</body>
</html>
