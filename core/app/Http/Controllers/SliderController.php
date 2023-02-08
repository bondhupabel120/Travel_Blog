<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addSlider(){
        $slider = Slider::first();
        return view('backend.slider.add-slider', compact('slider'));
    }
    public function updateSlider(Request $request){
        Slider::updateSliderData($request);
        return back()->with('message', 'Update Successfully');
    }
}
