<x-app-layout>

    <x-slot name="header">

        <div class="flex items-center justify-between">

            <div>

                <h2 class="text-4xl font-bold text-white">

                    👤 My Profile

                </h2>

                <p class="text-gray-400 mt-2">

                    Manage your account information and security settings

                </p>

            </div>

            <div class="text-right">

                <p class="text-cyan-300">

                    Account Center

                </p>

                <p class="text-gray-500">

                    CryptoStegoDocs

                </p>

            </div>

        </div>

    </x-slot>



    <div class="py-12">

        <div class="max-w-7xl mx-auto px-6 space-y-8">

            <!-- PROFILE INFORMATION -->

            <div class="
                bg-white/5
                backdrop-blur-xl
                border
                border-white/10
                rounded-3xl
                shadow-2xl
                overflow-hidden">

                <div class="
                    px-8
                    py-6
                    border-b
                    border-white/10
                    flex
                    items-center
                    gap-4">

                    <div class="
                        w-14
                        h-14
                        rounded-2xl
                        bg-cyan-500/20
                        flex
                        items-center
                        justify-center
                        text-2xl">

                        👤

                    </div>

                    <div>

                        <h3 class="text-2xl font-bold text-white">

                            Profile Information

                        </h3>

                        <p class="text-gray-400">

                            Update your personal account information.

                        </p>

                    </div>

                </div>

                <div class="p-8">

                    @include('profile.partials.update-profile-information-form')

                </div>

            </div>



            <!-- CHANGE PASSWORD -->

            <div class="
                bg-white/5
                backdrop-blur-xl
                border
                border-white/10
                rounded-3xl
                shadow-2xl
                overflow-hidden">

                <div class="
                    px-8
                    py-6
                    border-b
                    border-white/10
                    flex
                    items-center
                    gap-4">

                    <div class="
                        w-14
                        h-14
                        rounded-2xl
                        bg-purple-500/20
                        flex
                        items-center
                        justify-center
                        text-2xl">

                        🔒

                    </div>

                    <div>

                        <h3 class="text-2xl font-bold text-white">

                            Change Password

                        </h3>

                        <p class="text-gray-400">

                            Keep your account secure with a strong password.

                        </p>

                    </div>

                </div>

                <div class="p-8">

                    @include('profile.partials.update-password-form')

                </div>

            </div>



            <!-- DELETE ACCOUNT -->

            <div class="
                bg-red-500/10
                backdrop-blur-xl
                border
                border-red-500/20
                rounded-3xl
                shadow-2xl
                overflow-hidden">

                <div class="
                    px-8
                    py-6
                    border-b
                    border-red-500/20
                    flex
                    items-center
                    gap-4">

                    <div class="
                        w-14
                        h-14
                        rounded-2xl
                        bg-red-500/20
                        flex
                        items-center
                        justify-center
                        text-2xl">

                        🗑️

                    </div>

                    <div>

                        <h3 class="text-2xl font-bold text-red-300">

                            Delete Account

                        </h3>

                        <p class="text-gray-400">

                            Permanently remove your account and all encrypted documents.

                        </p>

                    </div>

                </div>

                <div class="p-8">

                    @include('profile.partials.delete-user-form')

                </div>

            </div>

        </div>

    </div>

</x-app-layout>
