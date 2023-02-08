<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Image;

class ArtCulture extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function saveArtCultureData($request){
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $image->hashName();
            $location = 'assets/backend/images/place/'.$imageName;
            Image::make($image)->save($location);
        }
        ArtCulture::create([
            'name' => $request->name,
            'des' => $request->des,
            'image' => $request->hasFile('image') ? $imageName : null,
            'status' => $request->status,
        ]);
    }
    public static function updateArtCultureData($request){
        $culture = ArtCulture::find($request->id);
        if ($request->hasFile('image')){
            @unlink('assets/backend/images/place/'.$culture->image);
            $image = $request->file('image');
            $imageName = $image->hashName();
            $location = 'assets/backend/images/place/'.$imageName;
            Image::make($image)->save($location);
            $culture->image = $imageName;
        }
        $culture->name = $request->name;
        $culture->des = $request->des;
        $culture->status = $request->status;
        $culture->save();
    }
    public static function deleteArtCultureData($request){
        $culture = ArtCulture::find($request->id);
        @unlink('assets/backend/images/place/'.$culture->image);
        $culture->delete();
    }
}
