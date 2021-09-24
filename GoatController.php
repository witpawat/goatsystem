<?php

namespace App\Http\Controllers;

use App\Models\Goat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GoatController extends Controller
{
    public function index(){
        // $data['goats'] = Goat::orderBy('goatId','desc')->paginate(6);
        $goats = DB::table('goats')->paginate(5);

        return view('goats.index', ['goats' => $goats]);
        // return view('goats.index', $data);

    }

    public function create(){
        return view('goats.create');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $goats = DB::table('goats')->where('goatId', 'like', '%'.$search.'%')->paginate(5);
        return view('goats.index', ['goats' => $goats]);
    }

    public function store(Request $request){

            $request->validate([
            'goatId' => 'required',
            'goatName' => 'required',
            'sex' => 'required',
            'gene' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'colour' => 'required',
            'dateOfBirth' => 'required',
            'weightOfBirth' => 'required',
            'arrivalDate' => 'required',
            'fatherId' => 'required',
            'fatherGoatName' => 'required',
            'fatherGene' => 'required',
            'motherId' => 'required',
            'motherGoatName' => 'required',
            'motherGene' => 'required',

        ]);
            $path = $request->file('image')->store('public/goatimages');
            $goat = new Goat;
            $goat -> goatId = $request->goatId;
            $goat -> goatName = $request->goatName;
            $goat -> sex = $request->sex;
            $goat -> gene = $request->gene;
            $goat -> image = $path;
            $goat -> colour = $request->colour;
            $goat -> dateOfBirth = $request->dateOfBirth;
            $goat -> weightOfBirth = $request->weightOfBirth;
            $goat -> arrivalDate = $request->arrivalDate;
            $goat -> fatherId = $request->fatherId;
            $goat -> fatherGoatName = $request->fatherGoatName;
            $goat -> fatherGene = $request->fatherGene;
            $goat -> motherId = $request->motherId;
            $goat -> motherGoatName = $request->motherGoatName;
            $goat -> motherGene = $request->motherGene;
            $goat -> user_id = Auth::user()->id;
            $goat -> save();

            return redirect()->route('goats.index')->with('success','Gost has been created successfully.');

        }

    public function show(Goat $goat){

        return view('goats.show', compact(['goat']));
    }

    public function edit(Goat $goat)
    {

        return view('goats.edit',compact('goat'));
    }

    public function update(Request $request, $goatId)
    {
        $request->validate([
            'goatId' => 'required',
            'goatName' => 'required',
            'sex' => 'required',
            'gene' => 'required',
            'colour' => 'required',
            'dateOfBirth' => 'required',
            'weightOfBirth' => 'required',
            'arrivalDate' => 'required',
            'fatherId' => 'required',
            'fatherGoatName' => 'required',
            'fatherGene' => 'required',
            'motherId' => 'required',
            'motherGoatName' => 'required',
            'motherGene' => 'required',
        ]);

        $goat = Goat::find($goatId);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/goatimages');
            $goat->image = $path;
        }
            $goat -> goatId = $request->goatId;
            $goat -> goatName = $request->goatName;
            $goat -> sex = $request->sex;
            $goat -> gene = $request->gene;
            $goat -> colour = $request->colour;
            $goat -> dateOfBirth = $request->dateOfBirth;
            $goat -> weightOfBirth = $request->weightOfBirth;
            $goat -> arrivalDate = $request->arrivalDate;
            $goat -> fatherId = $request->fatherId;
            $goat -> fatherGoatName = $request->fatherGoatName;
            $goat -> fatherGene = $request->fatherGene;
            $goat -> motherId = $request->motherId;
            $goat -> motherGoatName = $request->motherGoatName;
            $goat -> motherGene = $request->motherGene;
            $goat -> user_id = Auth::user()->id;
            $goat->save();

        return redirect()->route('goats.index')
                        ->with('success','Gost updated successfully');
    }

    public function destroy(Goat $goat)
    {
        $goat->delete();

        return redirect()->route('goats.index')
                        ->with('success','Goat has been deleted successfully');
    }

    public function homeUpdate(){
        return  view('goats.updateHome');
    }

}
