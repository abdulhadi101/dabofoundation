<!doctype html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title> Adamu Dabo Foundation</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('asset/image/favicon.ico') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body style="font-family: 'Poppins', sans-serif;" class=" flex flex-col h-screen">
    <nav class=" bg-primary fixed w-full z-20 ">
        <div class="bg-secondary px-3 items-center flex justify-between">
            <a href="/admin" class="flex space-x-2"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#3C6E0F" class="w-6 h-6">
                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                </svg>
                <p class="md:text-base text-sm">My Portal</p>
            </a>
            <div class="flex space-x-2">
                <a class="bg-black md:block hidden text-white text-sm md:text-base my-1 hover:bg-gray-700 px-2 py-0.5 rounded-md" href="#">Zakat Calculator</a>
                <div class="flex items-center space-x-2">
                    <p class="text-sm md:text-base">Contact Us:</p>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                    </svg>
                    <p>+234 8065155443</p>
                </div>
            </div>
        </div>
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
                    <li>
                        <a class="bg-black block md:hidden w-fit text-white text-sm md:text-base my-1 hover:bg-gray-700 px-2 md:py-0.5 py-2 rounded-sm md:rounded-md" href="#">Zakat Calculator</a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="grow">

        <div class="pt-10">
            {{ $slot }}
        </div>

        @if(request()->routeIs('event.index'))
            <p></p>
        @else
        <div class=" px-2 md:px-0 max-w-6xl mx-auto justify-start">
            <div class="flex items-center py-auto space-x-10">
                <div class="flex gap-8">
                    <div class=" flex items-center">
                        <div class="md:h-24 h-12 w-2  md:w-4 bg-primary">
                        </div>
                        <h1 class=" font-bold ml-3 text-2xl items-center md:text-4xl"> Our Events</h1>
                    </div>

                </div>


            </div>
            <p>Check out our latest Upcoming Events!</p>
            <div class="flex md:flex-row flex-col mx-auto w-full py-auto my-10 space-y-3 md:space-x-10 items-center">

                @forelse($events as $event)
                    <div class="flex space-x-5 md:w-1/2 justify-between rounded-xl bg-secondary px-8 py-10 items-center">
                    <div class="flex space-x-4">
                        <div>
                            <h1 class="font-bold text-4xl">{{ \Carbon\Carbon::parse($event->event_date)->format('d') }}</h1>
                            <h2 class="font-bold text-xl uppercase">{{ \Carbon\Carbon::parse($event->event_date)->format('M') }}</h2>
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
                                    {{  $event->name }}
                                </h1>

                            </div>
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

                @empty
                        <div class="items-center mx-auto text-center">
                            <p >No Upcoming events</p>
                            <a class="underline font-bold text-primary text-lg" href="{{ route('event.index') }}">View all Events</a>
                        </div>

                @endforelse

            </div>
        </div>
        @endif

    </div>





    <footer class="bg-primary w-full shadow dark:bg-gray-900  z-50">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="{{ base_path('node_modules/flowbite/dist/flowbite.min.js') }}"></script>
    @livewireScripts
</body>

</html>
