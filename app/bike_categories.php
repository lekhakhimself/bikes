<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bike_categories extends Model
{

   protected $fillable = [
   'name','description','is_active',];
    public function Rbikes()
    {
        return $this->hasMany(bikes::class,'category_id');
    } //

}
