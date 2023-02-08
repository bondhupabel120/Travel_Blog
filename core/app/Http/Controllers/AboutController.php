<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function addAbout(){
        $about = About::first();
        return view('backend.about.add-about', compact('about'));
    }
    public function updateAbout(Request $request){
        About::updateAboutData($request);
        return back()->with('message', 'Update Successfully');
    }
}
