<?php

namespace App\Http\Controllers;

use App\Models\Userdetail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function track(Request $request)
    {
        $details = Userdetail::where('tracking_id', $request->tracking_id)->get();
        return view('track', compact('details'));
    }
}
