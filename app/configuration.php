<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class configuration extends Model
{ 
	protected $table= "configs";
	protected $fillable = ['key','value','type'];
}
