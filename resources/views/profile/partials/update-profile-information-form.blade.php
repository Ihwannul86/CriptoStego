<section>

    <header class="mb-8">

        <h2 class="text-2xl font-bold text-white">

            👤 Profile Information

        </h2>

        <p class="mt-2 text-gray-400">

            Update your personal information and email address.

        </p>

    </header>



    <!-- VERIFY EMAIL -->

    <form
        id="send-verification"
        method="POST"
        action="{{ route('verification.send') }}">

        @csrf

    </form>



    <form
        method="POST"
        action="{{ route('profile.update') }}"
        class="space-y-8">

        @csrf
        @method('PATCH')



        <!-- NAME -->

        <div>

            <label
                for="name"
                class="block text-gray-300 font-medium mb-2">

                Full Name

            </label>

            <div class="relative">

                <span class="
                    absolute
                    left-4
                    top-1/2
                    -translate-y-1/2
                    text-cyan-300">

                    👤

                </span>

                <input

                    id="name"

                    name="name"

                    type="text"

                    value="{{ old('name', $user->name) }}"

                    required

                    autofocus

                    autocomplete="name"

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

            <x-input-error
                :messages="$errors->get('name')"
                class="mt-2"/>

        </div>



        <!-- EMAIL -->

        <div>

            <label
                for="email"
                class="block text-gray-300 font-medium mb-2">

                Email Address

            </label>

            <div class="relative">

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

                    name="email"

                    type="email"

                    value="{{ old('email', $user->email) }}"

                    required

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
                    transition">

            </div>

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"/>



            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())

                <div class="
                    mt-5
                    rounded-2xl
                    bg-amber-500/10
                    border
                    border-amber-500/20
                    p-5">

                    <p class="text-amber-300">

                        ⚠️ Your email address is not verified.

                    </p>

                    <button

                        form="send-verification"

                        class="
                        mt-4
                        px-5
                        py-2
                        rounded-xl
                        bg-cyan-500/20
                        hover:bg-cyan-500/30
                        text-cyan-300
                        transition">

                        Send Verification Email Again

                    </button>



                    @if (session('status') === 'verification-link-sent')

                        <div class="
                            mt-4
                            rounded-xl
                            bg-green-500/20
                            border
                            border-green-500/30
                            p-4">

                            <p class="text-green-300">

                                ✅ Verification email sent successfully.

                            </p>

                        </div>

                    @endif

                </div>

            @endif

        </div>



        <!-- BUTTON -->

        <div class="flex items-center gap-5">

            <button

                id="saveProfileButton"

                type="submit"

                class="
                px-8
                py-3
                rounded-2xl
                bg-gradient-to-r
                from-cyan-500
                to-blue-600
                font-bold
                hover:scale-[1.02]
                transition
                flex
                items-center
                gap-3">

                <span id="saveProfileText">

                    💾 Save Changes

                </span>

                <svg
                    id="saveProfileSpinner"
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



            @if (session('status') === 'profile-updated')

                <p

                    x-data="{ show: true }"

                    x-show="show"

                    x-transition

                    x-init="setTimeout(() => show = false, 2500)"

                    class="text-green-300 font-medium">

                    ✅ Profile Updated

                </p>

            @endif

        </div>

    </form>

</section>



<script>

document
.querySelector('form[action="{{ route('profile.update') }}"]')
.addEventListener("submit",function(){

    document
    .getElementById("saveProfileButton")
    .disabled=true;

    document
    .getElementById("saveProfileSpinner")
    .classList.remove("hidden");

    document
    .getElementById("saveProfileText")
    .innerHTML="Saving...";

});

</script>
