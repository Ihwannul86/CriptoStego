<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CryptoStegoDocs</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="font-sans antialiased">

<div class="min-h-screen bg-gradient-to-br from-slate-950 via-indigo-950 to-slate-900">

    @include('layouts.navigation')

    @isset($header)
    <header class="max-w-7xl mx-auto pt-8 px-6">
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl shadow-2xl p-6">
            {{ $header }}
        </div>
    </header>
    @endisset

    <main class="flex-grow relative">
        {{ $slot }}
    </main>

</div>

@if(session('success'))
<script>
document.addEventListener('DOMContentLoaded',()=>{
Swal.fire({
toast:true,
position:'top-end',
icon:'success',
title:'Success',
text:@json(session('success')),
showConfirmButton:false,
timer:3500,
timerProgressBar:true,
background:'#0f172a',
color:'#fff',
iconColor:'#22c55e'
});
});
</script>
@endif

@if(session('error'))
<script>
document.addEventListener('DOMContentLoaded',()=>{
Swal.fire({
toast:true,
position:'top-end',
icon:'error',
title:'Error',
text:@json(session('error')),
showConfirmButton:false,
timer:4000,
timerProgressBar:true,
background:'#0f172a',
color:'#fff',
iconColor:'#ef4444'
});
});
</script>
@endif

@if(session('warning'))
<script>
document.addEventListener('DOMContentLoaded',()=>{
Swal.fire({
toast:true,
position:'top-end',
icon:'warning',
title:'Warning',
text:@json(session('warning')),
showConfirmButton:false,
timer:4000,
timerProgressBar:true,
background:'#0f172a',
color:'#fff',
iconColor:'#f59e0b'
});
});
</script>
@endif

@if(session('info'))
<script>
document.addEventListener('DOMContentLoaded',()=>{
Swal.fire({
toast:true,
position:'top-end',
icon:'info',
title:'Information',
text:@json(session('info')),
showConfirmButton:false,
timer:4000,
timerProgressBar:true,
background:'#0f172a',
color:'#fff',
iconColor:'#38bdf8'
});
});
</script>
@endif

</body>
</html>
