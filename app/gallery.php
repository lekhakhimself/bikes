<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{

    protected $table = "bike_galleries";

    protected $fillable = [
        'images', 'bike_id',
    ];
        public function bikes(){
        return $this->belongsTo(bikes::class,'bike_id');
    }


}
