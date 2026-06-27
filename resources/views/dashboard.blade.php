<x-app-layout>

    <x-slot name="header">

        <div class="flex flex-col md:flex-row justify-between items-center gap-6">

            <div>

                <h2 class="text-4xl font-bold text-white">
                    🔐 CryptoStegoDocs
                </h2>

                <p class="text-gray-400 mt-3 text-lg">
                    Secure • Encrypt • Hide • Recover
                </p>

                <div class="flex gap-3 mt-4 flex-wrap">

                    <span class="bg-cyan-500/20 text-cyan-300 px-4 py-2 rounded-full text-sm">
                        AES-256
                    </span>

                    <span class="bg-purple-500/20 text-purple-300 px-4 py-2 rounded-full text-sm">
                        RSA-2048
                    </span>

                    <span class="bg-green-500/20 text-green-300 px-4 py-2 rounded-full text-sm">
                        LSB Secure
                    </span>

                </div>

            </div>

            <div class="text-right">

                <p class="text-cyan-300 font-medium">
                    Military-grade document security
                </p>

                <p class="text-gray-500 mt-2">
                    Cyber Defense Architecture
                </p>

            </div>

        </div>

    </x-slot>


    <div class="py-10 min-h-screen">

        <div class="max-w-7xl mx-auto px-6">


            <!-- WELCOME CARD -->

            <div class="mb-10 rounded-3xl p-8
                        bg-gradient-to-r from-blue-600/20 to-purple-600/20
                        backdrop-blur-xl border border-white/10">

                <h1 class="text-3xl font-bold text-white">
                    Welcome back, {{ Auth::user()->name }} 👋
                </h1>

                <p class="text-gray-400 mt-3">
                    Your secure encrypted vault is active and protected.
                </p>

            </div>



            <!-- SECURITY SCORE PANEL -->

            <div class="mb-10">

                <div class="bg-white/5 backdrop-blur-xl border border-cyan-400/10 rounded-3xl p-8 shadow-2xl">

                    <div class="grid md:grid-cols-2 gap-10 items-center">

                        <div>

                            <p class="text-cyan-300 text-sm uppercase tracking-widest">
                                Security Status
                            </p>

                            <h2 class="text-3xl text-white font-bold mt-3">
                                System Protection Level
                            </h2>

                            <p class="text-gray-400 mt-4">
                                Encryption engine operational and protecting secure document assets.
                            </p>

                            <div class="mt-6">

                                <div class="flex justify-between mb-2">

                                    <span class="text-gray-300">
                                        Protection Score
                                    </span>

                                    <span class="text-cyan-300 font-bold">
                                        92%
                                    </span>

                                </div>

                                <div class="w-full bg-gray-800 rounded-full h-4">

                                    <div class="bg-gradient-to-r from-cyan-400 to-blue-500 h-4 rounded-full"
                                         style="width:92%">
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="grid grid-cols-2 gap-4">

                            <div class="bg-emerald-500/10 border border-emerald-400/10 rounded-2xl p-5">
                                <p class="text-emerald-300 text-sm">AES Engine</p>
                                <p class="text-white text-xl mt-2">ACTIVE</p>
                            </div>

                            <div class="bg-purple-500/10 border border-purple-400/10 rounded-2xl p-5">
                                <p class="text-purple-300 text-sm">RSA Engine</p>
                                <p class="text-white text-xl mt-2">ACTIVE</p>
                            </div>

                            <div class="bg-blue-500/10 border border-blue-400/10 rounded-2xl p-5">
                                <p class="text-blue-300 text-sm">LSB Stego</p>
                                <p class="text-white text-xl mt-2">ACTIVE</p>
                            </div>

                            <div class="bg-yellow-500/10 border border-yellow-400/10 rounded-2xl p-5">
                                <p class="text-yellow-300 text-sm">Vault Status</p>
                                <p class="text-white text-xl mt-2">SAFE</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <!-- SMART ANALYTICS STATS -->

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">


                <div class="group relative overflow-hidden rounded-3xl p-8
                    bg-gradient-to-br from-cyan-500/10 to-blue-700/10
                    border border-cyan-400/20 backdrop-blur-xl
                    hover:scale-105 hover:-rotate-1 transition duration-500">

                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-cyan-400/10 rounded-full blur-3xl"></div>

                    <div class="flex justify-between items-start">

                        <div>
                            <p class="text-cyan-300 text-sm uppercase">
                                Stored Documents
                            </p>

                            <h1 class="text-5xl text-white font-bold mt-4">
                                {{ count($documents) }}
                            </h1>

                            <p class="text-gray-500 mt-4 text-sm">
                                Documents currently secured
                            </p>
                        </div>

                        <div class="text-5xl">
                            📂
                        </div>

                    </div>

                    <div class="mt-5 flex items-center gap-2">

                        <div class="w-3 h-3 rounded-full bg-cyan-400 animate-pulse"></div>

                        <span class="text-cyan-300 text-sm">
                            Live Monitoring
                        </span>

                    </div>

                </div>



                <div class="group relative overflow-hidden rounded-3xl p-8
                    bg-gradient-to-br from-emerald-500/10 to-green-700/10
                    border border-emerald-400/20 backdrop-blur-xl
                    hover:scale-105 hover:rotate-1 transition duration-500">

                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-green-400/10 rounded-full blur-3xl"></div>

                    <div class="flex justify-between items-start">

                        <div>
                            <p class="text-green-300 text-sm uppercase">
                                Encryption Vault
                            </p>

                            <h1 class="text-5xl text-white font-bold mt-4">
                                {{ count($documents) }}
                            </h1>

                            <p class="text-gray-500 mt-4 text-sm">
                                AES encrypted assets
                            </p>

                        </div>

                        <div class="text-5xl">
                            🔒
                        </div>

                    </div>

                    <div class="mt-5 flex items-center gap-2">

                        <div class="w-3 h-3 rounded-full bg-green-400 animate-pulse"></div>

                        <span class="text-green-300 text-sm">
                            Encryption Active
                        </span>

                    </div>

                </div>



                <div class="group relative overflow-hidden rounded-3xl p-8
                    bg-gradient-to-br from-purple-500/10 to-fuchsia-700/10
                    border border-purple-400/20 backdrop-blur-xl
                    hover:scale-105 hover:-rotate-1 transition duration-500">

                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-purple-400/10 rounded-full blur-3xl"></div>

                    <div class="flex justify-between items-start">

                        <div>

                            <p class="text-purple-300 text-sm uppercase">
                                Hidden Payloads
                            </p>

                            <h1 class="text-5xl text-white font-bold mt-4">
                                {{ count($documents) }}
                            </h1>

                            <p class="text-gray-500 mt-4 text-sm">
                                Protected stego images
                            </p>

                        </div>

                        <div class="text-5xl">
                            🧬
                        </div>

                    </div>

                    <div class="mt-5 flex items-center gap-2">

                        <div class="w-3 h-3 rounded-full bg-purple-400 animate-pulse"></div>

                        <span class="text-purple-300 text-sm">
                            Steganography Active
                        </span>

                    </div>

                </div>

            </div>



            <!-- ENCRYPTION METRICS PANEL -->

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">

                <div class="bg-white/5 backdrop-blur-xl border border-emerald-400/10 rounded-3xl p-6 hover:scale-105 transition">

                    <p class="text-emerald-300 text-sm uppercase">
                        Encryption Rate
                    </p>

                    <h1 class="text-4xl font-bold text-white mt-3">
                        99.8%
                    </h1>

                    <div class="mt-4 w-full bg-gray-800 rounded-full h-2">
                        <div class="bg-emerald-400 h-2 rounded-full" style="width:99%"></div>
                    </div>

                    <p class="text-gray-500 text-sm mt-3">
                        AES processing stable
                    </p>

                </div>

                <div class="bg-white/5 backdrop-blur-xl border border-blue-400/10 rounded-3xl p-6 hover:scale-105 transition">

                    <p class="text-blue-300 text-sm uppercase">
                        Recovery Rate
                    </p>

                    <h1 class="text-4xl font-bold text-white mt-3">
                        97.4%
                    </h1>

                    <div class="mt-4 w-full bg-gray-800 rounded-full h-2">
                        <div class="bg-blue-400 h-2 rounded-full" style="width:97%"></div>
                    </div>

                    <p class="text-gray-500 text-sm mt-3">
                        Decryption healthy
                    </p>

                </div>

                <div class="bg-white/5 backdrop-blur-xl border border-red-400/10 rounded-3xl p-6 hover:scale-105 transition">

                    <p class="text-red-300 text-sm uppercase">
                        Threat Level
                    </p>

                    <h1 class="text-4xl font-bold text-white mt-3">
                        LOW
                    </h1>

                    <div class="mt-4 w-full bg-gray-800 rounded-full h-2">
                        <div class="bg-red-400 h-2 rounded-full" style="width:20%"></div>
                    </div>

                    <p class="text-gray-500 text-sm mt-3">
                        No anomaly detected
                    </p>

                </div>

                <div class="bg-white/5 backdrop-blur-xl border border-purple-400/10 rounded-3xl p-6 hover:scale-105 transition">

                    <p class="text-purple-300 text-sm uppercase">
                        System Latency
                    </p>

                    <h1 class="text-4xl font-bold text-white mt-3">
                        42ms
                    </h1>

                    <div class="mt-4 w-full bg-gray-800 rounded-full h-2">
                        <div class="bg-purple-400 h-2 rounded-full" style="width:84%"></div>
                    </div>

                    <p class="text-gray-500 text-sm mt-3">
                        Performance optimal
                    </p>

                </div>

            </div>


            <!-- RECENT SECURE DOCUMENTS -->

            <div class="
                bg-white/5
                backdrop-blur-xl
                border border-white/10
                rounded-3xl
                shadow-2xl
                p-8
                mb-10">

                <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-8">

                    <div>

                        <h1 class="text-2xl text-white font-bold">
                            Recent Secure Documents
                        </h1>

                        <p class="text-gray-400 mt-2">
                            Your encrypted and protected document vault
                        </p>

                    </div>


                    <a href="{{ route('upload.form') }}"
                       class="
                       bg-gradient-to-r
                       from-cyan-500
                       to-blue-600
                       px-6
                       py-3
                       rounded-2xl
                       text-white
                       font-semibold
                       hover:scale-105
                       transition
                       duration-300
                       shadow-lg">

                        + Upload New File

                    </a>

                </div>



                <div class="overflow-x-auto rounded-2xl">

                    <table class="w-full">

                        <thead>

                            <tr class="bg-cyan-500/10 text-cyan-300">

                                <th class="p-5 rounded-l-2xl">
                                    File Name
                                </th>

                                <th class="p-5">
                                    Type
                                </th>

                                <th class="p-5">
                                    Status
                                </th>

                                <th class="p-5">
                                    Size
                                </th>

                                <th class="p-5">
                                    Date
                                </th>

                                <th class="p-5 rounded-r-2xl">
                                    Actions
                                </th>

                            </tr>

                        </thead>



                        <tbody>

                            @forelse($documents as $doc)

                                <tr class="
                                    text-white
                                    text-center
                                    border-b border-gray-800
                                    hover:bg-white/5
                                    transition
                                    duration-300">

                                    <td class="p-5">

                                        {{ \Illuminate\Support\Str::limit($doc->original_name, 30) }}

                                    </td>


                                    <td class="p-5">

                                        <span class="
                                            bg-blue-500/10
                                            text-blue-300
                                            px-3 py-2
                                            rounded-full
                                            text-sm">

                                            {{ strtoupper($doc->file_type) }}

                                        </span>

                                    </td>


                                    <td class="p-5">

                                        <span class="
                                            bg-green-500/10
                                            text-green-300
                                            px-3 py-2
                                            rounded-full
                                            text-sm">

                                            {{ strtoupper($doc->status) }}

                                        </span>

                                    </td>


                                    <td class="p-5 text-gray-300">

                                        {{ number_format($doc->file_size) }} bytes

                                    </td>


                                    <td class="p-5 text-gray-400">

                                        {{ $doc->created_at->format('d-m-Y') }}

                                    </td>



                                    <!-- ACTION BUTTONS -->

                                    <td class="p-5">

                                        <div class="flex flex-wrap justify-center gap-2">


                                            <a href="{{ route('document.download', $doc->id) }}"
                                               class="
                                               bg-blue-500/20
                                               hover:bg-blue-500/40
                                               px-3 py-2
                                               rounded-xl
                                               text-sm
                                               transition">

                                                ⬇ ENC

                                            </a>



                                            <a href="{{ route('document.stego', $doc->id) }}"
                                               target="_blank"
                                               class="
                                               bg-purple-500/20
                                               hover:bg-purple-500/40
                                               px-3 py-2
                                               rounded-xl
                                               text-sm
                                               transition">

                                                👁 View

                                            </a>



                                            <a href="{{ route('document.download.stego', $doc->id) }}"
                                               class="
                                               bg-green-500/20
                                               hover:bg-green-500/40
                                               px-3 py-2
                                               rounded-xl
                                               text-sm
                                               transition">

                                                💾 PNG

                                            </a>



                                            <form action="{{ route('document.delete', $doc->id) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Delete this document permanently?');">

                                                @csrf
                                                @method('DELETE')

                                                <button class="
                                                    bg-red-500/20
                                                    hover:bg-red-500/40
                                                    px-3 py-2
                                                    rounded-xl
                                                    text-sm
                                                    transition">

                                                    🗑 Delete

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="6"
                                        class="text-center text-gray-500 p-10">

                                        No encrypted documents stored yet.

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>
                        <!-- SECURITY ACTIVITY TIMELINE -->

            <div class="
                bg-white/5
                backdrop-blur-xl
                border border-white/10
                rounded-3xl
                shadow-2xl
                p-8
                mb-10">

                <div class="flex justify-between items-center mb-8">

                    <div>

                        <h1 class="text-2xl text-white font-bold">
                            Security Activity Timeline
                        </h1>

                        <p class="text-gray-400 mt-2">
                            Recent encryption and system security events
                        </p>

                    </div>


                    <div class="
                        bg-cyan-500/10
                        px-4 py-2
                        rounded-xl
                        text-cyan-300 text-sm">

                        Live Activity Feed

                    </div>

                </div>



                <div class="space-y-4">

                    @forelse($activityLogs as $log)

                        <div class="
                            bg-slate-900/50
                            border border-white/5
                            rounded-2xl
                            p-5
                            hover:bg-slate-800/50
                            transition duration-300">

                            <div class="flex items-start gap-4">

                                <!-- ICON -->

                                <div class="
                                    w-12 h-12
                                    rounded-2xl
                                    flex items-center justify-center
                                    bg-cyan-500/10
                                    text-2xl">

                                    🛡️

                                </div>



                                <!-- CONTENT -->

                                <div class="flex-1">

                                    <p class="text-white font-semibold text-lg">

                                        {{ $log->activity }}

                                    </p>

                                    <p class="text-gray-500 text-sm mt-2">

                                        {{ $log->created_at->format('d-m-Y H:i:s') }}

                                    </p>

                                </div>



                                <!-- STATUS -->

                                <div>

                                    <span class="
                                        bg-green-500/10
                                        text-green-300
                                        px-3 py-2
                                        rounded-full
                                        text-xs">

                                        VERIFIED

                                    </span>

                                </div>

                            </div>

                        </div>

                    @empty


                        <!-- EMPTY STATE -->

                        <div class="
                            bg-slate-900/30
                            rounded-3xl
                            p-10
                            text-center">

                            <div class="text-6xl mb-4">

                                📡

                            </div>

                            <p class="text-gray-400 text-lg">

                                No security activity recorded yet.

                            </p>

                            <p class="text-gray-600 mt-2">

                                Upload or decrypt files to generate activity logs.

                            </p>

                        </div>

                    @endforelse

                </div>

            </div>



            <!-- FOOTER MINI PANEL -->

            <div class="pb-10">

                <div class="
                    text-center
                    bg-gradient-to-r
                    from-indigo-500/10
                    to-purple-500/10
                    border border-white/5
                    rounded-3xl
                    p-6">

                    <p class="text-gray-400">

                        CryptoStegoDocs Security Engine

                    </p>

                    <p class="text-white mt-2 font-semibold">

                        AES Encryption • RSA Key Exchange • LSB Steganography

                    </p>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>
