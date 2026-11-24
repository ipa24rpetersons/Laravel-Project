<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reģistrēties</title>
</head>
<body>
    <h1>Reģistrēties</h1>

    <form action="/register" method="post">
        @csrf

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div>
            <label for="first_name">Vārds</label>
            <input type="text" name="first_name" id="first_name" required>
        </div>

        <div>
            <label for="last_name">Uzvārds</label>
            <input type="text" name="last_name" id="last_name" required>
        </div>

        <div>
            <label for="email">E-pasts</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="password">Parole</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="password_confirmation">Atkārtot paroli</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <button type="submit">Reģistrēties</button>
    </form>
</body>
</html>