<?php

namespace App\Http\Controllers;

use App\Models\ArtCulture;
use Illuminate\Http\Request;

class ArtCultureController extends Controller
{
    /*Art & Culture*/
    public function addArtCulture(){
        return view('backend.artCulture.add-art-culture');
    }
    public function saveArtCulture(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required',
        ]);
        ArtCulture::saveArtCultureData($request);
        return back()->with('message', 'Art Culture Add Successfully');
    }
    public function manageArtCulture(){
        $cultures = ArtCulture::orderBy('id', 'desc')->get();
        return view('backend.artCulture.manage-art-culture', compact('cultures'));
    }
    public function editArtCulture($id){
        $culture = ArtCulture::find($id);
        return view('backend.artCulture.edit-art-culture', compact('culture'));
    }
    public function updateArtCulture(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'image' => 'required',
        ]);
        ArtCulture::updateArtCultureData($request);
        return redirect()->route('manage.art.culture')->with('message', 'Art Culture Update Successfully');
    }
    public function deleteArtCulture(Request $request){
        ArtCulture::deleteArtCultureData($request);
        return redirect()->route('manage.art.culture')->with('message', 'Art Culture Delete Successfully');
    }
}
