<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bikes extends Model
{
    protected $fillable = [
        'Name', 'added-by', 'updated-by', 'short_description', 'is_active', 'price', 'category_id'
    ];

    public function category(){
        return $this->belongsTo(bike_categories::class,'category_id');
    }

}
