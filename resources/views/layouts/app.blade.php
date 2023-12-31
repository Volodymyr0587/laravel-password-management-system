<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PassGuardian</title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <nav class="p-5 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'p-2 bg-blue-300 text-sky-900  rounded-xl' : 'p-2 hover:text-blue-500' }}">Home</a>
            </li>
            @auth
                <li>
                    <a href="{{ route('passwords') }}" class="{{ request()->is('passwords') ? 'p-2 bg-blue-300 text-sky-900 rounded-xl' : 'p-2 hover:text-blue-500' }}">Passwords</a>
                </li>

                <li>
                    <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'p-2 bg-blue-300 text-sky-900  rounded-xl' : 'p-2 hover:text-blue-500' }}">Dashboard</a>
                </li>
            @endauth
        </ul>

        <ul class="flex items-center">
            @auth
                <li>
                    <a href="{{ route('userinfo') }}" class="{{ request()->is('userinfo') ? 'p-2 bg-blue-300 text-sky-900  rounded-xl' : 'p-2 hover:text-blue-500' }}">{{ auth()->user()->name }}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="p-3 inline">
                        @csrf
                        <button type="submit" class="hover:text-blue-500">Logout</button>
                    </form>
                </li>
            @endauth

            @guest
                <li>
                    <a href="{{ route('login') }}" class="p-2 hover:text-blue-500">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-2 hover:text-blue-500">Register</a>
                </li>
            @endguest
        </ul>
    </nav>
    @yield('content')

    <x-flash />
</body>

</html>
