@extends('layouts.app')

@section('title', 'Home Page')

@section('hero')
    <div class="relative h-[500px] bg-gray-900">
        <Image
            src="https://images.unsplash.com/photo-1597872200969-2b65d56bd16b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80"
            alt="Computer repair technician working on a laptop" layout="fill" objectFit="cover" class="opacity-50"
            priority />
        <div class="absolute inset-0 bg-black bg-opacity-50" />
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
    </div>
@endsection

@section('content')

    <main class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl font-bold text-gray-900 text-center mb-8">Get Your Computer Fix Quote!</h1>
            <div class="bg-white shadow-none rounded-lg overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2 p-6">
                        <form method="POST" action="" class="space-y-4">
                            @csrf
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">First Name</label>
                                    <input type="text" name="firstName" required class="mt-1 w-full p-2 border rounded">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Last Name</label>
                                    <input type="text" name="lastName" required class="mt-1 w-full p-2 border rounded">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                                <input type="tel" name="phoneNumber" required class="mt-1 w-full p-2 border rounded">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" required class="mt-1 w-full p-2 border rounded">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Describe Your Computer
                                    Issue</label>
                                <textarea name="problem" rows="4" required class="mt-1 w-full p-2 border rounded"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Get
                                Your
                                Quote</button>
                        </form>
                    </div>
                    <div class="md:w-1/2 bg-gray-50 p-6">
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Contact Us</h2>
                        <p class="flex items-center text-gray-600"><span class="mr-2">📞</span> (123) 456-7890</p>
                        <p class="flex items-center text-gray-600"><span class="mr-2">📧</span>
                            info@techfixrepair.com
                        </p>
                        <p class="flex items-center text-gray-600"><span class="mr-2">📍</span> 123 Tech Street,
                            Cityville, ST 12345</p>
                        <p class="flex items-center text-gray-600"><span class="mr-2">⏰</span> Mon-Fri: 9AM-6PM |
                            Sat:
                            10AM-4PM | Sun: Closed</p>
                        <div class="h-64 w-full mt-4">
                            <iframe src="https://www.google.com/maps/embed?..." width="100%" height="100%"
                                style="border:0;" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
