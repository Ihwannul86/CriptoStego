<x-guest-layout>

    <!-- LOGO -->

    <div class="text-center mb-8">

        <x-application-logo
            class="mx-auto w-16 h-16 mb-5"/>

        <h2 class="text-3xl font-bold text-white">

            Confirm Password

        </h2>

        <p class="text-gray-400 mt-3 leading-7">

            This is a secure area of CryptoStegoDocs.
            Please confirm your password before continuing.

        </p>

    </div>



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



    <!-- INFO -->

    <div class="
        rounded-2xl
        bg-amber-500/10
        border
        border-amber-500/20
        p-5
        mb-8">

        <div class="flex gap-3">

            <span class="text-3xl">

                🛡️

            </span>

            <div>

                <h3 class="text-white font-semibold">

                    Security Confirmation

                </h3>

                <p class="text-gray-400 text-sm mt-2 leading-6">

                    To protect your account and encrypted documents,
                    please enter your current password.

                </p>

            </div>

        </div>

    </div>



    <form
        id="confirmForm"
        method="POST"
        action="{{ route('password.confirm') }}">

        @csrf



        <!-- PASSWORD -->

        <label class="text-gray-300 font-medium">

            Current Password

        </label>

        <div class="relative mt-2 mb-8">

            <span class="
                absolute
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

                placeholder="Enter your password"

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
                hover:text-white
                transition">

                👁

            </button>

        </div>



        <!-- BUTTON -->

        <button

            id="confirmButton"

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

            <span id="confirmText">

                🔐 Confirm Password

            </span>

            <svg
                id="confirmSpinner"
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



        <!-- BACK -->

        <div class="text-center mt-8">

            <a
                href="{{ url()->previous() }}"
                class="
                text-cyan-300
                hover:text-white
                transition">

                ← Back

            </a>

        </div>

    </form>



<script>

const togglePassword =
document.getElementById("togglePassword");

const password =
document.getElementById("password");

togglePassword.addEventListener("click",function(){

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
.getElementById("confirmForm")
.addEventListener("submit",function(){

    document
    .getElementById("confirmButton")
    .disabled=true;

    document
    .getElementById("confirmSpinner")
    .classList.remove("hidden");

    document
    .getElementById("confirmText")
    .innerHTML="Verifying...";

});

</script>

</x-guest-layout>
