<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>Register | CryptoStegoDocs</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body class="min-h-screen overflow-hidden text-white">

<!-- BACKGROUND -->

<div class="fixed inset-0 -z-10">

    <div class="absolute inset-0
                bg-gradient-to-br
                from-slate-950
                via-indigo-950
                to-slate-900">

    </div>

    <div class="absolute
                top-20
                left-20
                w-[420px]
                h-[420px]
                bg-cyan-500/10
                rounded-full
                blur-[120px]
                animate-pulse">

    </div>

    <div class="absolute
                bottom-20
                right-20
                w-[420px]
                h-[420px]
                bg-purple-500/10
                rounded-full
                blur-[120px]
                animate-pulse">

    </div>

</div>



<div class="min-h-screen flex items-center justify-center px-6">

<div class="w-full
            max-w-lg
            bg-white/5
            backdrop-blur-xl
            border border-white/10
            rounded-3xl
            p-10
            shadow-2xl">

<a href="{{ url('/') }}"
class="inline-flex
items-center
text-cyan-300
hover:text-white
transition
mb-6">

← Back to Home

</a>


<div class="text-center">

<x-application-logo
class="mx-auto w-16 h-16 mb-5"/>

<h2 class="text-3xl font-bold">

Create Account

</h2>

<p class="text-gray-400 mt-2 mb-8">

Create your secure CryptoStegoDocs account

</p>

</div>


@if($errors->any())

<div class="mb-6
bg-red-500/20
border
border-red-500/30
rounded-xl
p-4">

@foreach($errors->all() as $error)

<p class="text-red-300 text-sm">

• {{ $error }}

</p>

@endforeach

</div>

@endif


<form
id="registerForm"
method="POST"
action="{{ route('register') }}">

@csrf
                    <!-- NAME -->

                    <label class="text-gray-300 font-medium">

                        Full Name

                    </label>

                    <div class="relative mt-2 mb-5">

                        <span class="absolute
                                     left-4
                                     top-1/2
                                     -translate-y-1/2
                                     text-cyan-300">

                            👤

                        </span>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            autofocus
                            autocomplete="name"
                            placeholder="Enter your full name"

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
                            transition">

                    </div>



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
                            autocomplete="username"
                            placeholder="example@email.com"

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
                            transition">

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
                            autocomplete="new-password"
                            placeholder="Create password"

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
                            transition">

                        <button
                            type="button"
                            id="togglePassword"

                            class="
                            absolute
                            right-4
                            top-1/2
                            -translate-y-1/2
                            text-gray-400
                            hover:text-white">

                            👁

                        </button>

                    </div>



                    <!-- CONFIRM PASSWORD -->

                    <label class="text-gray-300 font-medium">

                        Confirm Password

                    </label>

                    <div class="relative mt-2 mb-8">

                        <span class="absolute
                                     left-4
                                     top-1/2
                                     -translate-y-1/2
                                     text-pink-300">

                            🔐

                        </span>

                        <input
                            id="confirmPassword"
                            type="password"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            placeholder="Confirm password"

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
                            focus:border-pink-400
                            focus:ring-2
                            focus:ring-pink-500/20
                            outline-none
                            transition">

                        <button
                            type="button"
                            id="toggleConfirm"

                            class="
                            absolute
                            right-4
                            top-1/2
                            -translate-y-1/2
                            text-gray-400
                            hover:text-white">

                            👁

                        </button>

                    </div>



                    <!-- BUTTON -->

                    <button

                        id="registerButton"

                        type="submit"

                        class="
                        w-full
                        py-4
                        rounded-2xl
                        bg-gradient-to-r
                        from-purple-500
                        to-pink-500
                        font-bold
                        hover:scale-[1.02]
                        transition
                        flex
                        justify-center
                        items-center
                        gap-3">

                        <span id="registerText">

                            Create Secure Account

                        </span>

                        <svg
                            id="registerSpinner"
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
                                stroke-width="4"/>

                            <path
                                class="opacity-75"
                                fill="currentColor"
                                d="M4 12a8 8 0 018-8v8H4z"/>

                        </svg>

                    </button>



                    <div class="text-center mt-8">

                        <p class="text-gray-400 text-sm">

                            Already have an account?

                        </p>

                        <a
                            href="{{ route('login') }}"
                            class="inline-block
                                   mt-3
                                   text-purple-300
                                   hover:text-white
                                   transition">

                            Login Here →

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

togglePassword.addEventListener("click",function(){

    if(password.type==="password"){

        password.type="text";

        this.innerHTML="🙈";

    }else{

        password.type="password";

        this.innerHTML="👁";

    }

});


const toggleConfirm =
document.getElementById("toggleConfirm");

const confirmPassword =
document.getElementById("confirmPassword");

toggleConfirm.addEventListener("click",function(){

    if(confirmPassword.type==="password"){

        confirmPassword.type="text";

        this.innerHTML="🙈";

    }else{

        confirmPassword.type="password";

        this.innerHTML="👁";

    }

});


document
.getElementById("registerForm")
.addEventListener("submit",function(){

    document
    .getElementById("registerButton")
    .disabled=true;

    document
    .getElementById("registerSpinner")
    .classList.remove("hidden");

    document
    .getElementById("registerText")
    .innerHTML="Creating Account...";

});

</script>

</body>

</html>
