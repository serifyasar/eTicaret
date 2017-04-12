<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
   protected $fillable=['user_id','name','surname','adress','email','tel','city','country','postcode'];

}
