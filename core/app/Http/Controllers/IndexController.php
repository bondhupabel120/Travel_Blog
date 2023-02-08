<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ArtCulture;
use App\Models\Category;
use App\Models\HistoryPlace;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $slider = Slider::first();
        $about = About::first();
        $popularHistories = HistoryPlace::where('status', 1)->orderBy('count', 'desc')->take(3)->get();
        $teams = Team::where('status', 1)->take(4)->get();
        return view('frontend.home.home', compact('slider','about', 'popularHistories', 'teams'));
    }
    public function about(){
        $teams = Team::where('status', 1)->take(4)->get();
        return view('frontend.about.team', compact('teams'));
    }
    public function map(){
        return view('frontend.map.map');
    }
    public function artCulture(){
        $cultures = ArtCulture::where('status', 1)->orderBy('id', 'desc')->paginate(8);
        return view('frontend.artCulture.art-culture', compact('cultures'));
    }
    public function artCultureDetails($id){
        $culture = ArtCulture::find($id);
        return view('frontend.artCulture.art-culture-details', compact('culture'));
    }
    public function historyPlace(){
        $categories = Category::where('status', 1)->get();
        return view('frontend.historyPlace.history-place', compact('categories'));
    }
    public function historyPlaceDetails($id){
        $history = HistoryPlace::find($id);
        $history->count = $history->count + 1;
        $history->save();
        return view('frontend.historyPlace.history-place-details', compact('history'));
    }
    public function contact(){
        return view('frontend.contact.contact');
    }
}
