@extends('layouts.app')

@section('title', 'Home Page')
@section('hero')
    <div class="bg-white">
        <div class="relative bg-dark-blue">
            <div class="absolute inset-0">
                <img class="w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1581092921461-eab62e97a780?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    alt="Computer repair workstation">
                <div class="absolute inset-0 bg-gradient-to-r from-[#0b5dc0]/80 to-[#18181b]/80 mix-blend-multiply"
                    aria-hidden="true"></div>
            </div>
            <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-extrabold tracking-tight text-[#f69c32] sm:text-5xl lg:text-6xl">
                    About ComputerFixPlus
                </h1>
                <p class="mt-6 max-w-3xl text-xl text-gray-200">
                    Your trusted partner in computer repair and maintenance. We're passionate about technology and
                    dedicated to keeping your devices running smoothly.
                </p>
            </div>
        </div>
    @endsection

    @section('content')


        <div class="bg-gray-100 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="font-semibold leading-7 text-[#f69c32] text-3xl">Why Choose Us</h2>
                    <p class="mt-2 text-base font-bold tracking-tight text-gray-900 text-base text-xl">
                        Reasons to Trust Our Expertise
                    </p>
                    {{-- <p class="mt-6 text-lg leading-8 text-gray-600">
                        We're committed to delivering exceptional value and service to our clients. Here's why you should
                        choose us:
                    </p> --}}
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                    <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:gap-x-16">
                        @foreach ($whychooseus as $option)
                            {{-- <div class="flex gap-4 flex-col items-center justify-center border-2 bg-gray-50">
                                <x-dynamic-component :component="'lucide-' . $option['icon']" class="w-12 h-12 text-purple-600 mb-4" />
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $option['title'] }}</h3>
                                    <p class="text-gray-600">{{ $option['description'] }}</p>
                                </div>
                            </div> --}}
                            <div
                                class="flex flex-col items-center p-6 bg-white rounded-lg shadow-none transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                                <div class="flex items-center justify-center w-16 h-16 bg-indigo-100 rounded-full mb-4">
                                    {{-- <x-lucide-users class="w-8 h-8 text-[#f69c32]" /> --}}
                                    <x-dynamic-component :component="'lucide-' . $option['icon']" class="w-8 h-8 text-[#f69c32]" />

                                </div>
                                {{-- <div class="text-4xl font-bold text-indigo-600 mb-2">120</div> --}}
                                <h3 class="text-xl font-semibold text-gray-900 mb-2 text-center">{{ $option['title'] }}</h3>
                                <p class="text-gray-600 text-center">{{ $option['description'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>



        <div class="bg-gradient-to-b from-indigo-50 to-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">

                    @foreach ($numbers as $number)
                        <div
                            class="flex flex-col items-center p-6 bg-white rounded-lg shadow-none transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                            <div class="flex items-center justify-center w-16 h-16 bg-indigo-100 rounded-full mb-4">
                                <x-dynamic-component :component="'lucide-' . $number['icon']" class="w-8 h-8 text-[#f69c32]" />
                            </div>
                            <div class="text-4xl font-bold text-indigo-600 mb-2">{{ $number['number'] }}</div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2 text-center">{{ $number['title'] }}
                            </h3>
                            <p class="text-gray-600 text-center">
                                {{ $number['description'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
