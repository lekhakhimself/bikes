<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu_item extends Model
{
   protected $fillable =
   ['name','url','type','is_active',];
}
