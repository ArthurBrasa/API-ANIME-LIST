<!DOCTYPE html>
<html>
<head>
    <title>API REST para fins de estudo!</title>
</head>
<body>
    <h1>Anime List</h1>

    {{-- Rotas da API --}}
    <h2>Lista com Animes</h2>
    <ul>
        <li><a href="{{ route('all_animes')   }}">Listar todos os animes</a></li>
    </ul>

    <h2>Consulta individual</h2>
    <h6>exemplo</h6>
    <ul>
        <li><a href="{{ '/api/v1/naruto' }}">Anime Naruto</a></li>
    </ul>

</body>
</html>
