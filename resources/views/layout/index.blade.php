<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="p-10">
        <div class="text-center">
            <h1 class="text-5xl font-bold">Data Mahasiswa</h1>
        </div>
    </div>
    @yield('content')
    <div class="text-center mt-4 text-gray-300 text-sm">Made with <span class="text-red-500">&hearts;</span> by Kelompok3</div>
</body>
</html>