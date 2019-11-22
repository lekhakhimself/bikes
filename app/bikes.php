<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bikes extends Model
{
    protected $fillable = [
        'Name', 'added-by', 'updated-by', 'short_description', 'is_active', 'price', 'category_id','slug'
    ];

    public function category(){
        return $this->belongsTo(bike_categories::class,'category_id');
    }
public function Rimages()
    {
        return $this->hasMany(gallery::class,'bike_id');
    } //
    public function Bdetails()
    {
        return $this->hasMany(bike_details::class,'bike_id');
    } //
       public function Bgeometry()
    {
        return $this->hasMany(geometry::class,'bike_id');
    } //
       public function tdiscription()
    {
        return $this->hasMany(technical_description::class,'bike_id');
    } //

}
