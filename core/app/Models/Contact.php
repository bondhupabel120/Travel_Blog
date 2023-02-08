<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function submitContactData($request){
        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'agree' => 1,
        ]);
    }
}
