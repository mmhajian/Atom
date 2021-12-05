<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>Atom - {{ Str::ucfirst(Str::lower($name)) }}</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div>
            <div>
                <div>
                    <div class="symbol-div">
                        <div>
                            <h5 class="symbol-mass">
                                {{ $atomic_mass }}
                            </h5>
                            <h5 class="symbol-number">
                                {{ $atomic_number }}
                            </h5>
                        </div>
                        <h2 class="atom-symbol">
                            {{ $symbol }}
                        </h2>
                    </div>
                    <div>
                        <h1 class="atom-name">
                            {{ Str::ucfirst(Str::lower($name)) }}
                        </h1>
                    </div>
                </div>
                <div>
                    <div>
                        <h3 class="symbol-mass">
                            Atomic Mass: {{ $atomic_mass }}
                        </h3>
                    </div>
                    <div>
                        <h3 class="symbol-number">
                            Atomic Number: {{ $atomic_number }}
                        </h3>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>
                            Atom Isotopes (By Atomic Mass): {{ $isotopes }}
                        </h3>
                    </div>
                    <div>
                        <h3>
                            Atom Stability: <span id="stable">{{ $stability }}</span>
                        </h3>
                    </div>
                    <div>
                        <h3>
                            Proton: <span id="proton">{{ $proton }}</span>
                        </h3>
                    </div>
                    <div>
                        <h3>
                            Electron: {{ $electron }}
                        </h3>
                    </div>
                    <div>
                        <h3>
                            Neutron: <span id="neutron">{{ $neutron }}</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <script src="/js/app.js"></script>
</body>
</html>