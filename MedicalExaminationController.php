<?php

namespace App\Http\Controllers;

use App\Models\Goat;
use App\Models\MedicalExamination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicalExaminationController extends Controller
{
    public function medical(Request $request){

        $goats = Goat::orderBy('goatId')->get();

        return view('goats.medicalUpdate', compact('goats'));

    }

    public function medicalUpdate(Request $request){

        $request->validate([
            'typeOfDisease' => 'required',
            'dateExamination' => 'required',
            'result' => 'required',
            'goat_id' => 'required'
        ]);

            $medical = new MedicalExamination();
            $medical -> typeOfDisease = $request->typeOfDisease;
            $medical -> dateExamination = $request->dateExamination;
            $medical -> result = $request->result;
            $medical -> goat_id = $request->goat_id;

            $medical -> save();

            if ($medical) {
                return back()->with('success', 'You have been successfully');
            } else {
                return back()->with('fail', 'Something went wrong');
            }

    }
}
