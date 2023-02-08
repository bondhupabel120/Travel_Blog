<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Image;

class HistoryPlace extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function categoryName(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public static function saveHistoryPlaceData($request){
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $image->hashName();
            $location = 'assets/backend/images/place/'.$imageName;
            Image::make($image)->save($location);
        }
        HistoryPlace::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'des' => $request->des,
            'image' => $request->hasFile('image') ? $imageName : null,
            'status' => $request->status,
        ]);
    }
    public static function updateHistoryPlaceData($request){
        $place = HistoryPlace::find($request->id);
        if ($request->hasFile('image')){
            @unlink('assets/backend/images/place/'.$place->image);
            $image = $request->file('image');
            $imageName = $image->hashName();
            $location = 'assets/backend/images/place/'.$imageName;
            Image::make($image)->save($location);
            $place->image = $imageName;
        }
        $place->category_id = $request->category_id;
        $place->name = $request->name;
        $place->des = $request->des;
        $place->status = $request->status;
        $place->save();
    }
    public static function deleteHistoryPlaceData($request){
        $place = HistoryPlace::find($request->id);
        @unlink('assets/backend/images/place/'.$place->image);
        $place->delete();
    }
}
