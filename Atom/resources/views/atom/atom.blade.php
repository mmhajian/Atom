<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atom - {{ Str::ucfirst(Str::lower($name)) }}</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div>
            <h1>
                {{ Str::ucfirst(Str::lower($name)) }}
            </h1>
            <h3>
                {{ $atomic_number }}
            </h3>
        </div>
    </main>
    <footer>

    </footer>
    <script src="/script/script.js"></script>
</body>
</html>