<?php

use App\Jobs\SendEmailJob;
use Carbon\Carbon;

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
