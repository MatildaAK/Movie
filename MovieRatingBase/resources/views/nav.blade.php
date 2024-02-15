<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>
    @Vite('resources/css/app.css')
    <!-- <link rel="stylesheet" href="/resources/css/app.css"> -->
    <script src="https://kit.fontawesome.com/a0315d2788.js" crossorigin="anonymous"></script>
</head>
<body class="font-inter bg-backgc text-50  w-screen">
    <nav class="font-inter bg-nav text-white font-bold text-xl static">
        <div class="bg-nav flex items-center justify-between py-6 fixed top-0 left-0 right-0">
            <div class="ml-8">           
                    <a href="#">
                        <img src="{{ Vite::asset('resources/images/image.png') }}" alt="MRB logo">
                    </a>
            </div> 
            <ul class="flex items-center mx-auto">
                <li class="ml-10 list-none">
                    <a href="#" class="hover:text-gray-300">Home</a> <!-- Movies -->
                </li>
                <li class="ml-10">
                    <a href="#" class="hover:text-gray-300">Profile</a>
                </li>
                <li class="ml-10">
                    <a href="#" class="hover:text-gray-300">About us</a>
                </li>
                <li class="ml-10">
                    <a href="#" class="hover:text-gray-300">Contact</a>
                </li>

                <li  class="ml-10">
                <input type="text" class="ml-10 bg-200 rounded-full text-sm w-64 px-4 pl-4 py-1
                focus:outline-none focus:shadow-outline text-black fa-solid font-inter" placeholder="&#xf002; Search">
                </li>
            </ul>

            <div class="flex items-center">
                <a href="#"><p class="mr-6">Matilda</p></a>
                <div class="mr-8">
                    <a href="#">
                        <img src="{{ Vite::asset('resources/images/profil.jpg') }}" alt="Profil bild" class="rounded-lg w-8 h-8 border-solid border-4 border-sky-600">
                    </a>
                </div>
            </div>

        </div>

    </nav>
    @yield('content')
</body>
</html>