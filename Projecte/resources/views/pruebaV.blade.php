<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
    <meta id="room_id" name="room_id" content="0">
    <meta id="user_id" name="user_id" content="{{ Auth::user()->id }}">
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
    <script src="{{ asset('js/youtube.js') }}"></script>
</body>
</html>
