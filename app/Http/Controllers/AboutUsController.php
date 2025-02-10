<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AboutUsController extends Controller
{
    public function index(){

        $whychooseus = [
            [
                'title' => 'Quick Turnaround',
                'description' => 'Most repairs completed within 24-48 hours',
                'icon' => 'clock'
            ],
            [
                'title' => 'Expert Technicians',
                'description' => 'Certified professionals with years of experience',
                'icon' => 'users'
            ],
            [
                'title' => 'Quality Guarantee',
                'description' => 'warranty on all our repair services',
                'icon' => 'award'
            ],
            [
                'title' => 'Customer Satisfaction',
                'description' => '98% customer satisfaction rate',
                'icon' => 'thumbs-up'
            ],
        ];


        $numbers = [
            [
                'number' => 120,
                'icon' => 'users',
                'title' => 'Satisfied Customers',
                'description' => 'happy clients and counting'
            ],
            [
                'number' => 5,
                'icon' => 'star',
                'title' => 'Team Members',
                'description' => 'dedicated professionals'

            ],
            [
                'number' => 30,
                'icon' => 'award',
                'title' => 'Five Star Awards',
                'description' => 'recognitions for excellence'
            ]
        ];

        return view('aboutus',[
            'whychooseus' => $whychooseus,
            'numbers' => $numbers
        ]);
    }
}

