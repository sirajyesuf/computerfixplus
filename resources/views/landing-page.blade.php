@extends('layouts.app')

@section('title', 'Home Page')
    


@section('content')
   
       
   
    <div class="bg-white overflow-hidden pt-16 min-h-[90v] ">
        <div class="container mx-auto flex flex-col-reverse lg:flex-row items-center">
            <!-- Left Side - Text Content -->
            <div
                class="w-full lg:w-1/2 flex items-center justify-center lg:justify-start px-6 lg:px-12 text-center lg:text-left">
                <div>
                    <h1 class="text-4xl font-extrabold sm:text-5xl md:text-6xl">
                        <span class="block text-[#0b5dc0]">Expert Computer Repair Services</span>
                        <br />
                        <span class="block text-[#18181b]">Fast, Reliable & Affordable</span>
                    </h1>
                    <p class="mt-4 text-gray-600 text-lg md:text-xl">
                        We provide top-notch computer repair services to keep your devices running smoothly. Our skilled
                        technicians are ready to tackle any issue, big or small.
                    </p>
                    <div class="mt-6">
                        <a href="/quote"
                            class="inline-block px-8 py-3 text-lg font-medium text-white bg-[#ffbd2e] rounded-md hover:bg-[#e6a800] transition duration-300">
                            Get Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Side - Image (Background on Mobile) -->
            <div class="w-full lg:w-1/2 relative">
                <div class="lg:hidden absolute inset-0 bg-cover bg-center"
                    style="background-image: url('{{ asset('images/computerfixplushero.png') }}'); opacity: 0.2;"></div>
                <img src="{{ asset('images/computerfixplushero.png') }}" alt="Technician repairing a computer"
                    class="hidden lg:block w-full h-auto rounded-md">
            </div>
        </div>
    </div>
   



    <section class="py-12 bg-gray-50" id="services">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-dark-blue sm:text-4xl">Our Services</h2>
                <p class="mt-4 text-xl text-gray-500">Comprehensive solutions for all your tech needs</p>
            </div>
            <div class="mt-12 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($services as $service)
                    <div class="bg-white overflow-hidden shadow-none rounded-lg">
                        <div class="relative h-56">
                            <img src="/{{ $service['image'] }}" alt="{{ $service['title'] }}"
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


    <section class="py-12 bg-gray-50" id="ourwork">
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


    <section class="py-20 bg-gray-50 border-none">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Customer Ratings</h2>
            <div class="grid md:grid-cols-3 gap-8 bg-gray-50 p-4">
                @foreach ([['platform' => 'Google', 'icon' => 'google', 'color' => 'text-red-500', 'rating' => '4.9', 'reviews' => '150+'], ['platform' => 'Yelp', 'icon' => 'yelp', 'color' => 'text-red-600', 'rating' => '4.8', 'reviews' => '100+'], ['platform' => 'Facebook', 'icon' => 'facebook', 'color' => 'text-blue-600', 'rating' => '4.9', 'reviews' => '200+']] as $review)
                    <div class="bg-white p-8 rounded-lg shadow-none text-center">
                        {{-- <x-lucide-{{ $review['icon'] }} class="h-12 w-12 {{ $review['color'] }} mx-auto mb-4" /> --}}
                        <div class="bg-white flex items-center justify-center">
                            <img src="{{ asset('images/' . $review['icon']) . '.png' }}" alt="" width="80"
                                height="80" class="w-[80px] h-[80px] object-cover">

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
@endsection
