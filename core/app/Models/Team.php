<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Image;

class Team extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function saveTeamData($request){
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $image->hashName();
            $location = 'assets/backend/images/place/'.$imageName;
            Image::make($image)->save($location);
        }
        Team::create([
            'name' => $request->name,
            'image' => $request->hasFile('image') ? $imageName : null,
            'roll' => $request->roll,
            'status' => $request->status,
        ]);
    }
    public static function updateTeamData($request){
        $team = Team::find($request->id);
        if ($request->hasFile('image')){
            @unlink('assets/backend/images/place/'.$team->image);
            $image = $request->file('image');
            $imageName = $image->hashName();
            $location = 'assets/backend/images/place/'.$imageName;
            Image::make($image)->save($location);
            $team->image = $imageName;
        }
        $team->name = $request->name;
        $team->roll = $request->roll;
        $team->status = $request->status;
        $team->save();
    }
    public static function deleteTeamData($request){
        $team = Team::find($request->id);
        @unlink('assets/backend/images/place/'.$team->image);
        $team->delete();
    }
}
