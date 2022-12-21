<?php

namespace App\Http\Controllers;

use App\Models\Userdetail;
use Illuminate\Http\Request;

class UserdetailController extends Controller
{
    public function submit(Request $request, Userdetail $tracking_id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'freight_type' => 'required',
            'departure_city' => 'required',
            'delivery_city' => 'required',
            'boxes' => 'required',
            'location' => 'required',

        ]);

        $tracking_id = time();


        // inserting into the database
       $userdetail = Userdetail::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'freight_type' => $request->freight_type,
            'departure_city' => $request->departure_city,
            'delivery_city' => $request->delivery_city,
            'boxes' => $request->boxes,
            'tracking_id' => $tracking_id,
            'location' => $request->location
        ]);


        return redirect()->route('tracking_id', [$tracking_id]);
    }

    public function tracking_id($tracking_id)
     {

         return view('tracking_id', compact('tracking_id'));

         return redirect()->route('welcome');
    }

    public function check(Request $request)
    {
        $details = Userdetail::where('name', $request->name)->get();
        $details = Userdetail::where('email', $request->email)->get();

        return  view('check-details', compact('details'));
    }

    public function dashboard()
    {

        $details = Userdetail::all();

        return view('dashboard', compact('details'));
    }

    public function edit(Userdetail $detail)
    {
       return view('edit-location', compact('detail'));
    }

    public function update(Request $request, Userdetail $detail)
    {
        $request->validate([
            'location' => 'required',
        ]);

        $detail->location = $request->location;

        $detail->save();

        return redirect()->route('dashboard');

    }
}
