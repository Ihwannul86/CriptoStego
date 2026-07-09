<section>

    <header class="mb-8">

        <h2 class="text-2xl font-bold text-red-300">

            🗑 Delete Account

        </h2>

        <p class="mt-2 text-gray-400 leading-7">

            Once your account is deleted, all encrypted documents,
            keys, and personal information will be permanently removed.
            This action cannot be undone.

        </p>

    </header>



    <!-- WARNING -->

    <div class="
        rounded-2xl
        bg-red-500/10
        border
        border-red-500/20
        p-6
        mb-8">

        <div class="flex gap-4">

            <div class="text-4xl">

                ⚠️

            </div>

            <div>

                <h3 class="text-red-300 font-semibold text-lg">

                    Permanent Action

                </h3>

                <p class="text-gray-400 mt-2 leading-7">

                    Deleting your account will permanently remove all
                    encrypted files, recovery data, and account
                    information from CryptoStegoDocs.

                </p>

            </div>

        </div>

    </div>



    <!-- DELETE BUTTON -->

    <button

        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"

        class="
        px-8
        py-3
        rounded-2xl
        bg-gradient-to-r
        from-red-500
        to-rose-600
        font-bold
        text-white
        hover:scale-[1.02]
        transition">

        🗑 Delete My Account

    </button>



    <!-- MODAL -->

    <x-modal
        name="confirm-user-deletion"
        :show="$errors->userDeletion->isNotEmpty()"
        focusable>

        <form
            id="deleteAccountForm"
            method="POST"
            action="{{ route('profile.destroy') }}"
            class="p-8">

            @csrf
            @method('DELETE')



            <div class="text-center">

                <div class="
                    mx-auto
                    w-20
                    h-20
                    rounded-full
                    bg-red-500/20
                    flex
                    items-center
                    justify-center
                    text-5xl">

                    🗑️

                </div>

                <h2 class="text-3xl font-bold text-white mt-6">

                    Delete Account?

                </h2>

                <p class="text-gray-400 mt-4 leading-7">

                    This action is irreversible.

                    Please enter your password to confirm
                    permanent deletion of your account.

                </p>

            </div>



            <!-- PASSWORD -->

            <div class="mt-8">

                <label class="text-gray-300 font-medium">

                    Current Password

                </label>

                <div class="relative mt-2">

                    <span class="
                        absolute
                        left-4
                        top-1/2
                        -translate-y-1/2
                        text-red-300">

                        🔒

                    </span>

                    <input

                        id="deletePassword"

                        name="password"

                        type="password"

                        placeholder="Enter password"

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
                        focus:border-red-400
                        focus:ring-2
                        focus:ring-red-500/20
                        outline-none
                        transition">

                    <button

                        type="button"

                        id="toggleDeletePassword"

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
                    :messages="$errors->userDeletion->get('password')"
                    class="mt-2"/>

            </div>



            <!-- BUTTON -->

            <div class="flex justify-end gap-4 mt-10">

                <button

                    type="button"

                    x-on:click="$dispatch('close')"

                    class="
                    px-6
                    py-3
                    rounded-xl
                    bg-slate-700
                    hover:bg-slate-600
                    transition">

                    Cancel

                </button>



                <button

                    id="deleteButton"

                    type="submit"

                    class="
                    px-6
                    py-3
                    rounded-xl
                    bg-gradient-to-r
                    from-red-500
                    to-rose-600
                    font-bold
                    hover:scale-[1.02]
                    transition
                    flex
                    items-center
                    gap-3">

                    <span id="deleteText">

                        Delete Permanently

                    </span>

                    <svg
                        id="deleteSpinner"
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

            </div>

        </form>

    </x-modal>

</section>



<script>

document
.getElementById("toggleDeletePassword")
.addEventListener("click",function(){

    let input =
    document.getElementById("deletePassword");

    if(input.type==="password"){

        input.type="text";

        this.innerHTML="🙈";

    }

    else{

        input.type="password";

        this.innerHTML="👁";

    }

});


document
.getElementById("deleteAccountForm")
.addEventListener("submit",function(){

    document
    .getElementById("deleteButton")
    .disabled=true;

    document
    .getElementById("deleteSpinner")
    .classList.remove("hidden");

    document
    .getElementById("deleteText")
    .innerHTML="Deleting...";

});

</script>
