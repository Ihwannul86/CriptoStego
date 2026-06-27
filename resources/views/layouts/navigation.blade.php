<nav x-data="{ open: false }"
     class="sticky top-4 z-50">

    <div class="max-w-7xl mx-auto px-6 pt-5">

        <!-- MAIN GLASS NAVBAR -->
        <div class="
            bg-slate-900/40
            backdrop-blur-2xl
            border border-white/10
            rounded-3xl
            shadow-[0_0_30px_rgba(59,130,246,0.08)]
            px-8">

            <div class="flex justify-between items-center h-20">

                <!-- LEFT SECTION -->
                <div class="flex items-center gap-10">

                    <!-- LOGO -->
                    <a href="{{ route('dashboard') }}"
                       class="flex items-center gap-3">

                        <div class="
                            w-11 h-11
                            rounded-2xl
                            bg-gradient-to-r
                            from-cyan-500
                            to-blue-600
                            flex items-center
                            justify-center
                            shadow-lg">

                            <span class="text-white text-xl">
                                🔐
                            </span>

                        </div>

                        <div>

                            <h1 class="text-white font-bold text-2xl">
                                CryptoStegoDocs
                            </h1>

                            <p class="text-gray-500 text-xs">
                                Secure Document Platform
                            </p>

                        </div>

                    </a>


                    <!-- DESKTOP MENU -->
                    <div class="hidden sm:flex items-center gap-3">

                        <!-- DASHBOARD -->
                        <a href="{{ route('dashboard') }}"
                           class="
                           px-5 py-2.5
                           rounded-xl
                           transition duration-300

                           {{ request()->routeIs('dashboard')
                              ? 'bg-cyan-500/20 text-cyan-300 border border-cyan-400/20'
                              : 'text-gray-300 hover:bg-cyan-500/10 hover:text-cyan-300'
                           }}">

                            Dashboard

                        </a>


                        <!-- UPLOAD -->
                        <a href="{{ route('upload.form') }}"
                           class="
                           px-5 py-2.5
                           rounded-xl
                           transition duration-300

                           {{ request()->routeIs('upload.form')
                              ? 'bg-blue-500/20 text-blue-300 border border-blue-400/20'
                              : 'text-gray-300 hover:bg-blue-500/10 hover:text-blue-300'
                           }}">

                            Upload

                        </a>


                        <!-- DECRYPT -->
                        <a href="{{ route('decrypt.form') }}"
                           class="
                           px-5 py-2.5
                           rounded-xl
                           transition duration-300

                           {{ request()->routeIs('decrypt.form')
                              ? 'bg-purple-500/20 text-purple-300 border border-purple-400/20'
                              : 'text-gray-300 hover:bg-purple-500/10 hover:text-purple-300'
                           }}">

                            Decrypt

                        </a>

                    </div>

                </div>



                <!-- RIGHT SECTION -->
                <div class="hidden sm:flex items-center gap-4">


                    <!-- USER -->
                    <div class="
                        px-4 py-2
                        rounded-xl
                        bg-cyan-500/10
                        border border-cyan-400/10
                        text-cyan-300
                        font-medium">

                        👤 {{ Auth::user()->name }}

                    </div>


                    <!-- PROFILE -->
                    <a href="{{ route('profile.edit') }}"
                       class="
                       px-5 py-2
                       rounded-xl
                       bg-indigo-500/10
                       border border-indigo-400/10
                       text-indigo-300
                       hover:bg-indigo-500/20
                       transition">

                        Profile

                    </a>


                    <!-- LOGOUT -->
                    <form method="POST"
                          action="{{ route('logout') }}">

                        @csrf

                        <button
                            class="
                            px-5 py-2
                            rounded-xl
                            bg-red-500/10
                            border border-red-400/10
                            text-red-300
                            hover:bg-red-500/20
                            transition">

                            Logout

                        </button>

                    </form>

                </div>



                <!-- MOBILE BUTTON -->
                <div class="sm:hidden">

                    <button
                        @click="open = ! open"
                        class="
                        text-white
                        text-2xl
                        bg-white/5
                        p-2 rounded-xl">

                        ☰

                    </button>

                </div>

            </div>



            <!-- MOBILE MENU -->
            <div x-show="open"
                 x-transition
                 class="
                 sm:hidden
                 py-5
                 border-t border-white/10
                 space-y-3">


                <a href="{{ route('dashboard') }}"
                   class="
                   block
                   px-4 py-3
                   rounded-xl
                   text-gray-300
                   hover:bg-cyan-500/10">

                    Dashboard

                </a>


                <a href="{{ route('upload.form') }}"
                   class="
                   block
                   px-4 py-3
                   rounded-xl
                   text-gray-300
                   hover:bg-blue-500/10">

                    Upload

                </a>


                <a href="{{ route('decrypt.form') }}"
                   class="
                   block
                   px-4 py-3
                   rounded-xl
                   text-gray-300
                   hover:bg-purple-500/10">

                    Decrypt

                </a>


                <a href="{{ route('profile.edit') }}"
                   class="
                   block
                   px-4 py-3
                   rounded-xl
                   text-gray-300">

                    Profile

                </a>


                <form method="POST"
                      action="{{ route('logout') }}">

                    @csrf

                    <button class="
                        w-full
                        text-left
                        px-4 py-3
                        rounded-xl
                        text-red-300">

                        Logout

                    </button>

                </form>

            </div>

        </div>

    </div>

</nav>
