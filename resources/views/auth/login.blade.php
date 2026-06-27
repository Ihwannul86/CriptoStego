<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login | CryptoStegoDocs</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="min-h-screen overflow-hidden text-white">

    <!-- BACKGROUND -->

    <div class="fixed inset-0 -z-10">

        <div class="absolute inset-0
                    bg-gradient-to-br
                    from-slate-950
                    via-indigo-950
                    to-slate-900"></div>

        <div class="absolute top-10 left-20
                    w-96 h-96
                    bg-cyan-500/10
                    rounded-full blur-3xl animate-pulse"></div>

        <div class="absolute bottom-20 right-20
                    w-96 h-96
                    bg-purple-500/10
                    rounded-full blur-3xl animate-pulse"></div>

    </div>



    <div class="min-h-screen grid md:grid-cols-2">

        <!-- LEFT PANEL -->

        <div class="hidden md:flex flex-col justify-center px-20">

            <h1 class="text-6xl font-bold">

                🔐 CryptoStegoDocs

            </h1>

            <p class="text-cyan-300 mt-6 text-xl">

                Secure Document Protection Platform

            </p>

            <p class="text-gray-400 mt-4 leading-8">

                Military-grade encryption system combining
                AES-256 encryption, RSA-2048 key security,
                and LSB steganography architecture.

            </p>

            <div class="flex gap-3 mt-8">

                <span class="bg-cyan-500/20 px-4 py-2 rounded-full">
                    AES
                </span>

                <span class="bg-purple-500/20 px-4 py-2 rounded-full">
                    RSA
                </span>

                <span class="bg-green-500/20 px-4 py-2 rounded-full">
                    LSB
                </span>

            </div>

        </div>



        <!-- RIGHT PANEL -->

        <div class="flex items-center justify-center px-8">

            <div class="w-full max-w-md
                        bg-white/5
                        backdrop-blur-xl
                        border border-white/10
                        rounded-3xl
                        p-10
                        shadow-2xl">

                <h2 class="text-3xl font-bold text-white text-center">

                    Welcome Back

                </h2>

                <p class="text-gray-400 text-center mt-2 mb-8">

                    Sign in to access secure vault

                </p>


                <x-auth-session-status class="mb-4"
                                       :status="session('status')" />


                <form method="POST"
                      action="{{ route('login') }}">

                    @csrf


                    <!-- EMAIL -->

                    <label class="text-gray-300">

                        Email Address

                    </label>

                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           required

                           class="
                           mt-2 mb-5
                           w-full
                           rounded-xl
                           bg-slate-800
                           border border-white/10
                           text-white
                           p-3">


                    <!-- PASSWORD -->

                    <label class="text-gray-300">

                        Password

                    </label>

                    <input type="password"
                           name="password"
                           required

                           class="
                           mt-2 mb-5
                           w-full
                           rounded-xl
                           bg-slate-800
                           border border-white/10
                           text-white
                           p-3">


                    <!-- REMEMBER -->

                    <div class="mb-6">

                        <label class="text-sm text-gray-400">

                            <input type="checkbox"
                                   name="remember"
                                   class="mr-2">

                            Remember me

                        </label>

                    </div>


                    <!-- BUTTON -->

                    <button class="
                        w-full
                        py-4
                        rounded-2xl
                        bg-gradient-to-r
                        from-cyan-500
                        to-blue-600
                        font-bold
                        hover:scale-[1.02]
                        transition">

                        Login Securely

                    </button>


                    <!-- REGISTER -->

                    <div class="text-center mt-6">

                        <a href="{{ route('register') }}"
                           class="text-cyan-300 text-sm">

                            Create new account

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</body>
</html>
