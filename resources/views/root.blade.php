<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Costa Coffee</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>

    {{-- Navigation Bar --}}
    <div class="shadow-md p-3 bg-gray-100">
        <div class="flex justify-evenly">
            {{-- Header --}}
            <div class="font-bold text-xl">
                <div class="" id="greetingText"></div>
                <div class="">{{ Auth::user()->name }}</div>
            </div>
            <div class=""></div>
            <div class="center tracking-wide" style='color: {{ $color }}'>{{ Auth::user()->loyalty }} Level</div>
        </div>

        <div class="center gap-6 mt-5 font-semibold">
            <a href='/' class="flex relative">
                @if (Request::is('/'))
                    <div class="absolute bottom-0 w-full h-[0.5px] bg-black"></div>
                @endif
                <div class="center text-black w-5 h-5 mr-2 mt-[1px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </div>
                <div class="">Profile</div>
            </a>
            <a href='/transaction' class="flex relative">
                @if (Request::is('transaction'))
                    <div class="absolute bottom-0 w-full h-[0.5px] bg-black"></div>
                @endif
                <div class="center text-black w-5 h-5 mr-2 mt-[3px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>

                </div>
                <div class="">Transaction</div>
            </a>
        </div>

    </div>

    {{-- Content --}}
    <div class="w-full min-h-screen">
        @yield('content')
    </div>



    {{-- Footer --}}
    <div class="center p-10 text-white" style="background-color: {{ $color }}">
        <p>© 2023 Mexx Coffee Company, All Rights Reserved.</p>
    </div>
</body>

</html>
