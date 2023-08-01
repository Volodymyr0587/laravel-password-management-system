<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PassGuardian</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <nav class="p-5 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-2">Home</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="p-2">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('passwords') }}" class="p-2">Passwords</a>
            </li>
        </ul>

        <ul class="flex items-center">
            <li>
                <a href="" class="p-2">User Name</a>
            </li>
            <li>
                <a href="" class="p-2">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-2">Register</a>
            </li>
            <li>
                <a href="" class="p-2">Logout</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>
