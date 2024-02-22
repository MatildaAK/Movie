<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MRB</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <!-- Styles -->
    @Vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a0315d2788.js" crossorigin="anonymous"></script>
</head>

<body class="antialiased bg-backgc">

    @include('layouts.nav')

    <h1 class="text-center text-sky-50 text-3xl font-bold font-inter pt-[100px]">Lord of The Rings</h1>
    <h2 class="text-center font-inter text-sky-50">The return of the king</h2>

    <div class="bg-nav mr-4 ml-4 mt-6 rounded-md">
        <div class="flex w-full">
            <img class="h-[120px] w-auto p-2 rounded-lg" src="{{ Vite::asset('resources/images/lotr3.jpg') }}" alt="Lord of the rings 3">

            <img class="h-[120px] w-auto p-2 rounded-lg" src="{{ Vite::asset('resources/images/lotr3-1.jpg') }}" alt="Lord of the rings 3">
        </div>


    </div>


</body>

</html>