<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=['user_id','name','surname','adress','email','tel','city','country','postcode','updated_at','created_at'];

}
