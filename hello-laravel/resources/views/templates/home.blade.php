<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Hello Laravel')</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <nav>
        <a href="/">Página inicial</a>
        <a href="/listagem">Listagem</a>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        Desenvolvido por Prof. Esp. Anderson Choren &copy;
    </footer>
</body>

</html>
