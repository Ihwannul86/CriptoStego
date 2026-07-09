<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>CryptoStegoDocs</title>

    <link rel="preconnect"
          href="https://fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap"
          rel="stylesheet" />

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body class="font-sans antialiased overflow-x-hidden">


    <!-- ========================= -->
    <!-- GLOBAL BACKGROUND -->
    <!-- ========================= -->

    <div class="fixed inset-0 -z-50">

        <div class="absolute inset-0
                    bg-gradient-to-br
                    from-slate-950
                    via-indigo-950
                    to-slate-900">
        </div>


        <!-- Blur Cyan -->

        <div class="absolute
                    top-[-150px]
                    left-[-100px]
                    w-[450px]
                    h-[450px]
                    bg-cyan-500/20
                    rounded-full
                    blur-[120px]">
        </div>


        <!-- Blur Purple -->

        <div class="absolute
                    bottom-[-120px]
                    right-[-100px]
                    w-[500px]
                    h-[500px]
                    bg-fuchsia-500/20
                    rounded-full
                    blur-[140px]">
        </div>


        <!-- Grid -->

        <div class="absolute inset-0 opacity-[0.04]">

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



    <!-- ========================= -->
    <!-- NAVBAR -->
    <!-- ========================= -->

    <nav class="sticky top-0 z-50">

        <div class="max-w-7xl mx-auto px-6 pt-6">

            <div class="
                bg-white/10
                backdrop-blur-xl
                border border-white/10
                rounded-2xl
                shadow-2xl">

                <div class="flex
                            justify-between
                            items-center
                            h-20
                            px-8">


                    <!-- LOGO -->

                    <a href="/"
                       class="flex items-center gap-4">

                        <div class="
                            w-14
                            h-14
                            rounded-2xl
                            bg-gradient-to-br
                            from-cyan-400
                            to-blue-600
                            flex
                            items-center
                            justify-center
                            text-2xl
                            shadow-xl">

                            🔐

                        </div>

                        <div>

                            <h1 class="text-white
                                       font-bold
                                       text-2xl">

                                CryptoStegoDocs

                            </h1>

                            <p class="text-cyan-300 text-xs">

                                Secure Document Platform

                            </p>

                        </div>

                    </a>



                    <!-- MENU -->

                    <div class="hidden lg:flex items-center gap-8">

                        <a href="#features"
                           class="text-gray-300 hover:text-cyan-300 transition">

                            Features

                        </a>

                        <a href="#workflow"
                           class="text-gray-300 hover:text-cyan-300 transition">

                            Workflow

                        </a>

                        <a href="#security"
                           class="text-gray-300 hover:text-cyan-300 transition">

                            Security

                        </a>

                        <a href="#about"
                           class="text-gray-300 hover:text-cyan-300 transition">

                            About

                        </a>

                    </div>



                    <!-- RIGHT BUTTON -->

                    <div class="flex items-center gap-3">

                        @auth

                            <a href="{{ route('dashboard') }}"
                               class="
                               px-6
                               py-3
                               rounded-xl
                               bg-gradient-to-r
                               from-cyan-500
                               to-blue-600
                               text-white
                               font-semibold
                               hover:scale-105
                               transition">

                                Dashboard

                            </a>

                        @else

                            <a href="{{ route('login') }}"
                               class="
                               px-5
                               py-3
                               rounded-xl
                               border
                               border-white/10
                               text-white
                               hover:bg-white/10
                               transition">

                                Login

                            </a>

                            @if(Route::has('register'))

                            <a href="{{ route('register') }}"
                               class="
                               px-5
                               py-3
                               rounded-xl
                               bg-gradient-to-r
                               from-cyan-500
                               to-blue-600
                               text-white
                               font-semibold
                               hover:scale-105
                               transition">

                                Register

                            </a>

                            @endif

                        @endauth

                    </div>

                </div>

            </div>

        </div>

    </nav>



    <!-- ========================= -->
    <!-- MAIN -->
    <!-- ========================= -->

    <main>

            <!-- ========================= -->
        <!-- HERO SECTION -->
        <!-- ========================= -->

        <section
            class="relative overflow-hidden">

            <div class="max-w-7xl mx-auto px-6 py-24">

                <div class="grid lg:grid-cols-2 gap-16 items-center">


                    <!-- LEFT -->

                    <div>

                        <div class="
                            inline-flex
                            items-center
                            gap-3
                            px-5
                            py-2
                            rounded-full
                            bg-cyan-500/10
                            border
                            border-cyan-400/20
                            text-cyan-300
                            mb-8">

                            <span class="animate-pulse">

                                🛡

                            </span>

                            Enterprise Document Protection

                        </div>


                        <h1 class="
                            text-5xl
                            lg:text-7xl
                            font-black
                            text-white
                            leading-tight">

                            Protect Every

                            <span class="
                                bg-gradient-to-r
                                from-cyan-400
                                via-blue-400
                                to-purple-400
                                bg-clip-text
                                text-transparent">

                                Confidential

                            </span>

                            Document.

                        </h1>


                        <p class="
                            text-xl
                            text-gray-400
                            mt-8
                            leading-9">

                            CryptoStegoDocs is a secure document platform
                            that combines

                            <span class="text-cyan-300 font-semibold">

                                AES-256 Encryption

                            </span>,

                            <span class="text-purple-300 font-semibold">

                                RSA-2048

                            </span>

                            and

                            <span class="text-pink-300 font-semibold">

                                LSB Steganography

                            </span>

                            into one seamless security workflow.

                        </p>



                        <!-- BUTTON -->

                        <div class="flex flex-wrap gap-5 mt-12">

                            @auth

                                <a href="{{ route('dashboard') }}"

                                   class="
                                   px-8
                                   py-4
                                   rounded-2xl
                                   bg-gradient-to-r
                                   from-cyan-500
                                   to-blue-600
                                   text-white
                                   font-bold
                                   shadow-2xl
                                   hover:scale-105
                                   transition">

                                    🚀 Open Dashboard

                                </a>

                            @else

                                <a href="{{ route('login') }}"

                                   class="
                                   px-8
                                   py-4
                                   rounded-2xl
                                   bg-gradient-to-r
                                   from-cyan-500
                                   to-blue-600
                                   text-white
                                   font-bold
                                   shadow-2xl
                                   hover:scale-105
                                   transition">

                                    🔐 Get Started

                                </a>

                            @endauth



                            <a href="#features"

                               class="
                               px-8
                               py-4
                               rounded-2xl
                               border
                               border-white/10
                               bg-white/5
                               text-white
                               hover:bg-white/10
                               transition">

                                Learn More

                            </a>

                        </div>



                        <!-- BADGES -->

                        <div class="flex flex-wrap gap-4 mt-14">

                            <div class="
                                bg-white/5
                                backdrop-blur-xl
                                border
                                border-white/10
                                rounded-xl
                                px-5
                                py-3
                                text-white">

                                🔐 AES-256

                            </div>

                            <div class="
                                bg-white/5
                                backdrop-blur-xl
                                border
                                border-white/10
                                rounded-xl
                                px-5
                                py-3
                                text-white">

                                🔑 RSA-2048

                            </div>

                            <div class="
                                bg-white/5
                                backdrop-blur-xl
                                border
                                border-white/10
                                rounded-xl
                                px-5
                                py-3
                                text-white">

                                🖼 LSB Secure

                            </div>

                        </div>

                    </div>





                    <!-- RIGHT -->

                    <div class="relative">

                        <!-- Glow -->

                        <div class="
                            absolute
                            -top-12
                            -left-10
                            w-80
                            h-80
                            rounded-full
                            bg-cyan-500/20
                            blur-[90px]">

                        </div>


                        <div class="
                            relative
                            bg-white/5
                            backdrop-blur-xl
                            border
                            border-white/10
                            rounded-[35px]
                            p-8
                            shadow-2xl">


                            <!-- HEADER -->

                            <div class="
                                flex
                                justify-between
                                items-center
                                mb-8">

                                <div>

                                    <h2 class="
                                        text-white
                                        text-2xl
                                        font-bold">

                                        Security Engine

                                    </h2>

                                    <p class="text-gray-500 mt-2">

                                        Real-time Protection

                                    </p>

                                </div>


                                <div class="
                                    w-16
                                    h-16
                                    rounded-2xl
                                    bg-gradient-to-br
                                    from-cyan-500
                                    to-blue-600
                                    flex
                                    items-center
                                    justify-center
                                    text-3xl">

                                    🔒

                                </div>

                            </div>



                            <!-- PROCESS -->

                            <div class="space-y-5">


                                <div class="
                                    flex
                                    items-center
                                    justify-between
                                    bg-slate-900/60
                                    rounded-2xl
                                    p-5">

                                    <span class="text-white">

                                        📄 Document Uploaded

                                    </span>

                                    <span class="text-green-400">

                                        ✔

                                    </span>

                                </div>



                                <div class="
                                    flex
                                    items-center
                                    justify-between
                                    bg-slate-900/60
                                    rounded-2xl
                                    p-5">

                                    <span class="text-white">

                                        🔐 AES Encryption

                                    </span>

                                    <span class="text-cyan-400">

                                        ACTIVE

                                    </span>

                                </div>



                                <div class="
                                    flex
                                    items-center
                                    justify-between
                                    bg-slate-900/60
                                    rounded-2xl
                                    p-5">

                                    <span class="text-white">

                                        🔑 RSA Key Protection

                                    </span>

                                    <span class="text-purple-400">

                                        ACTIVE

                                    </span>

                                </div>



                                <div class="
                                    flex
                                    items-center
                                    justify-between
                                    bg-slate-900/60
                                    rounded-2xl
                                    p-5">

                                    <span class="text-white">

                                        🖼 Hidden Inside Image

                                    </span>

                                    <span class="text-pink-400">

                                        SUCCESS

                                    </span>

                                </div>

                            </div>



                            <!-- STATUS -->

                            <div class="
                                mt-8
                                bg-gradient-to-r
                                from-green-500/10
                                to-cyan-500/10
                                border
                                border-green-400/20
                                rounded-2xl
                                p-5">

                                <div class="
                                    flex
                                    justify-between
                                    items-center">

                                    <span class="text-green-300">

                                        Security Status

                                    </span>

                                    <span class="text-white font-bold">

                                        PROTECTED

                                    </span>

                                </div>

                                <div class="
                                    mt-4
                                    bg-slate-800
                                    rounded-full
                                    h-3">

                                    <div class="
                                        h-3
                                        rounded-full
                                        bg-gradient-to-r
                                        from-green-400
                                        via-cyan-400
                                        to-blue-500"

                                         style="width:98%">

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

