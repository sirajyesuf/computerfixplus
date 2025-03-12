<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $services = [
            [
                "title" => "Backup PC",
                "description" =>
                    "Protect your valuable photos, music, videos, documents, and critical business data.",
                "image" => "images/backup_pc.jpg",
            ],
            [
                "title" => "Virus Protection",
                "description" =>
                    "We protect your devices from viruses, spyware, worms, trojans, rootkits, keyloggers, and malwares.",
                "image" => "images/virus_protection2.jpg",
            ],
            [
                "title" => "Hardware Repair",
                "description" =>
                    "We provide hardware repair for IT-related pieces of equipment with highly professional IT technicians.",
                "image" => "images/hardware_repair.jpg",
            ],
            [
                "title" => "Motherboard Repair",
                "description" =>
                    "Our technicians are experts in troubleshooting and replacing a bad Motherboard.",
                "image" => "images/motherboard_repair.jpg",
            ],
            [
                "title" => "Liquid Damage Repair",
                "description" =>
                    "Internal cleaning and diagnosis for sudden liquid spill all over your laptop.",
                "image" => "images/liquid_damage_repair.jpg",
            ],
            [
                "title" => "Technical Support",
                "description" =>
                    "Our tech support can give you a remote solution for your computer issues by accessing your devices.",
                "image" => "images/technical_support.jpg",
            ],
            [
                "title" => "Network Support",
                "description" =>
                    "We provide network setup, troubleshooting, and maintenance for businesses and individuals.",
                "image" => "images/network_setup2.jpg",
            ],
        ];
        return view("landing-page", [
            "services" => $services,
        ]);
    }
}
