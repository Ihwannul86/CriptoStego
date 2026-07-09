<x-guest-layout>

    <!-- LOGO -->

    <div class="text-center mb-8">

        <x-application-logo
            class="mx-auto w-16 h-16 mb-5"/>

        <h2 class="text-3xl font-bold text-white">

            Verify Your Email

        </h2>

        <p class="text-gray-400 mt-3 leading-7">

            Before accessing your secure vault,
            please verify your email address using
            the verification link we sent.

        </p>

    </div>



    <!-- SUCCESS -->

    @if (session('status') == 'verification-link-sent')

        <div class="
            bg-green-500/20
            border
            border-green-500/30
            rounded-xl
            p-4
            mb-6">

            <p class="text-green-300">

                ✅ A new verification link has been sent to your email.

            </p>

        </div>

    @endif



    <!-- INFO -->

    <div class="
        rounded-2xl
        bg-cyan-500/10
        border
        border-cyan-500/20
        p-5
        mb-8">

        <div class="flex gap-3">

            <span class="text-3xl">

                📩

            </span>

            <div>

                <h3 class="text-white font-semibold">

                    Email Verification Required

                </h3>

                <p class="text-gray-400 text-sm mt-2 leading-6">

                    Please check your inbox (and spam folder if necessary)
                    then click the verification link before continuing.

                </p>

            </div>

        </div>

    </div>



    <div class="space-y-5">

        <!-- RESEND -->

        <form
            id="verifyForm"
            method="POST"
            action="{{ route('verification.send') }}">

            @csrf

            <button

                id="verifyButton"

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

                <span id="verifyText">

                    📨 Resend Verification Email

                </span>

                <svg
                    id="verifySpinner"
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

        </form>



        <!-- LOGOUT -->

        <form
            method="POST"
            action="{{ route('logout') }}">

            @csrf

            <button

                type="submit"

                class="
                w-full
                py-4
                rounded-2xl
                border
                border-red-500/30
                bg-red-500/10
                hover:bg-red-500/20
                text-red-300
                font-semibold
                transition">

                Log Out

            </button>

        </form>

    </div>



<script>

document
.getElementById("verifyForm")
.addEventListener("submit",function(){

    document
    .getElementById("verifyButton")
    .disabled=true;

    document
    .getElementById("verifySpinner")
    .classList.remove("hidden");

    document
    .getElementById("verifyText")
    .innerHTML="Sending Verification...";

});

</script>

</x-guest-layout>
