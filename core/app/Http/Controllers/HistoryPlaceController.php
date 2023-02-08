<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HistoryPlace;
use Illuminate\Http\Request;

class HistoryPlaceController extends Controller
{
    /*History Place*/
    public function addHistoryPlace(){
        $categories = Category::where('status', 1)->get();
        return view('backend.historyPlace.add-place', compact('categories'));
    }
    public function saveHistoryPlace(Request $request){
        $this->validate($request,[
            'category_id' => 'required',
            'name' => 'required',
            'image' => 'required',
        ]);
        HistoryPlace::saveHistoryPlaceData($request);
        return back()->with('message', 'Place Add Successfully');
    }
    public function manageHistoryPlace(){
        $places = HistoryPlace::orderBy('id', 'desc')->get();
        return view('backend.historyPlace.manage-place', compact('places'));
    }
    public function editHistoryPlace($id){
        $categories = Category::where('status', 1)->get();
        $place = HistoryPlace::find($id);
        return view('backend.historyPlace.edit-place', compact('categories', 'place'));
    }
    public function updateHistoryPlace(Request $request){
        $this->validate($request,[
            'category_id' => 'required',
            'name' => 'required',
            'image' => 'required',
        ]);
        HistoryPlace::updateHistoryPlaceData($request);
        return redirect()->route('manage.history.place')->with('message', 'Place Update Successfully');
    }
    public function deleteHistoryPlace(Request $request){
        HistoryPlace::deleteHistoryPlaceData($request);
        return redirect()->route('manage.history.place')->with('message', 'Place Delete Successfully');
    }
}
