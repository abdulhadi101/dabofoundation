<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Adamu Dabo Foundation') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('asset/image/favicon.ico') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;600;700;800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body style="font-family: 'Poppins', sans-serif;" class="h-screen">
    <nav class="bg-primary dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('welcome') }}"
                class="flex bg-white rounded-full px-2 py-1 items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('asset/image/adb-logo.png') }}" class="h-10" alt="Adb Logo">

            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border  rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ route('welcome') }}"
                            class="block py-2 px-3  {{ request()->is('/') ? 'active text-white' : '' }} rounded md:bg-transparent  md:p-0 "
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="block py-2 px-3 text-gray-900 {{ request()->is('about') ? 'active text-white' : '' }} rounded hover:bg-gray-100 md:hover:bg-transparent  md:p-0    dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="{{ route('what-we-do') }}"
                            class="block py-2 px-3 text-gray-900 {{ request()->is('what-we-do') ? 'active text-white' : '' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0  dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">What
                            We Do</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="block py-2 px-3 text-gray-900 rounded {{ request()->is('contact') ? 'active text-white' : '' }} hover:bg-gray-100 md:hover:bg-transparent  md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact
                            Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="">

        {{ $slot }}
    </div>

    <div class="w-full py-1  h-2/3  ">
        <div class="rounded-xl h-2/3 bg-blend-darken mt-10 mx-auto py-auto max-w-6xl"
            style="background-image: url('asset/image/adb-11.jpg'); background-color: rgba(62, 40, 5, 0.75);
               background-size: cover;">

            <div class=" items-center  text-white flex flex-col justify-center h-full">
                <h1 class="text-2xl">Your Can Contribute by Joining as a Volunteer Fisabillilah to be part of our
                    Mission</h1>
                <div class="flex md:flex-row flex-col space-y-8 items-center md:items-start md:space-x-8">
                    <br>
                    <div>
                        <a class="py-2 px-4 bg-primary rounded-md text-white font-semibold" href="#">Join as a
                            Volunteer</a>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <div class=" max-w-6xl mx-auto justify-start">
        <div class="flex items-center py-auto space-x-10">
            <h1 class="font-bold text-3xl">Our Events</h1>
            <hr class=" h-0.5  hidden md:block bg-gray-800  w-4/5">
        </div>

        <div class="flex md:flex-row flex-col mx-auto w-full py-auto my-10 space-y-3 md:space-x-10 items-center">
            <div class="flex space-x-5 md:w-1/2 rounded-xl bg-secondary px-8 py-10 items-center">
                <div>
                    <h1 class="font-bold text-4xl">13</h1>
                    <h2 class="font-bold text-xl uppercase">Apr</h2>
                </div>

                <div>

                    <div>
                        <div class="flex items-center">
                            <div class="font-semibold text-xl pr-4">
                                Next Events
                            </div>
                            <hr class="px-4 h-0.5 border border-black bg-black  w-10">
                        </div>
                        <h1 class="font-bold text-2xl">
                            Ramadan Iftar Feeding Program
                        </h1>

                    </div>
                </div>
                <div class="rounded-full justify-end hover:bg-black hover:text-white bg-white p-2">
                    <a href="{{ route('blog') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>


                </div>
            </div>
            <div class="flex space-x-5 md:w-1/2 rounded-xl bg-secondary px-8 py-10 items-center">
                <div>
                    <h1 class="font-bold text-4xl">13</h1>
                    <h2 class="font-bold text-xl uppercase">Apr</h2>
                </div>

                <div>

                    <div>
                        <div class="flex items-center">
                            <div class="font-semibold text-xl pr-4">
                                Next Events
                            </div>
                            <hr class="px-4 h-0.5 border border-black bg-black  w-10">
                        </div>
                        <h1 class="font-bold text-2xl">
                            Eid Fitr Lecture Program Program
                        </h1>

                    </div>
                </div>
                <div class="rounded-full hover:bg-black hover:text-white justify-end bg-white p-2">
                    <a href="{{ route('blog') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-primary  w-full shadow dark:bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="{{ route('welcome') }}" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('asset/image/adb-logo.png') }}" class="h-16" alt="ADF Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Adamu Dabo
                        Foundation</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-white sm:mb-0 ">
                    <li>
                        <a href="{{ route('about') }}" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-white sm:text-center ">© 2024 <a href="#"
                    class="hover:underline">Adamu Dabo Foundation™</a>. All Rights
                Reserved.</span>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="{{ base_path('node_modules/flowbite/dist/flowbite.min.js') }}"></script>
</body>

</html>
