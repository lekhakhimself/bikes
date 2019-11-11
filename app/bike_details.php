<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bike_details extends Model
{
    protected $fillable = [
   'part', 'color', 'size','description','bike_id',];
   
       public function bikes(){
        return $this->belongsTo(bikes::class,'bike_id');
    }
}