<!-- ========================================== -->
<!-- WORKFLOW -->
<!-- ========================================== -->

<!-- ================================================= -->
<!-- ENCRYPTION PIPELINE TIMELINE -->
<!-- ================================================= -->

<section id="workflow" class="py-28">

<div class="max-w-5xl mx-auto px-6">

    <div class="text-center mb-20">

        <span class="inline-flex px-5 py-2 rounded-full
        bg-cyan-500/10
        border border-cyan-400/20
        text-cyan-300">

            Encryption Pipeline

        </span>

        <h2 class="text-5xl font-black text-white mt-8">

            How CryptoStegoDocs Works

        </h2>

        <p class="text-gray-400 text-xl mt-6 max-w-3xl mx-auto">

            Every uploaded document passes through five
            security stages before it can be securely
            recovered.

        </p>

    </div>



    <div class="relative">

        <!-- Vertical Line -->

        <div class="absolute left-1/2
                    top-0
                    bottom-0
                    w-1
                    -translate-x-1/2
                    bg-gradient-to-b
                    from-cyan-400
                    via-purple-500
                    to-pink-500
                    rounded-full
                    opacity-70">

        </div>




        <!-- STEP 1 -->

        <div class="relative flex items-center mb-20">

            <div class="w-1/2 pr-12 text-right">

                <div class="bg-white/5 border border-cyan-400/20 rounded-3xl p-8 hover:scale-105 transition">

                    <span class="text-cyan-300 text-sm">

                        STEP 01

                    </span>

                    <h3 class="text-3xl text-white font-bold mt-3">

                        📄 Upload File

                    </h3>

                    <p class="text-gray-400 mt-4">

                        User uploads a confidential
                        document together with
                        a PNG cover image.

                    </p>

                </div>

            </div>

            <div class="z-10 w-14 h-14 rounded-full
                        bg-cyan-500
                        flex items-center justify-center
                        text-2xl
                        shadow-2xl">

                📄

            </div>

            <div class="w-1/2"></div>

        </div>




        <!-- STEP 2 -->

        <div class="relative flex items-center mb-20">

            <div class="w-1/2"></div>

            <div class="z-10 w-14 h-14 rounded-full
                        bg-blue-500
                        flex items-center justify-center
                        text-2xl
                        shadow-2xl">

                🔐

            </div>

            <div class="w-1/2 pl-12">

                <div class="bg-white/5 border border-blue-400/20 rounded-3xl p-8 hover:scale-105 transition">

                    <span class="text-blue-300 text-sm">

                        STEP 02

                    </span>

                    <h3 class="text-3xl text-white font-bold mt-3">

                        AES Encryption

                    </h3>

                    <p class="text-gray-400 mt-4">

                        The uploaded document
                        is encrypted using
                        AES-256.

                    </p>

                </div>

            </div>

        </div>




        <!-- STEP 3 -->

        <div class="relative flex items-center mb-20">

            <div class="w-1/2 pr-12 text-right">

                <div class="bg-white/5 border border-purple-400/20 rounded-3xl p-8 hover:scale-105 transition">

                    <span class="text-purple-300 text-sm">

                        STEP 03

                    </span>

                    <h3 class="text-3xl text-white font-bold mt-3">

                        🔑 RSA Protection

                    </h3>

                    <p class="text-gray-400 mt-4">

                        AES secret key
                        encrypted using
                        RSA-2048.

                    </p>

                </div>

            </div>

            <div class="z-10 w-14 h-14 rounded-full
                        bg-purple-500
                        flex items-center justify-center
                        text-2xl
                        shadow-2xl">

                🔑

            </div>

            <div class="w-1/2"></div>

        </div>




        <!-- STEP 4 -->

        <div class="relative flex items-center mb-20">

            <div class="w-1/2"></div>

            <div class="z-10 w-14 h-14 rounded-full
                        bg-pink-500
                        flex items-center justify-center
                        text-2xl
                        shadow-2xl">

                🖼

            </div>

            <div class="w-1/2 pl-12">

                <div class="bg-white/5 border border-pink-400/20 rounded-3xl p-8 hover:scale-105 transition">

                    <span class="text-pink-300 text-sm">

                        STEP 04

                    </span>

                    <h3 class="text-3xl text-white font-bold mt-3">

                        LSB Steganography

                    </h3>

                    <p class="text-gray-400 mt-4">

                        RSA encrypted AES key
                        hidden inside PNG image
                        using LSB.

                    </p>

                </div>

            </div>

        </div>




        <!-- STEP 5 -->

        <div class="relative flex items-center">

            <div class="w-1/2 pr-12 text-right">

                <div class="bg-white/5 border border-green-400/20 rounded-3xl p-8 hover:scale-105 transition">

                    <span class="text-green-300 text-sm">

                        STEP 05

                    </span>

                    <h3 class="text-3xl text-white font-bold mt-3">

                        🔓 Recovery

                    </h3>

                    <p class="text-gray-400 mt-4">

                        Recover hidden key
                        and decrypt document
                        securely.

                    </p>

                </div>

            </div>

            <div class="z-10 w-14 h-14 rounded-full
                        bg-green-500
                        flex items-center justify-center
                        text-2xl
                        shadow-2xl">

                🔓

            </div>

            <div class="w-1/2"></div>

        </div>

    </div>

