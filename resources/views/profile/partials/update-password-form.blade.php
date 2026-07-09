<section>

    <header class="mb-8">

        <h2 class="text-2xl font-bold text-white">

            🔒 Change Password

        </h2>

        <p class="mt-2 text-gray-400">

            Use a strong and unique password to keep your encrypted documents secure.

        </p>

    </header>



    <form
        id="updatePasswordForm"
        method="POST"
        action="{{ route('password.update') }}"
        class="space-y-8">

        @csrf
        @method('PUT')



        <!-- CURRENT PASSWORD -->

        <div>

            <label
                for="update_password_current_password"
                class="block text-gray-300 font-medium mb-2">

                Current Password

            </label>

            <div class="relative">

                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-cyan-300">

                    🔑

                </span>

                <input

                    id="update_password_current_password"

                    name="current_password"

                    type="password"

                    autocomplete="current-password"

                    placeholder="Enter current password"

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
                    focus:border-cyan-400
                    focus:ring-2
                    focus:ring-cyan-500/20
                    outline-none
                    transition">

                <button

                    type="button"

                    onclick="togglePassword('update_password_current_password',this)"

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

            <x-input-error
                :messages="$errors->updatePassword->get('current_password')"
                class="mt-2"/>

        </div>



        <!-- NEW PASSWORD -->

        <div>

            <label
                for="update_password_password"
                class="block text-gray-300 font-medium mb-2">

                New Password

            </label>

            <div class="relative">

                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-purple-300">

                    🔒

                </span>

                <input

                    id="update_password_password"

                    name="password"

                    type="password"

                    autocomplete="new-password"

                    placeholder="Create new password"

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

                    onclick="togglePassword('update_password_password',this)"

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

            <x-input-error
                :messages="$errors->updatePassword->get('password')"
                class="mt-2"/>

        </div>



        <!-- CONFIRM PASSWORD -->

        <div>

            <label
                for="update_password_password_confirmation"
                class="block text-gray-300 font-medium mb-2">

                Confirm Password

            </label>

            <div class="relative">

                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-pink-300">

                    🔐

                </span>

                <input

                    id="update_password_password_confirmation"

                    name="password_confirmation"

                    type="password"

                    autocomplete="new-password"

                    placeholder="Confirm new password"

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

                    onclick="togglePassword('update_password_password_confirmation',this)"

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

            <x-input-error
                :messages="$errors->updatePassword->get('password_confirmation')"
                class="mt-2"/>

        </div>



        <!-- PASSWORD TIPS -->

        <div class="
            rounded-2xl
            bg-cyan-500/10
            border
            border-cyan-500/20
            p-5">

            <h4 class="text-cyan-300 font-semibold">

                💡 Password Recommendation

            </h4>

            <ul class="mt-3 text-gray-400 text-sm space-y-2">

                <li>• Minimum 8 characters</li>

                <li>• Mix uppercase and lowercase letters</li>

                <li>• Include numbers and symbols</li>

                <li>• Avoid using personal information</li>

            </ul>

        </div>



        <!-- SAVE BUTTON -->

        <div class="flex items-center gap-5">

            <button

                id="passwordButton"

                type="submit"

                class="
                px-8
                py-3
                rounded-2xl
                bg-gradient-to-r
                from-purple-500
                to-pink-500
                font-bold
                hover:scale-[1.02]
                transition
                flex
                items-center
                gap-3">

                <span id="passwordText">

                    🔒 Update Password

                </span>

                <svg
                    id="passwordSpinner"
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



            @if (session('status') === 'password-updated')

                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2500)"
                    class="text-green-300 font-medium">

                    ✅ Password Updated Successfully

                </p>

            @endif

        </div>

    </form>

</section>



<script>

function togglePassword(id,button){

    let input=document.getElementById(id);

    if(input.type==="password"){

        input.type="text";

        button.innerHTML="🙈";

    }

    else{

        input.type="password";

        button.innerHTML="👁";

    }

}



document
.getElementById("updatePasswordForm")
.addEventListener("submit",function(){

    document
    .getElementById("passwordButton")
    .disabled=true;

    document
    .getElementById("passwordSpinner")
    .classList.remove("hidden");

    document
    .getElementById("passwordText")
    .innerHTML="Updating...";

});

</script>
