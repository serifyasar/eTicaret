<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{

    protected $fillable=['name','desc','image','active','category_id'];

    public function category(){

        $this->belongsTo(Category::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}
