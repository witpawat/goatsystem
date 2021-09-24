<?php

namespace App\Http\Controllers;

use App\Models\Goat;
use App\Models\MotherBreedingHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MotherBreedingController extends Controller
{
    public function breed(Request $request){

        $goatF = Goat::orderBy('goatId')->where('sex','=','female')->get();
        $goatM = Goat::orderBy('goatId')->where('sex','=','male')->get();

        return view('goats.updateBreed', compact('goatF','goatM'));

    }

    public function updateBreed(Request $request){

        $request->validate([
            'breedNo' => 'required',
            'dateOfBreed' => 'required',
            'father_breeder' => 'required',
            'goat_id' => 'required',
            'breed_staff' => 'required'
        ]);

            $breed = new MotherBreedingHistory();
            $breed -> breedNo = $request->breedNo;
            $breed -> dateOfBreed = $request->dateOfBreed;
            $breed -> father_breeder = $request->father_breeder;
            $breed -> breed_staff = $request->breed_staff;
            $breed -> goat_id = $request->goat_id;

            $breed -> save();

            if ($breed) {
                return back()->with('success', 'You have been successfully goat breeding registered');
            } else {
                return back()->with('fail', 'Something went wrong');
            }

    }
}
