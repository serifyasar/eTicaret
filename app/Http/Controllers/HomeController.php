<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcats=SubCategory::all();
        $latests=Product::all()->sortBy('id',null,true)->take(4);
        $features=Product::all()->where('feature','=','1')->take(4);
        $cats=Category::all()->where('active','=','1')->sortBy('order');
        $sliders=DB::table('sliders')->orderBy('order')->get();
        return view('home',compact(['sliders','cats','subcats','latests','features']));
    }



    public function productdetail($id)
    {

        $cats=Category::all()->where('active','=','1')->sortBy('order');

        $product=Product::find($id);
        $relateds=DB::table('products');
        $products=Product::all()->where('category_id','=',$product->category_id)->take(3);

        return view('productdetail',compact(['cats','product','products']));
    }
    public function products($id)
    {

        $cats=Category::all()->where('active','=','1')->sortBy('order');

        $products=DB::table('products')->where('category_id','=',$id)->paginate(9);

        $cid=$id;
        return view('products',compact(['cats','products','cid']));
    }



}
