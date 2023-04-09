<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laravel Breeze</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-black">
    <x-flash />
    <nav class="flex flex-wrap sticky w-full justify-left bg-black top-0">
        <div class="flex justify-center items-center">
            <a href="#"><img class="w-40 h-auto mr-10" src="{{ asset('images/openAi.png') }}" alt="logo"></a>
            <div class="flex m-2 mb-2">
                    <ul class="flex gap-2 pl-20 text-white">
                        @auth
                        <x-nav.item route="user.home" name="home" />
                        @endauth
                        @guest
                        <x-nav.item route="register" name="Register" />
                        @endguest
                        <x-nav.item route="login" name="help" />
                        <x-nav.item route="login" name="help" />
                        @auth
                        <x-nav.item route="logout" name="Logout" />
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
    {{ $slot }}
        <section class="bg-white">
            <div class=" transform rotate-30 mb-20">
                <div class="">
                @php
                    $height = 23;
                @endphp
                @for ($margin = 0; $margin < 23; $margin++)
                        <div class="bg-black" style="margin-top: {{ $margin }}px; height: {{ $height - $margin }}px">
                        </div>
                @endfor
                    </div>
                </div>
            </section>
        </body>
</html>
