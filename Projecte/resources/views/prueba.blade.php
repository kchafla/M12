<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <form id="searchVideo">
        <input type="text" name="query" id="searchBar">
        <button type="submit">Buscar</button>
    </form>
    <div id="player">
    </div>
    <div id="videos">
    </div>
    <img src="" alt="">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{ asset('js/prueba.js') }}"></script>
</body>
</html>