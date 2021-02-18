<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function timeOfDay()
    {
        $time = date("H");
        if ($time < 12){
            return "Morning"; 
        } else if ($time < 18){
            return "Afternoon";
        } else {
            return "Evening";
        }
    }

    public function index()
    {
        $greeting = "Good {$this->timeOfDay()}";

        return view("welcome", ["greeting" => $greeting]);
    }
}
