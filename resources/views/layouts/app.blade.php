<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <header>
        <nav class="shadow-md relative z-50 bg-[#1676d0] bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/">
                            <img src="{{ asset('images/computerfixplus.png') }}" alt="computerfixplus logo"
                                width="90" height="90">
                        </a>
                    </div>
                    <div class="hidden md:flex items-center space-x-4 text-white font-bold">
                        <a href="/" class="text-dark-blue hover:text-[#f69c32]">Home</a>
                        <a href="/#services" class="text-dark-blue hover:text-[#f69c32]">Services</a>
                        <a href="/#ourwork" class="text-dark-blue hover:text-[#f69c32]">OurWork</a>
                        <a href="/aboutus" class="text-dark-blue hover:text-[#f69c32]">AboutUs</a>
                        <a href="/quote"
                            class="bg-[#f69c32] text-white hover:bg-yellow hover:text-dark-blue px-4 py-2 rounded-md transition duration-300">
                            Get a Quote
                        </a>
                    </div>
                    <div class="md:hidden flex items-center">
                        <button id="menu-toggle" class="text-dark-blue hover:text-primary z-50">
                            <svg id="menu-icon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#ffbd2e">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div id="mobile-menu"
                class="hidden md:hidden fixed inset-0 bg-white bg-opacity-100 z-40 flex items-center justify-center">
                <div class="text-center space-y-8">
                    <a href="/" class="block text-2xl text-dark-blue hover:text-[#f69c32] py-2">Home</a>
                    <a href="/#services" class="block text-2xl text-dark-blue hover:text-[#f69c32] py-2">Services</a>
                    <a href="/#ourwork" class="block text-2xl text-dark-blue hover:text-[#f69c32] py-2">OurWork</a>
                    <a href="/aboutus" class="block text-2xl text-dark-blue hover:text-[#f69c32] py-2">AboutUs</a>
                    <a href="/contactus" class="block text-2xl text-dark-blue hover:text-[#f69c32] py-2">ContactUs</a>
                    <a href="/quote"
                        class="inline-block bg-secondary text-white hover:bg-yellow hover:text-dark-blue px-6 py-3 rounded-md transition duration-300">
                        Get a Quote
                    </a>
                </div>
            </div>
        </nav>
        @yield('hero')
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 shadow-lg mt-auto">
        <div class="container mx-auto px-8 py-20">
            <div class="grid grid-cols-1  md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="space-y-0">
                    <a href="/" class="">
                        <img src="{{ asset('images/computerfixplus.png') }}" alt="computerfixplus logo" width="120"
                            height="120">
                    </a>
                    <p class="text-gray-300 text-base">
                        We fix any computer problem. Bring us your broken laptop, MacBook, or desktop PC today for
                        fast
                        computer help. </p>
                </div>

                <div class="space-y-6">
                    <h3 class="text-base font-semibold text-white uppercase tracking-wider">Quick Links</h3>
                    <ul class="space-y-4">
                        <li><a href="/" class="text-gray-300 hover:text-[#f69c32] transition-colors">Home</a>
                        </li>
                        <li><a href="/#services"
                                class="text-gray-300 hover:text-[#f69c32] transition-colors">Services</a>
                        </li>
                        <li><a href="/#ourwork" class="text-gray-300 hover:text-[#f69c32] transition-colors">Our
                                Work</a>
                        </li>
                        <li><a href="/quote" class="text-gray-300 hover:text-[#f69c32] transition-colors">Get
                                Quote</a></li>
                    </ul>
                </div>

                <div class="space-y-6">
                    <h3 class="text-base font-semibold text-white uppercase tracking-wider">Contact</h3>
                    <ul class="space-y-4">
                        <div class="flex gap-2">
                            <x-lucide-phone class="h-6 w-6 text-gray-300" />
                            <p class="text-gray-300">+1(703)-890-6666</p>
                        </div>
                        <div class="flex gap-2">
                            <x-lucide-mail class="h-6 w-6 text-gray-300" />
                            <p class="text-gray-300">computerfixplus@hotmail.com</p>
                        </div>
                        <div class="flex gap-2">
                            <x-lucide-map-pin class="h-6 w-6 text-gray-300" />
                            <p class="text-gray-300">4215 Downing St.
                                Annandale VA 22003</p>
                        </div>
                    </ul>
                </div>

                <div class="space-y-6">
                    <h3 class="text-base font-semibold text-white uppercase tracking-wider">Hours</h3>
                    <ul class="space-y-4 text-gray-300">
                        <li>Mon-Saturday: 10:00 AM - 5:30 PM</li>
                        <li>Sunday: 10:30 AM - 4:00 PM</li>
                    </ul>
                </div>

                <div class="space-y-6">
                    <h3 class="text-base font-semibold text-white uppercase tracking-wider">Follow Us</h3>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">
                            <x-lucide-instagram class="h-6 w-6 text-yellow-400" />

                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">
                            <x-lucide-twitter class="h-6 w-6 text-yellow-400" />

                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">
                            <x-lucide-instagram class="h-6 w-6 text-yellow-400" />

                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-gray-600">
                <p class="text-center text-gray-400 text-sm">
                    © {{ date('Y') }} ComputerFixPlus. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.getElementById("menu-toggle");
        const menu = document.getElementById("mobile-menu");
        const menuIcon = document.getElementById("menu-icon");

        menuToggle.addEventListener("click", function() {
            menu.classList.toggle("hidden");
            document.body.style.overflow = menu.classList.contains("hidden") ? "unset" : "hidden";

            menuIcon.innerHTML = menu.classList.contains("hidden") ?
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />' :
                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />';
        });
    });
</script>

</html>
