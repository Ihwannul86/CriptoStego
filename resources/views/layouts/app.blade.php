<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CryptoStegoDocs</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600;display=swap"
          rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="font-sans antialiased">

    <!-- GLOBAL BACKGROUND -->

    <div class="min-h-screen
                bg-gradient-to-br
                from-slate-950
                via-indigo-950
                to-slate-900">

        @include('layouts.navigation')


        <!-- HEADER -->

        @isset($header)

            <header class="max-w-7xl mx-auto pt-8 px-6">

                <div class="
                    bg-white/5
                    backdrop-blur-xl
                    border border-white/10
                    rounded-2xl
                    shadow-2xl
                    p-6">

                    {{ $header }}

                </div>

            </header>

        @endisset



        <!-- MAIN -->

        <main class="flex-grow relative">


            {{-- SUCCESS TOAST --}}

            @if(session('success'))

                <div id="toastSuccess"

                     class="
                     fixed
                     top-24
                     right-6
                     z-50
                     w-96
                     bg-emerald-500/20
                     backdrop-blur-xl
                     border border-emerald-400/20
                     text-white
                     p-5
                     rounded-2xl
                     shadow-2xl
                     transition
                     duration-500
                     translate-x-0">

                    <div class="flex items-center gap-4">

                        <div class="text-3xl">

                            ✅

                        </div>

                        <div>

                            <p class="font-bold text-lg">

                                Success

                            </p>

                            <p class="text-sm text-gray-300 mt-1">

                                {{ session('success') }}

                            </p>

                        </div>

                    </div>

                </div>

            @endif



            {{-- ERROR TOAST --}}

            @if(session('error'))

                <div id="toastError"

                     class="
                     fixed
                     top-24
                     right-6
                     z-50
                     w-96
                     bg-red-500/20
                     backdrop-blur-xl
                     border border-red-400/20
                     text-white
                     p-5
                     rounded-2xl
                     shadow-2xl
                     transition
                     duration-500
                     translate-x-0">

                    <div class="flex items-center gap-4">

                        <div class="text-3xl">

                            ❌

                        </div>

                        <div>

                            <p class="font-bold text-lg">

                                Error

                            </p>

                            <p class="text-sm text-gray-300 mt-1">

                                {{ session('error') }}

                            </p>

                        </div>

                    </div>

                </div>

            @endif



            {{ $slot }}

        </main>

    </div>



    <!-- AUTO DISAPPEAR -->

    <script>

    setTimeout(function(){

        let success =
            document.getElementById("toastSuccess");

        let error =
            document.getElementById("toastError");


        if(success){

            success.style.opacity = "0";

            success.style.transform =
                "translateX(120px)";
        }


        if(error){

            error.style.opacity = "0";

            error.style.transform =
                "translateX(120px)";
        }

    }, 4000);

    </script>

</body>

</html>
