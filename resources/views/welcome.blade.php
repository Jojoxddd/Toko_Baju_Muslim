<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toko Baju Muslim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.5);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        h1 {
            font-size: 3rem;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <h1>Selamat Datang di Toko Baju Muslim</h1>
        <p class="lead">Silakan login atau register untuk memulai</p>
        <a href="/login" class="btn btn-light btn-lg m-2">Login</a>
        <a href="/register" class="btn btn-outline-light btn-lg m-2">Register</a>
    </div>
</body>
</html>
