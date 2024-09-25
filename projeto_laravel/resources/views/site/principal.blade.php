<!-- resources/views/site/principal.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <h3> Principal (view)</h3>
    <p>Bem-vindo à página Principal!</p>
<ul>
    <li>
        <a href="{{ route('site.index')}}">Principal</a>
    </li>
    <li>
        <a href="{{route('site.sobrenos')}}">sobre-nos Nos </a>
    </li>
        <a href="{{route('site.contato')}}">Contato</a>
</ul>

</body>
</html>
