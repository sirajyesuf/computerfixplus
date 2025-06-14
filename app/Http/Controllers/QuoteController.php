<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\GetQuote;
use Illuminate\Support\Facades\Mail;


class QuoteController extends Controller
{
    public function index()
    {
        return view('getquote');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'problem' => 'required',
        ]);

        $fullname = $request->fullname;
        $email = $request->email;
        $problem = $request->problem;

        // Send user form input to the info email address
        $to = 'info@computerfixplus.com';

        try {
            Mail::to($to)->send(new GetQuote($fullname, $email, $problem));
            return redirect()->back()->with('success', 'Thank you for your request! We have received your quote request and will get back to you soon.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Sorry, we are unable to process your request at the moment. Please try again later or contact us directly.']);
        }
    }
}
