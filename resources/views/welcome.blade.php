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
        <h1>Selamat Datang di Countrychics</h1>
        <p class="lead">Silakan login atau register untuk memulai</p>
        <a href="/login" class="btn btn-light btn-lg m-2">Login</a>
        <a href="/register" class="btn btn-outline-light btn-lg m-2">Register</a>
    </div>

    @extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 text-center p-6">
    <h1 class="text-4xl font-bold mb-4">Selamat Datang di Toko Baju Muslim</h1>
    <p class="text-gray-600 mb-6">Silakan login sebagai admin untuk mengelola produk.</p>

    @if ($errors->any())
        <div class="mb-4 text-red-500">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.admin.submit') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 w-full max-w-sm">
        @csrf
        <div class="mb-4">
            <input type="email" name="email" placeholder="Email admin"
                   class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-6">
            <input type="password" name="password" placeholder="Password"
                   class="w-full px-3 py-2 border rounded" required>
        </div>
        <div>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                Login as Admin
            </button>
        </div>
    </form>
</div>
@endsection

</body>
</html>
