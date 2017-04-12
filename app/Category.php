<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name','desc','image','active'];

    public function subcategory(){

        return $this->hasMany(SubCategory::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}
