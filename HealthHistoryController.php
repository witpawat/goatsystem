<?php

namespace App\Http\Controllers;

use App\Models\Goat;
use App\Models\HealthHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HealthHistoryController extends Controller
{
    public function health(Request $request)
    {
        $goats = Goat::orderBy('goatId')->get();

        return view('goats.healthUpdate', compact('goats'));

    }


    public function healthUpdate(Request $request){

        $request->validate([
            'attitude' => 'required',
            'dateOfHealth' => 'required',
            'health_staff' => 'required',
            'goat_id' => 'required'
        ]);

            $health = new HealthHistory();
            $health -> attitude = $request->attitude;
            $health -> dateOfHealth = $request->dateOfHealth;
            $health -> health_staff = $request->health_staff;
            $health -> goat_id = $request->goat_id;

            $health -> save();

            if ($health) {
                return back()->with('success', 'You have been successfully');
            } else {
                return back()->with('fail', 'Something went wrong');
            }

    }
}
