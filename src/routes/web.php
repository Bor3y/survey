<?php

$namespace = 'Survey\Http\Controllers';

Route::group([
    'namespace' => $namespace,
    'prefix' => 'bor3y'
],function(){
    Route::get('/','SurveyController@index');
    Route::get('test','SurveyController@test');

});