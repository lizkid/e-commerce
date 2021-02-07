<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //

    public function index()
    {
        return view('aboutUs.gettingStarted');
    }

    public function show()
    {
        return view('aboutUs.whoWeAre');
    }
}
