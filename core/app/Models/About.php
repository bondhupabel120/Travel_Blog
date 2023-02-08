<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Image;

class About extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function updateAboutData($request){
        $about = About::find($request->id);
        if ($request->hasFile('image')){
            @unlink('assets/backend/images/place/'.$about->image);
            $image = $request->file('image');
            $imageName = $image->hashName();
            $location = 'assets/backend/images/place/'.$imageName;
            Image::make($image)->save($location);
            $about->image = $imageName;
        }
        $about->title = $request->title;
        $about->des = $request->des;
        $about->save();
    }
}
