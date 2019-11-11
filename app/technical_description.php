<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class technical_description extends Model
{
        protected $fillable = [
   'parts','description','bike_id',];

        public function bikes()
        {
        return $this->belongsTo(bikes::class,'bike_id');
    }
}
