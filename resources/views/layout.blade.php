<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navidad Agrocaribe 🎄</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(180deg, #8b0000, #b22222);
            color: #fff;
            min-height: 100vh;
        }

        header {
            text-align: center;
            padding: 15px;
        }

        .logo {
            font-size: 1.4rem;
            font-weight: bold;
        }

        .container {
            padding: 15px;
            max-width: 480px;
            margin: auto;
        }

        input[type="text"] {
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            border: none;
            font-size: 1.1rem;
        }

        .result {
            background: rgba(255,255,255,0.95);
            color: #333;
            margin-top: 10px;
            padding: 12px;
            border-radius: 10px;
            cursor: pointer;
        }

        .result:hover {
            background: #ffe4e1;
        }

        footer {
            text-align: center;
            font-size: 0.8rem;
            opacity: 0.9;
            margin-top: 20px;
        }

        /* Tarjeta */
        .card {
            background: #fff;
            color: #333;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
        }

        .card h2 {
            color: #b22222;
        }

        .btn {
            display: block;
            width: 100%;
            margin-top: 12px;
            padding: 12px;
            border-radius: 12px;
            border: none;
            font-size: 1rem;
            cursor: pointer;
        }

        .btn-close {
            background: #b22222;
            color: #fff;
        }

        .btn-download {
            background: #228b22;
            color: #fff;
        }

        .personajes {
            display: flex;
            justify-content: space-around;
            margin: 15px 0;
        }

        .personaje {
            text-align: center;
            font-size: 0.8rem;
        }

        .emoji {
            font-size: 2.5rem;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">🎄 Agrocaribe, S.A. – T.I.</div>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    Sino gano, ¡renuncio!
</footer>

</body>
</html>
