<?php

use App\Jobs\SendEmailJob;
use Carbon\Carbon;
use App\Notifications\Newvisit;
use App\Notifications\Newslack;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', 'PostController@blog');

Route::get('/search/{text}', 'PostController@search')->name('search');
// Route::get('/search', 'UserController@fullTextSearch');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('sendMail', function() {
    
    $job = (new SendEmailJob())->delay(Carbon::now()->addSeconds(5));

    dispatch($job);

    return 'Email sent properly';
});

Route::get('/newvisit', function () {
 
    $user = App\User::first();
     
    $user->notify(new Newvisit("A new user has visited on your application."));
     
       return view('welcome');
     
});

Route::get('/slack', function () {

    $user = App\User::first();
    
    $user->notify(new Newslack());
    
    echo 'A slack notification has been send';
    
    });
