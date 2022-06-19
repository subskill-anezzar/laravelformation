<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
<h1>Articles</h1>
@foreach($posts as $post)
    <h2>{{ $post }}</h2>
@endforeach
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consequuntur enim id incidunt ipsam iure sint unde
    veritatis? Adipisci amet aut, consectetur dicta ducimus id laboriosam mollitia necessitatibus quam vero!
</p>
</body>
</html>
