<?php

Route::get('/', function () {
    return view('tasks.index');
});

Route::post('/task', function () {
	//
});

Route::delete('/task/{task}', function () {
	//
});

