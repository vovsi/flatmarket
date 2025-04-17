<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'FlatMarket')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
<header>
    @section('menu')
        <div>
            @auth
                <a href="{{ route('profile.index') }}" class="btn">
                    My profile
                </a>
                @auth
                    <a href="{{ route('admin.contacts.index') }}" class="btn">
                        Admin panel
                    </a>
                @endauth
            @else
                <form id="loginForm" class="login-form" action="{{ route('login') }}" method="post">
                    @csrf
                    <input type="email" placeholder="E-mail" name="email" class="input" required>
                    <input type="password" placeholder="Password" name="password" class="input" required>
                    <input type="submit" value="Login" class="btn">
                </form>
                <a href="{{ route('signup') }}" class="btn">
                    Signup
                </a>
            @endauth
            <a href="{{ route('main') }}" class="btn">
                Main
            </a>
            <a href="{{ route('catalog.index') }}" class="btn">
                Catalog
            </a>
            <a href="{{ route('contacts.index') }}" class="btn">
                Contacts
            </a>
            @auth
                <a href="{{ route('logout') }}" class="btn">
                    Logout ({{ session('name') }})
                </a>
            @endauth
        </div>
    @show
    @yield('sub-menu')
</header>
<div
    class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
    <main class="items-center">
        <div class="info-message">
            <label class="info-text">{{ session()->get('info') }}</label>
        </div>
        <div class="error-message">
            @if ($errors->any())
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
        </div>
        @yield('content')
    </main>
</div>
</body>
</html>
