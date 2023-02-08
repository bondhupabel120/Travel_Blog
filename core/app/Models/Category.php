<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function historyPlaceName(){
        return $this->hasMany(HistoryPlace::class, 'category_id', 'id');
    }

    public static function saveCategoryData($request){
        Category::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);
    }
    public static function updateCategoryData($request){
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();
    }
    public static function deleteCategoryData($request){
        $category = Category::find($request->id);
        $category->delete();
    }
}
