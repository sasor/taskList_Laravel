<?php

use App\Task;
use Illuminate\Http\Request;

Route::get('/', function () {

		$tasks = Task::orderBy('created_at', 'asc')->get();
		return view('tasks.index', ['tasks' => $tasks]);
		// OR
		//return view('tasks.index')->withTasks($tasks);

});

Route::post('/task', function (Request $request) {

	$validator = Validator::make($request->all(),[
		'name' => 'required|max:255',
	]);
	
	if($validator->fails()){
		return redirect('/')->withInput()->withErrors($validator);
	}

	/* $task = new Task;
	$task->name = $request->name;
	$task->save(); */
	
// Otra forma
  Task::create([
		'name' => $request->name,
	]);

	return redirect('/');
});

Route::delete('/task/{task}', function () {
	//
});

