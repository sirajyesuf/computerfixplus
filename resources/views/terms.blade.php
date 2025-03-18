{{-- @extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-none mt-8">
    <h1 class="text-2xl font-bold mb-4">SMS Terms & Conditions</h1>

    <p class="text-gray-700">
        By opting into SMS communications, you agree to receive messages from <strong>Computer Fix Plus</strong> related to:
    </p>

    <ul class="list-disc list-inside text-gray-700 mt-4">
        <li>Appointment scheduling and reminders</li>
        <li>Repair service updates</li>
        <li>Billing notifications</li>
        <li>Promotional offers (if subscribed)</li>
    </ul>

    <h2 class="text-xl font-semibold mt-6">Message Frequency</h2>
    <p class="text-gray-700">Message frequency varies based on service updates and customer interactions. Standard message and data rates may apply.</p>

    <h2 class="text-xl font-semibold mt-6">Opting Out</h2>
    <p class="text-gray-700">
        You can opt out of receiving SMS messages at any time by texting <strong>STOP</strong>. After opting out, you will no longer receive messages from us.
    </p>

    <h2 class="text-xl font-semibold mt-6">Help & Support</h2>
    <p class="text-gray-700">
        For assistance, text <strong>HELP</strong> or visit our website at  
        <a href="https://computerfixplus.com/" class="text-blue-500 underline">computerfixplus.com</a>.
    </p>

    <h2 class="text-xl font-semibold mt-6">Privacy Policy</h2>
    <p class="text-gray-700">
        Your phone number and SMS consent will not be shared with third parties or affiliates for marketing purposes.  
        Read our full <a href="{{ route('privacy.policy') }}" class="text-blue-500 underline">Privacy Policy</a>.
    </p>
</div>
@endsection --}}


@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-none">
    <h1 class="text-2xl font-bold mb-4">SMS Terms & Conditions</h1>

    <p class="text-gray-700">
        By contacting <strong>Computer Fix Plus</strong> via our website, you may receive SMS messages related to your inquiry or repair service. These messages may include:
    </p>

    <ul class="list-disc list-inside text-gray-700 mt-4">
        <li>Responses to your inquiries</li>
        <li>Service availability updates</li>
        <li>Appointment confirmations (if applicable)</li>
    </ul>

    <h2 class="text-xl font-semibold mt-6">Message Frequency</h2>
    <p class="text-gray-700">You will only receive SMS messages in response to your inquiries. Message frequency varies. Standard message and data rates may apply.</p>

    <h2 class="text-xl font-semibold mt-6">Opting Out</h2>
    <p class="text-gray-700">
        If you no longer wish to receive SMS messages, you can opt out at any time by replying <strong>STOP</strong>.
    </p>

    <h2 class="text-xl font-semibold mt-6">Help & Support</h2>
    <p class="text-gray-700">
        For assistance, reply <strong>HELP</strong> or visit our website at  
        <a href="https://computerfixplus.com" class="text-blue-500 underline">computerfixplus</a>.
    </p>

    <h2 class="text-xl font-semibold mt-6">Privacy Policy</h2>
    <p class="text-gray-700">
        Your phone number and SMS consent will not be shared with third parties or affiliates for marketing purposes.  
        Read our full <a href="{{ route('privacy.policy') }}" class="text-blue-500 underline">Privacy Policy</a>.
    </p>
</div>
@endsection
