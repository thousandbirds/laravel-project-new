<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('mainpage');
});

// start new code
Route::name('user.')->group(function(){
    Route::view('mainpage', 'mainpage')->middleware('auth')->name('mainpage');

    Route::get('/', function () {
        return redirect()->route('user.mainpage');
    });

    Route::get('/signin', function(){
        if(Auth::check()){
            return redirect(route('user.mainpage'));
        }
        return view('signin');
    })->name('sign-in');

    Route::post('/signin', [\App\Http\Controllers\ContactController::class, 'subin'])->name('sign-in');

    Route::get('logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/signup', function(){
        if(Auth::check()){
            return redirect(route('user.mainpage'));
        }
        return view('signup');
    })->name('sign-up'); 

    Route::post('/signup', [\App\Http\Controllers\ContactController::class, 'sub'])->name('sign-up');
});
// the end new code
Route::get('/mainpage', function () {
    return view('mainpage');
})->name('mainpage');

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactform', function () {
    return view('contactform');
})->name('contact-form');

Route::post('/contactform/aplly', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact-form-aplly');

// start old code
// Route::post('/signup', [App\Http\Controllers\ContactController::class, 'sub'])->name('sign-up');

// Route::get('/signup', function () {
//     return view('signup');
// });


// Route::post('/signin', [App\Http\Controllers\ContactController::class, 'subin'])->name('sign-in');

// Route::get('/signin', function () {
//     return view('signin');
// });
// the end old code


