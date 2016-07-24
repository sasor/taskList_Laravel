<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	// sirve cuando creamos los task de la forma Task::create
	protected $fillable = [ 'name'];
}
