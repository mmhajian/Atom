<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <label for="param">Atom Name</label>
                            <input type="radio" name="param" id="chb-name" value="name" checked>
                        </div>
                        <div>
                            <label for="param">Atomic Number</label>
                            <input type="radio" name="param" id="chb-number" value="number">
                        </div>
                        <div>
                            <label for="param">Atomic Mass</label>
                            <input type="radio" name="param" id="chb-mass" value="mass">
                        </div>
                        <div>
                            <label for="param">Symbol</label>
                            <input type="radio" name="param" id="chb-symbol" value="symbol">
                        </div>
                        <div>
                            <label for="param">Isotopes</label>
                            <input type="radio" name="param" id="chb-isotopes" value="isotopes">
                        </div>
                        <div>
                            <label for="param">Neutrons</label>
                            <input type="radio" name="param" id="chb-neutrons" value="neutrons">
                        </div>
                        <div>
                            <label for="param">Atom Stability</label>
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