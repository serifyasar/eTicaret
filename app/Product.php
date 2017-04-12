<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','desc','image','active','category_id','sku','price','size','color','weight','stok','feature'];

    public function category(){

      return  $this->belongsTo(Category::class);
    }


}
