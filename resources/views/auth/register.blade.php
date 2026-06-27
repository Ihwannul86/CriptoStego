<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Register | CryptoStegoDocs</title>

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

        <div class="absolute top-20 left-20
                    w-96 h-96
                    bg-pink-500/10
                    rounded-full blur-3xl animate-pulse"></div>

        <div class="absolute bottom-20 right-20
                    w-96 h-96
                    bg-purple-500/10
                    rounded-full blur-3xl animate-pulse"></div>

    </div>



    <div class="min-h-screen flex items-center justify-center px-6">

        <div class="w-full max-w-lg
                    bg-white/5
                    backdrop-blur-xl
                    border border-white/10
                    rounded-3xl
                    p-10
                    shadow-2xl">

            <h2 class="text-3xl font-bold text-center">

                Create Account

            </h2>

            <p class="text-gray-400 text-center mt-2 mb-8">

                Register to access secure document platform

            </p>


            <form method="POST"
                  action="{{ route('register') }}">

                @csrf


                <!-- NAME -->

                <label>Name</label>

                <input type="text"
                       name="name"
                       value="{{ old('name') }}"
                       required

                       class="
                       mt-2 mb-4
                       w-full
                       p-3
                       rounded-xl
                       bg-slate-800
                       border border-white/10">


                <!-- EMAIL -->

                <label>Email</label>

                <input type="email"
                       name="email"
                       value="{{ old('email') }}"
                       required

                       class="
                       mt-2 mb-4
                       w-full
                       p-3
                       rounded-xl
                       bg-slate-800
                       border border-white/10">


                <!-- PASSWORD -->

                <label>Password</label>

                <input type="password"
                       name="password"
                       required

                       class="
                       mt-2 mb-4
                       w-full
                       p-3
                       rounded-xl
                       bg-slate-800
                       border border-white/10">


                <!-- CONFIRM -->

                <label>Confirm Password</label>

                <input type="password"
                       name="password_confirmation"
                       required

                       class="
                       mt-2 mb-6
                       w-full
                       p-3
                       rounded-xl
                       bg-slate-800
                       border border-white/10">


                <!-- BUTTON -->

                <button class="
                    w-full
                    py-4
                    rounded-2xl
                    bg-gradient-to-r
                    from-purple-500
                    to-pink-500
                    font-bold
                    hover:scale-[1.02]
                    transition">

                    Create Secure Account

                </button>


                <div class="text-center mt-6">

                    <a href="{{ route('login') }}"
                       class="text-purple-300 text-sm">

                        Already registered?

                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>
