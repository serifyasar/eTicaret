<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats=Category::all();
        return view('admin.category.index',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'name'=>'required',

            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);
        $formInput=$request->except('image');
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('themes/images',$imageName);
            $formInput['image']=$imageName;
        }

        Category::create($formInput);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $cat=Category::find($id);
       return view('admin.category.edit',compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'name'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        $cat=Category::findOrFail($id);

        $formInput=$request->except('image');

           if($cat->image){
               $formInput['image']=$cat->image;
           }
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('themes/images',$imageName);
            $formInput['image']=$imageName;
        }

      $cat->fill($formInput)->save();
        return redirect('admin/category');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return back();
    }
}
