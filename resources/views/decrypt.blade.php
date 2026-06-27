<x-app-layout>

    <x-slot name="header">

        <div class="flex justify-between items-center">

            <div>

                <h2 class="text-4xl font-bold text-white">
                    🔓 Recovery Center
                </h2>

                <p class="text-gray-400 mt-2">
                    Recover encrypted document and rebuild hidden key
                </p>

            </div>

            <div class="text-right">

                <p class="text-purple-300">
                    Recovery Pipeline Active
                </p>

                <p class="text-gray-500">
                    LSB → RSA → AES
                </p>

            </div>

        </div>

    </x-slot>


    <div class="py-12">

        <div class="max-w-4xl mx-auto px-6">


            {{-- ERROR REMOVED --}}
            {{-- Toast handled globally in app.blade.php --}}


            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-10">

                <form id="decryptForm"
                      method="POST"
                      action="{{ route('decrypt.process') }}"
                      enctype="multipart/form-data">

                    @csrf


                    {{-- ENC FILE --}}
                    <label class="block text-white text-xl font-semibold mb-4">

                        🔒 Upload Encrypted File

                    </label>

                    <label class="
                        flex flex-col justify-center items-center
                        h-48 border-2 border-dashed
                        border-red-400/40 rounded-2xl cursor-pointer
                        hover:bg-red-500/5 transition">

                        <span class="text-4xl mb-3">📦</span>

                        <span class="text-white">
                            Click to choose .enc file
                        </span>

                        <span id="enc-name"
                              class="text-red-300 mt-3 text-sm">
                        </span>

                        <input
                            id="encrypted_file"
                            type="file"
                            name="encrypted_file"
                            class="hidden">

                    </label>



                    {{-- PNG FILE --}}
                    <label class="block text-white text-xl font-semibold mt-10 mb-4">

                        🖼 Upload Stego PNG

                    </label>

                    <label class="
                        flex flex-col justify-center items-center
                        h-48 border-2 border-dashed
                        border-purple-400/40 rounded-2xl cursor-pointer
                        hover:bg-purple-500/5 transition">

                        <span class="text-4xl mb-3">🧬</span>

                        <span class="text-white">
                            Click to choose PNG file
                        </span>

                        <span id="png-name"
                              class="text-purple-300 mt-3 text-sm">
                        </span>

                        <input
                            id="stego_image"
                            type="file"
                            name="stego_image"
                            class="hidden">

                    </label>



                    <!-- BUTTON LOADING -->

                    <button
                        id="decryptButton"
                        type="submit"

                        class="
                        mt-10
                        w-full
                        py-4
                        rounded-2xl
                        text-lg
                        font-bold
                        bg-gradient-to-r
                        from-pink-500
                        to-red-500
                        hover:scale-[1.01]
                        transition
                        flex
                        justify-center
                        items-center
                        gap-3">

                        <span id="decryptText">

                            ⚡ Recover & Decrypt File

                        </span>


                        <svg id="decryptSpinner"
                             class="hidden animate-spin h-5 w-5 text-white"
                             xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24">

                            <circle class="opacity-25"
                                    cx="12"
                                    cy="12"
                                    r="10"
                                    stroke="currentColor"
                                    stroke-width="4"></circle>

                            <path class="opacity-75"
                                  fill="currentColor"
                                  d="M4 12a8 8 0 018-8v8H4z"></path>

                        </svg>

                    </button>

                </form>

            </div>

        </div>

    </div>


<script>

document.getElementById('encrypted_file').addEventListener('change', function(){

    document.getElementById('enc-name').textContent =
        this.files[0].name;

});


document.getElementById('stego_image').addEventListener('change', function(){

    document.getElementById('png-name').textContent =
        this.files[0].name;

});


document.getElementById("decryptForm")
.addEventListener("submit", function(){

    let btn =
        document.getElementById("decryptButton");

    let spinner =
        document.getElementById("decryptSpinner");

    let text =
        document.getElementById("decryptText");

    btn.disabled = true;

    btn.classList.add("opacity-70");

    spinner.classList.remove("hidden");

    text.innerHTML =
        "Decrypting...";

});

</script>

</x-app-layout>
