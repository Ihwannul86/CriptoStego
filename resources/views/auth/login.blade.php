<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token"
          content="{{ csrf_token() }}">

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

        <div class="absolute
                    top-10
                    left-20
                    w-[420px]
                    h-[420px]
                    bg-cyan-500/10
                    rounded-full
                    blur-[120px]
                    animate-pulse"></div>

        <div class="absolute
                    bottom-10
                    right-20
                    w-[420px]
                    h-[420px]
                    bg-purple-500/10
                    rounded-full
                    blur-[120px]
                    animate-pulse"></div>

    </div>



    <div class="min-h-screen grid md:grid-cols-2">

        <!-- ========================= -->
        <!-- LEFT PANEL -->
        <!-- ========================= -->

        <div class="hidden md:flex flex-col justify-center px-20">

            <a href="{{ url('/') }}"
               class="inline-flex items-center
                      text-cyan-300
                      hover:text-white
                      transition
                      mb-10">

                ← Back to Home

            </a>


            <div class="flex items-center gap-5">

                <x-application-logo
                    class="w-20 h-20"/>

                <div>

                    <h1 class="text-6xl font-black">

                        CryptoStegoDocs

                    </h1>

                    <p class="text-cyan-300 text-xl mt-2">

                        Secure Document Protection Platform

                    </p>

                </div>

            </div>



            <p class="text-gray-400
                      mt-8
                      text-lg
                      leading-9
                      max-w-xl">

                Military-grade encryption platform that combines

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



            <!-- FEATURE BADGES -->

            <div class="flex flex-wrap gap-4 mt-10">

                <div class="bg-cyan-500/20
                            border border-cyan-400/20
                            px-5 py-3
                            rounded-full">

                    🔐 AES-256

                </div>

                <div class="bg-purple-500/20
                            border border-purple-400/20
                            px-5 py-3
                            rounded-full">

                    🔑 RSA-2048

                </div>

                <div class="bg-green-500/20
                            border border-green-400/20
                            px-5 py-3
                            rounded-full">

                    🖼 LSB Secure

                </div>

            </div>



            <!-- SECURITY CARD -->

            <div class="mt-12
                        w-full
                        max-w-xl
                        rounded-3xl
                        bg-white/5
                        backdrop-blur-xl
                        border border-white/10
                        p-6">

                <div class="flex justify-between items-center">

                    <div>

                        <h3 class="text-xl font-semibold">

                            Security Status

                        </h3>

                        <p class="text-gray-400 mt-1">

                            Enterprise-grade protection enabled

                        </p>

                    </div>

                    <span class="text-green-400 font-bold">

                        ACTIVE

                    </span>

                </div>

                <div class="mt-5
                            w-full
                            h-3
                            rounded-full
                            bg-slate-800">

                    <div class="h-3
                                rounded-full
                                bg-gradient-to-r
                                from-green-400
                                via-cyan-400
                                to-blue-500
                                w-[96%]">

                    </div>

                </div>

            </div>

        </div>



        <!-- ========================= -->
        <!-- LOGIN CARD -->
        <!-- ========================= -->

        <div class="flex items-center justify-center px-8">

            <div class="w-full
                        max-w-md
                        bg-white/5
                        backdrop-blur-xl
                        border
                        border-white/10
                        rounded-3xl
                        p-10
                        shadow-2xl">

                <div class="text-center">

                    <x-application-logo
                        class="mx-auto w-16 h-16 mb-5"/>

                    <h2 class="text-3xl font-bold">

                        Welcome Back

                    </h2>

                    <p class="text-gray-400 mt-2 mb-8">

                        Sign in to access your secure vault

                    </p>

                </div>


                <x-auth-session-status
                    class="mb-5"
                    :status="session('status')" />


                @if($errors->any())

                    <div class="mb-5
                                rounded-xl
                                bg-red-500/20
                                border
                                border-red-500/30
                                p-4">

                        @foreach($errors->all() as $error)

                            <p class="text-red-300 text-sm">

                                • {{ $error }}

                            </p>

                        @endforeach

                    </div>

                @endif


                <form id="loginForm"
                      method="POST"
                      action="{{ route('login') }}">

                    @csrf
                                        <!-- EMAIL -->

                    <label class="text-gray-300 font-medium">

                        Email Address

                    </label>

                    <div class="relative mt-2 mb-5">

                        <span class="absolute
                                     left-4
                                     top-1/2
                                     -translate-y-1/2
                                     text-cyan-300">

                            ✉️

                        </span>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="username"

                            class="
                            w-full
                            pl-12
                            pr-4
                            py-3
                            rounded-xl
                            bg-slate-800
                            border
                            border-white/10
                            text-white
                            placeholder-gray-500
                            focus:border-cyan-400
                            focus:ring-2
                            focus:ring-cyan-500/20
                            outline-none
                            transition"

                            placeholder="example@email.com">

                    </div>



                    <!-- PASSWORD -->

                    <label class="text-gray-300 font-medium">

                        Password

                    </label>

                    <div class="relative mt-2 mb-5">

                        <span class="absolute
                                     left-4
                                     top-1/2
                                     -translate-y-1/2
                                     text-purple-300">

                            🔒

                        </span>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"

                            class="
                            w-full
                            pl-12
                            pr-14
                            py-3
                            rounded-xl
                            bg-slate-800
                            border
                            border-white/10
                            text-white
                            placeholder-gray-500
                            focus:border-purple-400
                            focus:ring-2
                            focus:ring-purple-500/20
                            outline-none
                            transition"

                            placeholder="Enter password">

                        <button
                            type="button"
                            id="togglePassword"

                            class="absolute
                                   right-4
                                   top-1/2
                                   -translate-y-1/2
                                   text-gray-400
                                   hover:text-white
                                   transition">

                            👁

                        </button>

                    </div>



                    <!-- REMEMBER + FORGOT -->

                    <div class="flex
                                justify-between
                                items-center
                                mb-8">

                        <label class="flex
                                      items-center
                                      gap-2
                                      text-sm
                                      text-gray-400">

                            <input
                                type="checkbox"
                                name="remember"

                                class="rounded
                                       border-white/20
                                       bg-slate-800">

                            Remember me

                        </label>

                        @if(Route::has('password.request'))

                            <a href="{{ route('password.request') }}"
                               class="text-cyan-300
                                      hover:text-white
                                      text-sm
                                      transition">

                                Forgot Password?

                            </a>

                        @endif

                    </div>



                    <!-- LOGIN BUTTON -->

                    <button

                        id="loginButton"

                        class="
                        w-full
                        py-4
                        rounded-2xl
                        bg-gradient-to-r
                        from-cyan-500
                        to-blue-600
                        font-bold
                        hover:scale-[1.02]
                        transition
                        flex
                        justify-center
                        items-center
                        gap-3">

                        <span id="loginText">

                            🔐 Login Securely

                        </span>

                        <svg
                            id="loginSpinner"
                            class="hidden animate-spin h-5 w-5 text-white"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24">

                            <circle
                                class="opacity-25"
                                cx="12"
                                cy="12"
                                r="10"
                                stroke="currentColor"
                                stroke-width="4"></circle>

                            <path
                                class="opacity-75"
                                fill="currentColor"
                                d="M4 12a8 8 0 018-8v8H4z"></path>

                        </svg>

                    </button>



                    <!-- REGISTER -->

                    <div class="text-center mt-8">

                        <p class="text-gray-400 text-sm">

                            Don't have an account?

                        </p>

                        <a href="{{ route('register') }}"

                           class="inline-block
                                  mt-3
                                  text-cyan-300
                                  hover:text-white
                                  font-medium
                                  transition">

                            Create New Account →

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>



<script>

const togglePassword =
document.getElementById("togglePassword");

const password =
document.getElementById("password");

togglePassword.addEventListener("click", function(){

    if(password.type==="password"){

        password.type="text";

        this.innerHTML="🙈";

    }

    else{

        password.type="password";

        this.innerHTML="👁";

    }

});



document
.getElementById("loginForm")
.addEventListener("submit",function(){

    let btn =
    document.getElementById("loginButton");

    let spinner =
    document.getElementById("loginSpinner");

    let text =
    document.getElementById("loginText");

    btn.disabled=true;

    btn.classList.add("opacity-80");

    spinner.classList.remove("hidden");

    text.innerHTML="Authenticating...";

});

</script>

</body>

</html>
