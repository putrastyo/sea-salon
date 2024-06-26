<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->take(9)->get();
        $reviews = Review::orderBy('created_at', 'desc')
                        ->orderBy('rating', 'desc')
                        ->take(3)
                        ->get();

        return view('home', compact(['services', 'reviews']));
    }
}
