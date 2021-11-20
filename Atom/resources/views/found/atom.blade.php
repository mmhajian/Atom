<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style/style.css">
    <title>Atom - Couldn't find {{ $atom }}</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div>
            <div>
                <div>
                    <div class="title-div">
                        <div>
                            <img class="img-title" src="/images/atom.svg" alt="Atom">
                        </div>
                        <div>
                            <img class="img-title-text" src="/images/atomtitletext.png" alt="Atom Title">
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div>
                        <h1 class="f-atom">{{ $atom }}</h1>
                    </div>
                    <div>
                        <h3 class="f-atom-title">Couldn't Find</h3>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <button class="btn-submit" onclick="goHome()">Home</button>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <script src="/script/script.js"></script>
</body>
</html>