</div>

</section>

<!-- ========================================== -->
<!-- SECURITY FEATURES -->
<!-- ========================================== -->

<section id="security" class="py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center">

            <span class="inline-flex px-5 py-2 rounded-full bg-purple-500/10 border border-purple-400/20 text-purple-300">

                Security Technologies

            </span>

            <h2 class="text-5xl font-bold text-white mt-8">

                Multi-Layer Security Architecture

            </h2>

            <p class="text-gray-400 mt-6 max-w-3xl mx-auto text-lg">

                CryptoStegoDocs combines three different security mechanisms
                into one integrated platform to ensure confidentiality,
                integrity, and secure key management.

            </p>

        </div>



        <div class="grid lg:grid-cols-3 gap-8 mt-20">


            <!-- AES -->

            <div class="bg-white/5 border border-cyan-400/20 rounded-3xl p-10 hover:scale-105 transition duration-300">

                <div class="text-6xl mb-6">

                    🔐

                </div>

                <h3 class="text-white text-3xl font-bold">

                    AES-256

                </h3>

                <p class="text-cyan-300 mt-2">

                    Symmetric Encryption

                </p>

                <p class="text-gray-400 mt-6 leading-8">

                    Every uploaded document is encrypted using the AES-256
                    algorithm before being stored. This ensures that
                    document contents remain confidential.

                </p>

            </div>



            <!-- RSA -->

            <div class="bg-white/5 border border-purple-400/20 rounded-3xl p-10 hover:scale-105 transition duration-300">

                <div class="text-6xl mb-6">

                    🔑

                </div>

                <h3 class="text-white text-3xl font-bold">

                    RSA-2048

                </h3>

                <p class="text-purple-300 mt-2">

                    Asymmetric Encryption

                </p>

                <p class="text-gray-400 mt-6 leading-8">

                    The AES secret key is protected using RSA encryption,
                    making it difficult for unauthorized users to recover
                    the original encryption key.

                </p>

            </div>



            <!-- LSB -->

            <div class="bg-white/5 border border-pink-400/20 rounded-3xl p-10 hover:scale-105 transition duration-300">

                <div class="text-6xl mb-6">

                    🖼

                </div>

                <h3 class="text-white text-3xl font-bold">

                    LSB Steganography

                </h3>

                <p class="text-pink-300 mt-2">

                    Hidden Key Protection

                </p>

                <p class="text-gray-400 mt-6 leading-8">

                    The encrypted AES key is hidden inside a PNG image
                    using the Least Significant Bit method, adding another
                    security layer.

                </p>

            </div>

        </div>

    </div>

