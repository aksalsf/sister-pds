<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['greeting'] = $this->greeting();
        return view('home', $data);
    }
    
    private function greeting()
    {
        $greeting = '';
        /* This sets the $time variable to the current hour in the 24 hour clock format */
        $time = date("H");
        /* If the time is less than 1200 hours, show good morning */
        if ($time < "12") {
            $greeting = "Selamat pagi, ";
        } else
        /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
        if ($time >= "12" && $time < "16") {
            $greeting = "Selamat siang, ";
        } else
        /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
        if ($time >= "16" && $time < "18") {
            $greeting = "Selamat sore, ";
        } else
        /* Finally, show good night if the time is greater than or equal to 1900 hours */
        if ($time >= "18") {
            $greeting = "Selamat malam, ";
        }
        return $greeting;
    }
}
