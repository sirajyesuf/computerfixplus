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
    <header class="overflow-hidden fixed top-0 left-0 right-0 z-50 transition-all duration-300  bg-gray-50 p-0">
        <div class="flex md:justify-end justify-between items-center space-x-4 bg-[#0c63c7] p-2 border-2 pr-4">
            <div class="flex flex-col md:flex-row   md:space-x-4  border-none space-y-2 md:space-y-0">
                <a href="tel:+17038906666" class="flex items-center space-x-1 border-none">
                    <x-lucide-phone class="h-6 w-6 text-white" />
                    <span class="text-white text-md">+1(703)-890-6666</span>
                </a>
                <a href="#" class="flex items-center space-x-1 border-none">
                    <x-lucide-clock class="h-6 w-6 text-white" />
                    <span class="text-white text-md">Mon-Sat: 9AM-6PM</span>
                </a>
            </div>

            <div class="flex items-center space-x-2">
                <a href="https://www.instagram.com/computerfixplus/" class="text-gray-400 hover:text-blue-400 transition-colors">
                    <x-lucide-instagram class="h-6 w-6  text-white" />

                </a>
                <a href="https://x.com/computerfixplus" class="text-gray-400 hover:text-blue-400 transition-colors">
                    <x-lucide-twitter class="h-6 w-6 text-white" />

                </a>

                <a href="https://web.facebook.com/profile.php?id=61572747717891" class="text-gray-400 hover:text-blue-400 transition-colors">
                    <x-lucide-facebook class="h-6 w-6 text-white" />

                </a>

                <a href="https://www.tiktok.com/@computerfixplus" class="border-none transition-colors w-6 h-6">
                <div class="w-full h-full bg-white"
                style="
                -webkit-mask-image: url('/images/tiktok.svg');
                mask-image: url('/images/tiktok.svg');
                -webkit-mask-repeat: no-repeat;
                mask-repeat: no-repeat;
                -webkit-mask-size: contain;
                mask-size: contain;
                -webkit-mask-position: center;
                mask-position: center;
                ">
                </div>
                </a>

            </div>


        </div>
        <nav class="max-w-7xl mx-auto shadow-none h-16 flex flex-col border-none border-red-700">
            <!-- <div class="max-w-7xl mx-auto  bg-red-300 border border-red-400"> -->
                <div class="flex justify-between  items-center border-none border-yellow-500">


                    <a href="/" class="flex-shrink-0 items-center justify-center border-none border-blue-500">

                        <img src="{{ asset('images/cfp2.png') }}" alt="computerfixplus logo"
                        class="object-center w-auto h-[65px]"
                        >
                    </a>

                    <div class="hidden md:flex items-center space-x-4 text-black font-bold">
                        <a href="/" class="text-dark-blue hover:text-[#f69c32]">Home</a>
                        <a href="/#services" class="text-dark-blue hover:text-[#f69c32]">Services</a>
                        <a href="/#ourwork" class="text-dark-blue hover:text-[#f69c32]">OurWork</a>
                        <a href="/aboutus" class="text-dark-blue hover:text-[#f69c32]">AboutUs</a>
                        <a href="/quote"
                            class="bg-[#f69c32] text-white hover:bg-yellow hover:text-dark-blue px-4 py-2 rounded-md transition duration-300">
                            Get a Quote
                        </a>
                    </div>
                    <div class="md:hidden flex items-center border-none pr-4">
                        <button id="menu-toggle" class="text-dark-blue hover:text-primary z-50">
                            <svg id="menu-icon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#ffbd2e">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>

                        </button>
                    </div>
                </div>
            <!-- </div> -->

            <div id="mobile-menu"
                class="md:hidden fixed inset-0 bg-white bg-opacity-100 z-40 flex items-center justify-center hidden">
                <div class="text-center space-y-8 space-x-2">
                    <a href="/" class="block text-2xl text-dark-blue hover:text-[#f69c32] py-2">Home</a>
                    <a href="/#services" class="block text-2xl text-dark-blue hover:text-[#f69c32] py-2">Services</a>
                    <a href="/#ourwork" class="block text-2xl text-dark-blue hover:text-[#f69c32] py-2">OurWork</a>
                    <a href="/aboutus" class="block text-2xl text-dark-blue hover:text-[#f69c32] py-2">AboutUs</a>
                    <a href="/quote"
                        class="bg-[#f69c32] text-white hover:bg-yellow hover:text-dark-blue px-4 py-2 rounded-md transition duration-300">
                        Get a Quote
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="mt-20 border-none">
        @yield('content')
    </main>

    <footer class="bg-gray-800 shadow-lg mt-auto">
        <div class="cont</div>ainer mx-auto px-8 py-20">
            <div class="grid grid-cols-1  md:grid-cols-3 lg:grid-cols-5 gap-6">
                <div class="space-y-2 border-none ">
                    <a href="/" class="">
                        <img src="{{ asset('images/cfp2.png') }}" alt="computerfixplus logo" width="120"
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
                        <li>Mon-Saturday: 9:00AM - 6:00PM</li>
                        <li>Sunday: 10:30 AM - 4:00 PM</li>
                    </ul>
                </div>



                <div class="space-y-6 border-0">
                    <h3 class="text-base font-semibold text-white uppercase tracking-wider">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="https://www.instagram.com/computerfixplus/" class="text-gray-400 hover:text-blue-400 transition-colors">
                            <x-lucide-instagram class="h-6 w-6 text-yellow-400" />

                        </a>
                        <a href="https://x.com/computerfixplus" class="text-gray-400 hover:text-blue-400 transition-colors">
                            <x-lucide-twitter class="h-6 w-6 text-yellow-400" />

                        </a>

                        <a href="https://web.facebook.com/profile.php?id=61572747717891" class="text-gray-400 hover:text-blue-400 transition-colors">
                            <x-lucide-facebook class="h-6 w-6 text-yellow-500" />

                        </a>


                        <a href="https://www.tiktok.com/@computerfixplus" class="border-none transition-colors w-6 h-6">
                        <div class="w-full h-full bg-yellow-400"
                        style="
                        -webkit-mask-image: url('/images/tiktok.svg');
                        mask-image: url('/images/tiktok.svg');
                        -webkit-mask-repeat: no-repeat;
                        mask-repeat: no-repeat;
                        -webkit-mask-size: contain;
                        mask-size: contain;
                        -webkit-mask-position: center;
                        mask-position: center;
                        ">
                        </div>
                        </a>
                    </div>
                </div>


            <div class="border-0  flex flex-col text-gray-400 gap-4 justify-end">
                <h3 class="text-base font-semibold text-white uppercase tracking-wider">Legal</h3>

                <a href="/privacypolicy"
                class="flex flex-row gap-1"
                >
                    Privacy Policy
                </a>
                <a href="/terms"
                class="flex flex-row gap-1"
                > Terms and Conditions

                </a>
                {{-- <a href="smstermsofservice"
                class="flex flex-row gap-1"
                > SMS Terms of service

                </a>     --}}

                </div>
            </div>


            <div class="flex   justify-between  mt-12 pt-8 border-t border-gray-600">
                <p class=" text-gray-400 text-sm">
                    © {{ date('Y') }} ComputerFixPlus. All rights reserved.
                </p>

                <p class="text-gray-400">
                    Powered by santa trading plc
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
