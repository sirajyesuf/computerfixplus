<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans">
    <nav class="shadow-md relative z-50 bg-[#1676d0]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/">
                        <img src="{{ asset('images/computerfixplus.png') }}" alt="computerfixplus logo" width="90"
                            height="90">
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-4 text-white font-bold">
                    <a href="/" class="text-dark-blue hover:text-primary">Home</a>
                    <a href="/about" class="text-dark-blue hover:text-primary">About</a>
                    <a href="/services" class="text-dark-blue hover:text-primary">Services</a>
                    <a href="/testimonials" class="text-dark-blue hover:text-primary">Testimonials</a>
                    <a href="/contact" class="text-dark-blue hover:text-primary">Contact</a>
                    <a href="/quote"
                        class="bg-[#f69c32] text-white hover:bg-yellow hover:text-dark-blue px-4 py-2 rounded-md transition duration-300">
                        Get a Quote
                    </a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="menu-toggle" class="text-dark-blue hover:text-primary z-50">
                        <svg id="menu-icon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu"
            class="hidden md:hidden fixed inset-0 bg-blue-500 bg-opacity-50 z-40 flex items-center justify-center">
            <div class="text-center space-y-8">
                <a href="/" class="block text-2xl text-dark-blue hover:text-primary py-2">Home</a>
                <a href="/about" class="block text-2xl text-dark-blue hover:text-primary py-2">About</a>
                <a href="/services" class="block text-2xl text-dark-blue hover:text-primary py-2">Services</a>
                <a href="/testimonials" class="block text-2xl text-dark-blue hover:text-primary py-2">Testimonials</a>
                <a href="/contact" class="block text-2xl text-dark-blue hover:text-primary py-2">Contact</a>
                <a href="/quote"
                    class="inline-block bg-secondary text-white hover:bg-yellow hover:text-dark-blue px-6 py-3 rounded-md transition duration-300">
                    Get a Quote
                </a>
            </div>
        </div>
    </nav>

    <div class="relative bg-white overflow-hidden mt-20">
        <div class="container mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-5xl">
                            <span class="block xl:inline text-[#0b5dc0]">Expert Computer Repair Services</span>
                            <br />
                            <span class="block text-[#18181b] xl:inline">Fast, Reliable & Affordable</span>
                        </h1>
                        <p
                            class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            We provide top-notch computer repair services to keep your devices running smoothly. Our
                            team of skilled
                            technicians is ready to tackle any issue, big or small.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="/book"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-[#ffbd2e] hover:bg-[#ffbd2e] hover:text-dark-blue md:py-4 md:text-lg md:px-10 transition duration-300">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- Right Side Image -->
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 hidden lg:block border-2 rounded-sm">
            <img src="{{ asset('images/computerfixplushero.png') }}" alt="Technician repairing a computer"
                class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full">
        </div>
    </div>

    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-dark-blue sm:text-4xl">Our Services</h2>
                <p class="mt-4 text-xl text-gray-500">Comprehensive solutions for all your tech needs</p>
            </div>
            <div class="mt-12 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($services as $service)
                    <div class="bg-white overflow-hidden shadow-none rounded-lg">
                        <div class="relative h-48">
                            <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-dark-blue">{{ $service['title'] }}</h3>
                            <p class="mt-2 text-gray-500">{{ $service['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-dark-blue sm:text-4xl">Our Work</h2>
                <p class="mt-4 text-xl text-gray-500">
                    We're proud of the computer repairs we've accomplished. See a few of the devices we've fixed.
                </p>
            </div>
            <div class="mt-12 grid gap-8 grid-cols-1 sm:grid-cols-2">
                @php
                    $repairs = [
                        [
                            'id' => 1,
                            'title' => 'Custom Gaming Desktop Repair',
                            'description' => 'Repaired and optimized a high-end gaming PC for maximum performance.',
                            'image' =>
                                'https://images.unsplash.com/photo-1587202372616-b43abea06c2a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                        ],
                        [
                            'id' => 2,
                            'title' => 'CPU Fan Installation',
                            'description' => 'Installed a high-performance CPU cooler for better thermal management.',
                            'image' =>
                                'https://images.unsplash.com/photo-1591488320449-011701bb6704?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                        ],
                        [
                            'id' => 3,
                            'title' => 'Gaming Graphics Card Installation',
                            'description' =>
                                'Upgraded a gaming rig with the latest graphics card for enhanced visuals.',
                            'image' =>
                                'https://images.unsplash.com/photo-1591489378430-ef2f4c626b35?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                        ],
                        [
                            'id' => 4,
                            'title' => 'Computer RAM Memory Upgrade',
                            'description' => 'Boosted system performance with a RAM upgrade for smoother multitasking.',
                            'image' =>
                                'https://images.unsplash.com/photo-1562976540-1502c2145186?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80',
                        ],
                    ];
                @endphp

                @foreach ($repairs as $repair)
                    <div class="relative overflow-hidden rounded-md shadow-none group">
                        <img src="{{ $repair['image'] }}" alt="{{ $repair['title'] }}"
                            class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-70 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <h3 class="text-lg font-semibold">{{ $repair['title'] }}</h3>
                            <p class="mt-2 text-sm">{{ $repair['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="py-20 bg-gray-50 border-2">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Customer Ratings</h2>
            <div class="grid md:grid-cols-3 gap-8 bg-gray-50 p-4">
                @foreach ([['platform' => 'Google', 'icon' => 'google', 'color' => 'text-red-500', 'rating' => '4.9', 'reviews' => '150+'], ['platform' => 'Yelp', 'icon' => 'yelp', 'color' => 'text-red-600', 'rating' => '4.8', 'reviews' => '100+'], ['platform' => 'Facebook', 'icon' => 'facebook', 'color' => 'text-blue-600', 'rating' => '4.9', 'reviews' => '200+']] as $review)
                    <div class="bg-white p-8 rounded-lg shadow-none text-center">
                        {{-- <x-lucide-{{ $review['icon'] }} class="h-12 w-12 {{ $review['color'] }} mx-auto mb-4" /> --}}
                        <div class="bg-white flex items-center justify-center bg-white">
                            <img src="{{ asset('images/' . $review['icon']) . '.png' }}" alt=""
                                width="80" height="80" class="w-[80px] h-[80px] object-cover">

                        </div>
                        <h3 class="text-xl font-semibold mb-4">{{ $review['platform'] }}</h3>
                        <div class="flex justify-center space-x-1 mb-3">
                            @for ($i = 0; $i < 5; $i++)
                                {{-- <x-lucide-star class="h-6 w-6 text-yellow-400 fill-current" /> --}}
                                {{-- <x-dynamic-component :component="'lucide-' . $feature['icon']" class="w-10 h-10 text-purple-600 mb-4" /> --}}
                                <x-lucide-star class="h-6 w-6 text-yellow-400 fill-current" />
                            @endfor
                        </div>
                        {{-- <p class="text-gray-600">{{ $review['rating'] }} out of 5</p> --}}
                        {{-- <p class="text-sm text-gray-500 mt-2">Based on {{ $review['reviews'] }} reviews</p> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <footer class="bg-[#f69c32] text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-yellow tracking-wider uppercase mb-4">Services</h3>
                    <ul class="space-y-4">
                        @foreach (['Backup PC', 'Virus Protection', 'Hardware Repair', 'Motherboard Repair', 'Liquid Damage Repair', 'Technical Support'] as $item)
                            <li>
                                <a href="#" class="text-base hover:text-white">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-yellow tracking-wider uppercase mb-4">Company</h3>
                    <ul class="space-y-4">
                        @foreach (['About', 'Blog', 'Jobs', 'Press', 'Partners'] as $item)
                            <li>
                                <a href="#" class="text-base hover:text-white">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-yellow tracking-wider uppercase mb-4">Contact Us</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            {{-- <x-lucide-phone class="flex-shrink-0 h-6 w-6 text-gray-400" /> --}}
                            <span class="ml-3 text-base">+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            {{-- <x-lucide-mail class="flex-shrink-0 h-6 w-6 text-gray-400" /> --}}
                            <span class="ml-3 text-base">support@techfixpro.com</span>
                        </li>
                        <li class="flex items-center">
                            {{-- <x-lucide-map-pin class="flex-shrink-0 h-6 w-6 text-gray-400" /> --}}
                            <span class="ml-3 text-base">123 Tech Street, Silicon Valley, CA 94000</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex space-x-6 md:order-2">
                    @foreach (['facebook', 'twitter', 'instagram', 'linkedin'] as $social)
                        <a href="#" class="">
                            <span class="sr-only">{{ ucfirst($social) }}</span>
                            {{-- <x-lucide-{{ $social }} class="h-6 w-6" /> --}}
                        </a>
                    @endforeach
                </div>
                <p class="mt-8 text-base  md:mt-0 md:order-1">
                    &copy; {{ date('Y') }} TechFix Pro. All rights reserved.
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