</section>



<!-- ========================================== -->
<!-- SECURITY STATISTICS -->
<!-- ========================================== -->

<section class="pb-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid md:grid-cols-4 gap-8">


            <div class="bg-gradient-to-r from-cyan-500/20 to-blue-500/20 border border-cyan-400/20 rounded-3xl p-8 text-center">

                <h2 class="text-5xl font-black text-cyan-300">

                    256

                </h2>

                <p class="text-white mt-4">

                    AES Key Length

                </p>

            </div>



            <div class="bg-gradient-to-r from-purple-500/20 to-pink-500/20 border border-purple-400/20 rounded-3xl p-8 text-center">

                <h2 class="text-5xl font-black text-purple-300">

                    2048

                </h2>

                <p class="text-white mt-4">

                    RSA Bits

                </p>

            </div>



            <div class="bg-gradient-to-r from-green-500/20 to-emerald-500/20 border border-green-400/20 rounded-3xl p-8 text-center">

                <h2 class="text-5xl font-black text-green-300">

                    100%

                </h2>

                <p class="text-white mt-4">

                    File Integrity

                </p>

            </div>



            <div class="bg-gradient-to-r from-orange-500/20 to-red-500/20 border border-orange-400/20 rounded-3xl p-8 text-center">

                <h2 class="text-5xl font-black text-orange-300">

                    3

                </h2>

                <p class="text-white mt-4">

                    Security Layers

                </p>

            </div>

        </div>

    </div>

