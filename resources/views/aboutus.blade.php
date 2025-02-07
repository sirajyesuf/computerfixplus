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

    <div class="bg-white">
        {{-- Hero Section --}}
        <div class="relative bg-dark-blue">
            <div class="absolute inset-0">
                <img class="w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1581092921461-eab62e97a780?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    alt="Computer repair workstation">
                <div class="absolute inset-0 bg-dark-blue bg-opacity-75 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                    About TechFix Pro
                </h1>
                <p class="mt-6 max-w-3xl text-xl text-gray-300">
                    Your trusted partner in computer repair and maintenance. We're passionate about technology and
                    dedicated to keeping your devices running smoothly.
                </p>
            </div>
        </div>

        {{-- Mission Statement --}}
        <div class="bg-white py-16 sm:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-primary font-semibold tracking-wide uppercase">Our Mission</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-dark-blue sm:text-4xl">
                        Empowering Your Digital Life
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        At TechFix Pro, we strive to provide top-notch computer repair services, ensuring that
                        technology enhances rather than hinders your daily life and business operations.
                    </p>
                </div>
            </div>
        </div>

        {{-- Key Features --}}
        <div class="bg-gray-50 py-16 sm:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold text-dark-blue sm:text-4xl">Why Choose TechFix Pro?</h2>
                    <p class="mt-3 text-xl text-gray-500 sm:mt-4">
                        We combine expertise, efficiency, and customer-centric service to deliver unparalleled computer
                        repair solutions.
                    </p>
                </div>
                <div
                    class="mt-12 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:grid-cols-4 lg:gap-x-8">
                    @foreach ([['name' => 'Quick Turnaround', 'description' => 'Most repairs completed within 24-48 hours', 'icon' => 'clock'], ['name' => 'Expert Technicians', 'description' => 'Certified professionals with years of experience', 'icon' => 'users'], ['name' => 'Quality Guarantee', 'description' => '90-day warranty on all our repair services', 'icon' => 'award'], ['name' => 'Customer Satisfaction', 'description' => '98% customer satisfaction rate', 'icon' => 'thumbs-up']] as $feature)
                        <div class="relative">
                            <dt>
                                <div
                                    class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                    <i class="fas fa-{{ $feature['icon'] }} h-6 w-6" aria-hidden="true"></i>
                                </div>
                                <p class="ml-16 text-lg leading-6 font-medium text-dark-blue">{{ $feature['name'] }}</p>
                            </dt>
                            <dd class="mt-2 ml-16 text-base text-gray-500">{{ $feature['description'] }}</dd>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Team Section --}}
        <div class="bg-white py-16 sm:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-primary font-semibold tracking-wide uppercase">Our Team</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-dark-blue sm:text-4xl">
                        Meet the Experts Behind TechFix Pro
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        Our skilled technicians bring years of experience and a passion for technology to every repair.
                    </p>
                </div>
                <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-10">
                    @foreach ([['name' => 'Jane Doe', 'role' => 'Founder & Lead Technician', 'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80'], ['name' => 'John Smith', 'role' => 'Hardware Specialist', 'image' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80']] as $person)
                        <div class="flex flex-col items-center">
                            <img class="h-40 w-40 rounded-full" src="{{ $person['image'] }}"
                                alt="{{ $person['name'] }}">
                            <div class="mt-4 text-center">
                                <h3 class="text-lg leading-6 font-medium text-dark-blue">{{ $person['name'] }}</h3>
                                <p class="text-sm text-gray-500">{{ $person['role'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- CTA Section --}}
        <div class="bg-primary text-center py-16">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Ready to fix your tech issues?</h2>
            <p class="mt-4 text-lg text-white">Whether it's a quick repair or a complex technical challenge, we're here
                to help.</p>
            <a href="/contact"
                class="mt-8 px-5 py-3 text-base font-medium rounded-md text-primary bg-white hover:bg-yellow hover:text-dark-blue">Contact
                Us</a>
        </div>
    </div>



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
