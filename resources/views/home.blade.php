<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        h1 {
            font-size: 40px;
            font-weight: bold;
            color: #333;
            margin: 40px;
        }

        .img-app {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 25rem;
            margin: auto;
            border-radius: 80rem;
        }

        .btn-logout {
            width: 50%;
            padding: 15px 10px;
            background-color: #FF495C;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 20px;
        }

        .btn-logout:hover {
            background-color: #FB6376;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="{{ asset('images/nasari.png') }}" alt="Description" class="img-app">

        <h1>Selamat Datang di Nasari Digital</h1>
        <button class="btn-logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </button>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</body>

</html>