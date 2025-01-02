<?php

use Illuminate\Support\Facades\Route;

// Built-in Search..
Route::get('/search-index/{version}', 'SearchController')->name('search');

// Styles & Scripts..
Route::get('/styles/{style}', 'StyleController')->name('styles');
Route::get('/scripts/{script}', 'ScriptController')->name('scripts');

// Documentation..
Route::get('/', 'DocumentationController@index')->name('index');
if(config('larecipe.docs.groups')){
    Route::get('/{version}/{group?}/{page?}', 'DocumentationController@show')->where('page', '(.*)')->name('show');
}else{
    Route::get('/{version}/{page?}', 'DocumentationController@show')->where('page', '(.*)')->name('show');
}


