<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Image;

class Slider extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function updateSliderData($request){
        $slider = Slider::find($request->id);
        if ($request->hasFile('image')){
            @unlink('assets/backend/images/place/'.$slider->image);
            $image = $request->file('image');
            $imageName = $image->hashName();
            $location = 'assets/backend/images/place/'.$imageName;
            Image::make($image)->save($location);
            $slider->image = $imageName;
        }
        $slider->title = $request->title;
        $slider->des = $request->des;
        $slider->save();
    }
}