</section>
<!-- ========================================== -->
<!-- ABOUT -->
<!-- ========================================== -->

<section id="about" class="py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-20 items-center">

            <!-- LEFT -->

            <div>

                <span class="inline-flex px-5 py-2 rounded-full bg-blue-500/10 border border-blue-400/20 text-blue-300">

                    About CryptoStegoDocs

                </span>

                <h2 class="text-5xl font-bold text-white mt-8">

                    Secure Document Storage Built With Hybrid Cryptography

                </h2>

                <p class="text-gray-400 leading-8 mt-8">

                    CryptoStegoDocs is a web-based secure document platform
                    developed to protect confidential digital documents
                    using Hybrid Cryptography and Image Steganography.

                </p>

                <p class="text-gray-400 leading-8 mt-6">

                    The system combines AES-256 for document encryption,
                    RSA-2048 for secure key protection,
                    and LSB Steganography to hide cryptographic keys
                    inside PNG images.

                </p>


                <div class="grid grid-cols-2 gap-6 mt-12">

                    <div class="bg-white/5 rounded-2xl border border-white/10 p-6">

                        <h3 class="text-4xl font-black text-cyan-300">

                            3

                        </h3>

                        <p class="text-gray-300 mt-2">

                            Security Layers

                        </p>

                    </div>

                    <div class="bg-white/5 rounded-2xl border border-white/10 p-6">

                        <h3 class="text-4xl font-black text-purple-300">

                            AES

                        </h3>

                        <p class="text-gray-300 mt-2">

                            Military Encryption

                        </p>

                    </div>

                    <div class="bg-white/5 rounded-2xl border border-white/10 p-6">

                        <h3 class="text-4xl font-black text-green-300">

                            RSA

                        </h3>

                        <p class="text-gray-300 mt-2">

                            Secure Key Exchange

                        </p>

                    </div>

                    <div class="bg-white/5 rounded-2xl border border-white/10 p-6">

                        <h3 class="text-4xl font-black text-pink-300">

                            LSB

                        </h3>

                        <p class="text-gray-300 mt-2">

                            Hidden Key Storage

                        </p>

                    </div>

                </div>

            </div>



            <!-- RIGHT -->

            <div>

                <div class="bg-white/5 border border-white/10 rounded-[40px] p-10 backdrop-blur-xl">

                    <h2 class="text-3xl font-bold text-white mb-10">

                        Security Overview

                    </h2>

                    <div class="space-y-7">

                        <div>

                            <div class="flex justify-between text-white mb-2">

                                <span>AES Encryption</span>

                                <span>100%</span>

                            </div>

                            <div class="bg-slate-800 rounded-full h-3">

                                <div class="h-3 rounded-full bg-cyan-400 w-full"></div>

                            </div>

                        </div>


                        <div>

                            <div class="flex justify-between text-white mb-2">

                                <span>RSA Protection</span>

                                <span>100%</span>

                            </div>

                            <div class="bg-slate-800 rounded-full h-3">

                                <div class="h-3 rounded-full bg-purple-400 w-full"></div>

                            </div>

                        </div>


                        <div>

                            <div class="flex justify-between text-white mb-2">

                                <span>LSB Steganography</span>

                                <span>100%</span>

                            </div>

                            <div class="bg-slate-800 rounded-full h-3">

                                <div class="h-3 rounded-full bg-pink-400 w-full"></div>

                            </div>

                        </div>


                        <div>

                            <div class="flex justify-between text-white mb-2">

                                <span>Recovery Accuracy</span>

                                <span>100%</span>

                            </div>

                            <div class="bg-slate-800 rounded-full h-3">

                                <div class="h-3 rounded-full bg-green-400 w-full"></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ========================================== -->
