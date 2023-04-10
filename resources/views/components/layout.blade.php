<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>OpenAI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-black">
    <x-flash />
    @php
    $isTop = true;
    @endphp
    <nav class="flex flex-wrap sticky w-full  justify-left bg-black top-0 {{ $isTop ? 'bg-black' : 'bg-transparent' }}">
        <a href="#"><img class="w-40 h-auto  " src="{{ asset('images/openAi.png') }}" alt="logo"></a>
        <div class="flex justify-center items-center ">
            <div class="flex m-2 mb-2">
                    <ul class="flex gap-2 pl-20 text-white xs:block lg:inline-flex">
                        @auth
                        <x-nav.item route="user.home" name="home" />
                        @endauth
                        <x-nav.item route="register" name="Research" />
                        <x-nav.item route="register" name="Product" />
                        <x-nav.item route="register" name="Developers" />
                        @guest
                        <x-nav.item route="register" name="Register"  />
                        @endguest
                        @auth
                        <li class=" hover:bg-teal-800 rounded-lg p-2"><a class="flex items-center font-bold"  href="{{ route('logout') }}">
                            Logout
                            </a> 
                        </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
    {{ $slot }}
        <section class="bg-white">
            <div class="transform rotate-30">
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
                <div class="flex flex-col justify-center bg-white"></div>
            </section>

              
</body>     
</html>
