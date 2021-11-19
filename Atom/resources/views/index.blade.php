<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Atom</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div>
            <div>

            </div>
            <div>
                <form action="/explore" method="get">
                    <div>
                        <input type="text" name="query" id="" placeholder="Please enter atom" required>
                    </div>
                    <div>
                        <div>
                            <label for="chb-name">Atom Name</label>
                            <input type="radio" name="param" id="chb-name" value="name" checked>
                        </div>
                        <div>
                            <label for="chb-number">Atomic Number</label>
                            <input type="radio" name="param" id="chb-number" value="number">
                        </div>
                        <div>
                            <label for="chb-mass">Atomic Mass</label>
                            <input type="radio" name="param" id="chb-mass" value="mass">
                        </div>
                        <div>
                            <label for="chb-symbol">Symbol</label>
                            <input type="radio" name="param" id="chb-symbol" value="symbol">
                        </div>
                        <div>
                            <label for="chb-isotopes">Isotopes</label>
                            <input type="radio" name="param" id="chb-isotopes" value="isotopes">
                        </div>
                        <div>
                            <label for="chb-neutrons">Neutrons</label>
                            <input type="radio" name="param" id="chb-neutrons" value="neutrons">
                        </div>
                        <div>
                            <label for="chb-stability">Atom Stability</label>
                            <input type="radio" name="param" id="chb-stability" value="stability">
                        </div>
                    </div>
                    <div>
                        <button type="submit">Get</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>