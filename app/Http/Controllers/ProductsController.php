<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats=Category::all();
        $products=DB::table('products')->paginate(10);
        return view('admin.product.index',compact(['products','cats']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats=Category::all();
        return view('admin.product.create',compact('cats'));
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
            'sku'=>'required',
            'stok'=>'required',
            'price'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);
        $formInput=$request->except('image');
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('themes/images/product',$imageName);
            $formInput['image']=$imageName;
        }

        Product::create($formInput);
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
        $cats=Category::all();
        //$products=DB::table('products')->where('category_id','=',$id)->paginate(10);
        $products=Category::find($id)->product()->paginate(10);

        return view('admin.product.index',compact(['products','cats']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { $cats=Category::all();
        $product=Product::find($id);
        return view('admin.product.edit',compact(['product','cats']));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }
}