<!-- CALL TO ACTION -->
<!-- ========================================== -->

<section class="pb-28">

    <div class="max-w-6xl mx-auto px-6">

        <div class="bg-gradient-to-r from-cyan-600/20 via-blue-600/20 to-purple-600/20 border border-cyan-400/20 rounded-[40px] p-16 text-center">

            <h2 class="text-5xl font-black text-white">

                Ready To Secure Your Documents?

            </h2>

            <p class="text-gray-300 text-xl mt-8 max-w-3xl mx-auto">

                Start protecting confidential documents using AES-256,
                RSA-2048 and LSB Steganography inside one secure platform.

            </p>

            <div class="flex flex-wrap justify-center gap-6 mt-12">

                @auth

                    <a href="{{ route('dashboard') }}"
                       class="px-10 py-5 rounded-2xl bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold hover:scale-105 transition">

                        🚀 Open Dashboard

                    </a>

                @else

                    <a href="{{ route('register') }}"
                       class="px-10 py-5 rounded-2xl bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-bold hover:scale-105 transition">

                        Create Account

                    </a>

                    <a href="{{ route('login') }}"
                       class="px-10 py-5 rounded-2xl border border-white/10 text-white hover:bg-white/10 transition">

                        Login

                    </a>

                @endauth

            </div>

        </div>

    </div>

</section>



<!-- ========================================== -->
<!-- FOOTER -->
<!-- ========================================== -->

<footer class="border-t border-white/10 py-10">

    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center">

        <div>

            <h2 class="text-white text-2xl font-bold">

                🔐 CryptoStegoDocs

            </h2>

            <p class="text-gray-500 mt-2">

                Hybrid Cryptography & Image Steganography Platform

            </p>

        </div>

        <div class="text-gray-500 mt-6 md:mt-0 text-center md:text-right">

            © {{ date('Y') }} CryptoStegoDocs

            <br>

            Developed with Laravel 12 · AES · RSA · LSB

        </div>

    </div>

</footer>

</main>

</body>

</html>
