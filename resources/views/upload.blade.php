<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Document</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">

<div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded shadow">

    <h1 class="text-2xl font-bold mb-5">
        Upload Document
    </h1>

    {{-- pesan sukses --}}
    @if(session('success'))
        <div class="bg-green-200 p-3 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    {{-- error validation --}}
    @if($errors->any())
        <div class="bg-red-200 p-3 mb-4 rounded">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('upload.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <input type="file"
               name="document"
               class="border p-2 w-full mb-4">

        <button
            type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded">

            Upload File

        </button>

    </form>

</div>

</body>
</html>
