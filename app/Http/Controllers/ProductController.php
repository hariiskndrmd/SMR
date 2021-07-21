<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Image;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $no = 1;
        return view('admin.product.index', compact('product','no') );
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
            'name'          => 'required',
            'deskription'   => 'required',
            'image'         => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $product = new Product;
        $product->product_name = $request->name;
        $product->product_deskription = $request->deskription;

        $image = $request->image;
        $namefile = time().'.'.$image->getClientOriginalExtension();
        // copy file
        Image::make($image)->resize(800,600)->save('images/product/'.$namefile);

        $product->product_image = $namefile;
        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if($request->has('image')){
            $product->product_name = $request->name;
            $product->product_deskription = $request->deskription;
            
            $filename = $product->product_image;
            File::delete('images/product/'.$filename);
            
            $image = $request->image;
            $namefile = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(800,600)->save('images/product/'.$namefile);

            $product->product_image = $namefile;
        }else{
            $product->product_name = $request->name;
            $product->product_deskription = $request->deskription;
        }
        $product->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $filename = $product->product_image;
        File::delete('images/product/'.$filename);
        $product->delete();
        return redirect()->route('product.index');
    }
}
