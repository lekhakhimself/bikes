<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class geometry extends Model
{
     protected $fillable = [
   'Size', 'fortynine','fifty_two','fifty_four','fifty_six','fifty_eight','sixty_one','bike_id',];
        public function bikes()
        {
        return $this->belongsTo(bikes::class,'bike_id');
    }
}
