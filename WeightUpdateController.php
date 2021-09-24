<?php

namespace App\Http\Controllers;

use App\Models\Goat;
use App\Models\WeightUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WeightUpdateController extends Controller
{
    public function weight(Request $request){

        $goats = Goat::orderBy('goatId')->get();

        return view('goats.weightUpdate', compact('goats'));
    }

    public function updateWeight(Request $request){

        $request->validate([
            'timePeriod' => 'required',
            'weight' => 'required',
            'goat_id' => 'required'
        ]);

            $weight = new WeightUpdate();
            $weight -> timePeriod = $request->timePeriod;
            $weight -> weight = $request->weight;
            $weight -> goat_id = $request->goat_id;

            $weight -> save();

            if ($weight) {
                return back()->with('success', 'You have been successfully');
            } else {
                return back()->with('fail', 'Something went wrong');
            }

    }
}
