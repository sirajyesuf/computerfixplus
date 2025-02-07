<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){

        $services = [
        [
            'title' => 'Backup PC',
            'description' => 'Protect your valuable photos, music, videos, documents, and critical business data.',
            'image' =>
                'https://images.unsplash.com/photo-1563206767-5b18f218e8de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
        ],
        [
            'title' => 'Virus Protection',
            'description' =>
                'We protect your devices from viruses, spyware, worms, trojans, rootkits, keyloggers, and malwares.',
            'image' =>
                'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
        ],
        [
            'title' => 'Hardware Repair',
            'description' =>
                'We provide hardware repair for IT-related pieces of equipment with highly professional IT technicians.',
            'image' =>
                'https://images.unsplash.com/photo-1597872200969-2b65d56bd16b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
        ],
        [
            'title' => 'Motherboard Repair',
            'description' => 'Our technicians are experts in troubleshooting and replacing a bad Motherboard.',
            'image' =>
                'https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
        ],
        [
            'title' => 'Liquid Damage Repair',
            'description' => 'Internal cleaning and diagnosis for sudden liquid spill all over your laptop.',
            'image' =>
                'https://images.unsplash.com/photo-1606229365485-93a3b8ee0385?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
        ],
        [
            'title' => 'Technical Support',
            'description' =>
                'Our tech support can give you a remote solution for your computer issues by accessing your devices.',
            'image' =>
                'https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
        ],
    ];
        return view('landing-page',[
            'services' => $services
        ]);
    }
}
