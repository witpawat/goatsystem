<?php

namespace App\Http\Controllers;

use App\Models\Goat;
use App\Models\VaccinationHistory;
use Illuminate\Http\Request;

class VaccinationController extends Controller
{
    public function vaccination(){
        $goats = Goat::orderBy('goatId')->get();

        return view('goats.vaccineUpdate', compact('goats'));

    }

    public function vaccineUpdate(Request $request){


            foreach($request->goat_id as $key=>$goat_id){
                $request->validate([
                    'typeOfVaccine.*' => 'required',
                    'dateOfVaccine.*' => 'required',
                    'vaccine_staff.*' => 'required',
                    'goat_id.*' => 'required'
                ]);

                $vaccine = new VaccinationHistory();
                $vaccine -> goat_id = $goat_id;
                $vaccine -> typeOfVaccine = $request->typeOfVaccine[$key];
                $vaccine -> dateOfVaccine = $request->dateOfVaccine[$key];
                $vaccine -> vaccine_staff = $request->vaccine_staff[$key];

                $vaccine -> save();
            }

            if ($vaccine) {
                return redirect()->route('goats.vaccination')->with('success', 'You have been successfully');
            } else {
                return redirect()->route('goats.vaccination')->with('fail', 'Something went wrong');
            }

    }
}
