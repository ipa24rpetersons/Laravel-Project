<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sākums</title>
</head>
<body>
    <h1>Sākums</h1>

    @auth
        <p>Sveiki, {{ Auth::user()->first_name }}</p>
    @endauth

    @guest
        <p>Sveiki, viesi!</p>
    @endguest
</body>
</html>