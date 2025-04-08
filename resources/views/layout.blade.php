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
        <header >
            @section('menu')
                @auth
                    <a
                        href="{{ url('/profile') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                    >
                        My profile
                    </a>
                @else
                    <form method="post" action="{{ route('login') }}" class="login">
                        <input type="email" placeholder="E-mail" name="email">
                        <input type="password" placeholder="Password" name="pass">
                        <input type="submit" value="Login" class="btn">
                    </form>
                    <a
                        href="{{ route('main') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                    >
                        Main
                    </a>
                @endauth
            @show
        </header>
        <div
            class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                @yield('content')
            </main>
        </div>
    </body>
</html>
