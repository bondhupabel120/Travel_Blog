<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index')->name('index');

Route::get('/about', 'IndexController@about')->name('about');

Route::get('/map', 'IndexController@map')->name('map');
Route::get('/art-culture', 'IndexController@artCulture')->name('art.culture');
Route::get('/art-culture-details/{id}', 'IndexController@artCultureDetails')->name('art.culture.details');
Route::get('/history-place', 'IndexController@historyPlace')->name('history.place');
Route::get('/history-place-details/{id}', 'IndexController@historyPlaceDetails')->name('history.place.details');

Route::get('/contact', 'IndexController@contact')->name('contact');
Route::post('/submit-contact', 'ContactController@submitContact')->name('submit.contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Admin Routes*/
Route::group(['prefix' => 'admin'], function (){
    Route::get('/', 'AdminController@index')->name('admin.login');
    Route::post('/login', 'AdminController@loginCheck')->name('admin.loginCheck');

    Route::middleware('auth:admin')->group(function (){
        Route::get('/dashboard', 'AdminController@dashboard')->name('admin.home');
        Route::post('/logout', 'AdminController@adminLogout')->name('admin.logout');

        Route::get('/change/password', 'AdminController@adminChangePassword')->name('admin.change.password');
        Route::post('/save/change/password', 'AdminController@saveChangePassword')->name('save.change.password');

        Route::get('/register', 'AdminController@adminRegister')->name('admin.register');
        Route::post('/save/register', 'AdminController@saveRegister')->name('save.register');

        /*Category*/
        Route::get('/add/category', 'CategoryController@addCategory')->name('add.category');
        Route::post('/save/category', 'CategoryController@saveCategory')->name('save.category');
        Route::get('/manage/category', 'CategoryController@manageCategory')->name('manage.category');
        Route::get('/edit/category/{id}', 'CategoryController@editCategory')->name('edit.category');
        Route::post('/update/category', 'CategoryController@updateCategory')->name('update.category');
        Route::post('/delete/category', 'CategoryController@deleteCategory')->name('delete.category');
        /*History Place*/
        Route::get('/add/history/place', 'HistoryPlaceController@addHistoryPlace')->name('add.history.place');
        Route::post('/save/history/place', 'HistoryPlaceController@saveHistoryPlace')->name('save.history.place');
        Route::get('/manage/history/place', 'HistoryPlaceController@manageHistoryPlace')->name('manage.history.place');
        Route::get('/edit/history/place/{id}', 'HistoryPlaceController@editHistoryPlace')->name('edit.history.place');
        Route::post('/update/history/place', 'HistoryPlaceController@updateHistoryPlace')->name('update.history.place');
        Route::post('/delete/history/place', 'HistoryPlaceController@deleteHistoryPlace')->name('delete.history.place');
        /*Art & Culture*/
        Route::get('/add/art/culture', 'ArtCultureController@addArtCulture')->name('add.art.culture');
        Route::post('/save/art/culture', 'ArtCultureController@saveArtCulture')->name('save.art.culture');
        Route::get('/manage/art/culture', 'ArtCultureController@manageArtCulture')->name('manage.art.culture');
        Route::get('/edit/art/culture/{id}', 'ArtCultureController@editArtCulture')->name('edit.art.culture');
        Route::post('/update/art/culture', 'ArtCultureController@updateArtCulture')->name('update.art.culture');
        Route::post('/delete/art/culture', 'ArtCultureController@deleteArtCulture')->name('delete.art.culture');
        /*Our Team Member*/
        Route::get('/add/team', 'TeamController@addTeam')->name('add.team');
        Route::post('/save/team', 'TeamController@saveTeam')->name('save.team');
        Route::get('/manage/team', 'TeamController@manageTeam')->name('manage.team');
        Route::get('/edit/team/{id}', 'TeamController@editTeam')->name('edit.team');
        Route::post('/update/team', 'TeamController@updateTeam')->name('update.team');
        Route::post('/delete/team', 'TeamController@deleteTeam')->name('delete.team');
        /*Slider*/
        Route::get('/add/slider', 'SliderController@addSlider')->name('add.slider');
        Route::post('/update/slider', 'SliderController@updateSlider')->name('update.slider');
        /*Slider*/
        Route::get('/add/about', 'AboutController@addAbout')->name('add.about');
        Route::post('/update/about', 'AboutController@updateAbout')->name('update.about');
        /*Show Contact*/
        Route::get('/show/contact', 'ContactController@showContact')->name('show.contact');
        Route::post('/delete/contact', 'ContactController@deleteContact')->name('delete.contact');
    });
});
