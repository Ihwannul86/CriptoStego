<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>CryptoStegoDocs</title>

    <!-- Fonts -->

    <link rel="preconnect"
          href="https://fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap"
          rel="stylesheet" />

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>


<body class="font-sans antialiased overflow-hidden">




<!-- ========================================= -->
<!-- BACKGROUND -->
<!-- ========================================= -->

<div class="fixed inset-0 -z-50">

    <div class="
        absolute
        inset-0
        bg-gradient-to-br
        from-slate-950
        via-indigo-950
        to-slate-900">

    </div>



    <!-- CYAN GLOW -->

    <div class="
        absolute
        top-[-180px]
        left-[-120px]
        w-[520px]
        h-[520px]
        rounded-full
        bg-cyan-500/20
        blur-[140px]">

    </div>



    <!-- PURPLE GLOW -->

    <div class="
        absolute
        bottom-[-180px]
        right-[-120px]
        w-[520px]
        h-[520px]
        rounded-full
        bg-purple-500/20
        blur-[140px]">

    </div>



    <!-- GRID -->

    <div class="absolute inset-0 opacity-[0.05]">

        <div class="w-full h-full"

             style="

             background-image:

             linear-gradient(rgba(255,255,255,.12) 1px,transparent 1px),

             linear-gradient(90deg,rgba(255,255,255,.12) 1px,transparent 1px);

             background-size:45px 45px;

             ">

        </div>

    </div>

</div>





<!-- ========================================= -->
<!-- CONTENT -->
<!-- ========================================= -->

<div class="
min-h-screen
flex
items-center
justify-center
px-6">




<div class="w-full max-w-6xl">

<div class="grid lg:grid-cols-2 gap-16 items-center">




<!-- ========================================= -->
<!-- LEFT -->
<!-- ========================================= -->

<div class="hidden lg:block">

    <span class="
        inline-flex
        px-5
        py-2
        rounded-full
        bg-cyan-500/10
        border
        border-cyan-400/20
        text-cyan-300">

        Enterprise Secure Platform

    </span>



    <h1 class="
        text-6xl
        font-black
        text-white
        leading-tight
        mt-8">

        Crypto

        <span class="text-cyan-400">

            Stego

        </span>

        Docs

    </h1>



    <p class="
        text-xl
        text-gray-400
        leading-9
        mt-8">

        Secure document storage platform
        powered by

        <span class="text-cyan-300 font-semibold">

            AES-256

        </span>,

        <span class="text-purple-300 font-semibold">

            RSA-2048

        </span>

        and

        <span class="text-pink-300 font-semibold">

            LSB Steganography.

        </span>

    </p>



    <div class="grid grid-cols-2 gap-5 mt-12">

        <div class="
            bg-white/5
            border
            border-white/10
            rounded-2xl
            p-6">

            <h2 class="text-4xl">

                🔐

            </h2>

            <h3 class="text-white font-bold mt-4">

                AES-256

            </h3>

            <p class="text-gray-400 mt-2">

                Military Grade Encryption

            </p>

        </div>



        <div class="
            bg-white/5
            border
            border-white/10
            rounded-2xl
            p-6">

            <h2 class="text-4xl">

                🔑

            </h2>

            <h3 class="text-white font-bold mt-4">

                RSA-2048

            </h3>

            <p class="text-gray-400 mt-2">

                Secure Key Exchange

            </p>

        </div>



        <div class="
            bg-white/5
            border
            border-white/10
            rounded-2xl
            p-6">

            <h2 class="text-4xl">

                🖼

            </h2>

            <h3 class="text-white font-bold mt-4">

                LSB

            </h3>

            <p class="text-gray-400 mt-2">

                Hidden Key Protection

            </p>

        </div>



        <div class="
            bg-white/5
            border
            border-white/10
            rounded-2xl
            p-6">

            <h2 class="text-4xl">

                ⚡

            </h2>

            <h3 class="text-white font-bold mt-4">

                Recovery

            </h3>

            <p class="text-gray-400 mt-2">

                Secure Restore

            </p>

        </div>

    </div>

</div>






<!-- ========================================= -->
<!-- RIGHT -->
<!-- ========================================= -->

<div>

    <div class="
        bg-white/5
        backdrop-blur-xl
        border
        border-white/10
        rounded-[35px]
        shadow-2xl
        p-10">



        <div class="text-center mb-8">

            <a href="/">

                <x-application-logo
                    class="mx-auto w-24 h-24" />

            </a>

            <h2 class="
                text-3xl
                font-bold
                text-white
                mt-6">

                Welcome

            </h2>

            <p class="
                text-gray-400
                mt-3">

                Secure Authentication Portal

            </p>

        </div>



        {{ $slot }}

    </div>

</div>





</div>

</div>

</div>

</body>

</html>
