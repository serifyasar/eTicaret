<?php

namespace App\Http\Controllers;

use App\Adress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdressController extends Controller
{
    public function add($request){

        $this->validate($request,
        ['name'=>'required',
            'surname'=>'required',
            'tel'=>'required',
            'email'=>'required',
            'adress'=>'required',
            'postcode'=>'required',
            'city'=>'required',
            'country'=>'required'

    ]);


       Adress::create($request);

        return back();
    }
}
