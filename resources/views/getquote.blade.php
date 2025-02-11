@extends('layouts.app')

@section('title', 'Home Page')

@section('hero')
    <div class="relative h-[500px] bg-gray-900">
        {{-- <Image
            src="https://images.unsplash.com/photo-1597872200969-2b65d56bd16b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80"
            alt="Computer repair technician working on a laptop" layout="fill" objectFit="cover" class="opacity-50"
            priority /> --}}
        {{-- <div class="absolute inset-0 bg-black bg-opacity-50" />
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center max-w-3xl mx-auto px-4">
                <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Expert Computer Repair Services</h1>
                <p class="text-xl text-gray-200 mb-8">
                    Fast, reliable, and affordable solutions for all your tech problems
                </p>
                <Button class="bg-primary text-primary-foreground hover:bg-primary/90 text-lg px-8 py-3">
                    Get Your Quote Now
                </Button>
            </div>
        </div>
    </div> --}}

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
                    <h1 class="text-4xl font-extrabold tracking-tight text-[#f69c32] sm:text-5xl lg:text-6xl capitalize">
                        get a quote
                    </h1>
                    <p class="mt-6 max-w-3xl text-xl text-gray-200">
                        Your trusted partner in computer repair and maintenance. We're passionate about technology and
                        dedicated to keeping your devices running smoothly.
                    </p>
                </div>
            </div>
        @endsection
    @endsection

    @section('content')

        <main class="py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-4xl font-bold text-gray-900 text-center mb-8">Get Your Computer Fix Quote!</h1>
                <div class="bg-white shadow-none rounded-lg overflow-hidden">
                    @if (session('success'))
                        <div class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">
                            {{ session('success') }}
                        </div>
                    @endif




                    <div class="md:flex">
                        <div class="md:w-1/2 p-6">
                            <form method="POST" action="{{ route('getquote.email') }}" class="space-y-4">
                                @csrf

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Full Name</label>
                                    <input type="text" name="fullname" required
                                        class="mt-1 w-full p-2 border rounded">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" name="email" required
                                        class="mt-1 w-full p-2 border rounded">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Describe Your Computer
                                        Issue</label>
                                    <textarea name="problem" rows="4" required class="mt-1 w-full p-2 border rounded"></textarea>
                                </div>
                                <button type="submit"
                                    class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Get
                                    Your
                                    Quote</button>
                            </form>
                        </div>
                        <div class="md:w-1/2 bg-gray-50 p-6">
                            <div class="h-full w-full mt-4">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.0567729499917!2d-77.1617539886525!3d38.83223445042889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b30e0f0f945f%3A0x3976241504556af6!2s4215%20Downing%20St%2C%20Annandale%2C%20VA%2022003%2C%20USA!5e1!3m2!1sen!2set!4v1739212705755!5m2!1sen!2set"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
