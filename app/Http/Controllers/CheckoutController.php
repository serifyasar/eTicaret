<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
   public function step1(){

       if(Auth::user()){

           $cats=Category::all();
           return view('cart.checkout',compact('cats'));
       }

       return view('auth.login');
   }


   public  function payment(){
       $cats=Category::all();
       return view('cart.payment',compact('cats'));
   }
}
