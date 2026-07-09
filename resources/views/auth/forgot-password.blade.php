<x-guest-layout>

    <!-- TITLE -->

    <div class="text-center mb-8">

        <x-application-logo
            class="mx-auto w-16 h-16 mb-5"/>

        <h2 class="text-3xl font-bold text-white">

            Forgot Password

        </h2>

        <p class="text-gray-400 mt-3 leading-7">

            Enter your email address and we'll send you
            a secure password reset link.

        </p>

    </div>



    <!-- STATUS -->

    <x-auth-session-status
        class="mb-6"
        :status="session('status')" />



    <!-- VALIDATION -->

    @if($errors->any())

        <div class="
            bg-red-500/20
            border
            border-red-500/30
            rounded-xl
            p-4
            mb-6">

            @foreach($errors->all() as $error)

                <p class="text-red-300 text-sm">

                    • {{ $error }}

                </p>

            @endforeach

        </div>

    @endif



    <form
        id="resetForm"
        method="POST"
        action="{{ route('password.email') }}">

        @csrf



        <!-- EMAIL -->

        <label class="text-gray-300 font-medium">

            Email Address

        </label>

        <div class="relative mt-2 mb-8">

            <span class="
                absolute
                left-4
                top-1/2
                -translate-y-1/2
                text-cyan-300">

                ✉️

            </span>

            <input

                id="email"

                type="email"

                name="email"

                value="{{ old('email') }}"

                required

                autofocus

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



        <!-- BUTTON -->

        <button

            id="resetButton"

            type="submit"

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

            <span id="resetText">

                Send Reset Link

            </span>

            <svg
                id="resetSpinner"
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



        <!-- LOGIN -->

        <div class="text-center mt-8">

            <a

                href="{{ route('login') }}"

                class="text-cyan-300
                       hover:text-white
                       transition">

                ← Back to Login

            </a>

        </div>

    </form>



<script>

document
.getElementById("resetForm")
.addEventListener("submit",function(){

    document
    .getElementById("resetButton")
    .disabled=true;

    document
    .getElementById("resetSpinner")
    .classList.remove("hidden");

    document
    .getElementById("resetText")
    .innerHTML="Sending Link...";

});

</script>

</x-guest-layout>
