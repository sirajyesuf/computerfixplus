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

        $to = env("MAIL_TO_ADDRESS");

        Mail::to($to)->send(new GetQuote($fullname,$email,$problem));


        return redirect()->back()->with('success','Email sent successfully');
    }
}
