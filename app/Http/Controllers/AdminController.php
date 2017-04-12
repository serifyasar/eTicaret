<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }


    public function index()
    {

        return view('admin.index');
    }


    public function slider()
    {
      $slides=  DB::table('sliders')->get();
        return view('admin.slider.slider',compact('slides'));
    }



    public function deleteSlider($id)
    {
       DB::table('sliders')->where('id',$id)->delete();
return back();
    }

    public function store(Request $request)
    {
        if(!$request->order)
            $request->order=0;

        if($request->image){
        $this->validate($request,[


            'image'=>'image|mimes:png,jpg,jpeg|max:10000'

        ]);



            $image=$request->image;
            if($image){
                $imageName=$image->getClientOriginalName();
                $image->move('themes/images/carousel',$imageName);

            }



        DB::table('sliders')->insert(

            array('image' => $imageName, 'order' => $request->order, 'desc'=> $request->desc)


        );
    }
        return back();
    }






}
