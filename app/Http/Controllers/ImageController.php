<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Product;
use Illuminate\Http\Request;
use Image;
use File;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = Gambar::all();
        $product = Product::all();
        $no = 1;
        return view('admin.product.image', compact('image','no','product'));
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
    public function store(Request $request){
    $this->validate($request, [
            'filenames' => 'required|image|mimes:png,jpg,jpeg',
            'product' => 'required',
    ]);

        $file = $request->filenames;
        $name = time().'.'.$file->getClientOriginalExtension();
        Image::make($file)->resize(1900,900)->save('images/product/'.$name); 

    $gambar= new Gambar();
    $gambar->image = $name;
    $gambar->product_id = $request->product;
    $gambar->save();  
    

    return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Gambar::find($id);
        $product = Product::all();
        return view('admin.product.editImage', compact('image','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gambar $image)
    {
        
        if($request->has('image')){
            $image->product_id = $request->product;
            
            $filename = $image->image;
            File::delete('images/product/'.$filename);
            
            $name = $request->image;
            $namefile = time().'.'.$name->getClientOriginalExtension();
            Image::make($name)->resize(1900,900)->save('images/product/'.$namefile);

            $image->image = $namefile;
        }else{
            $image->product_id = $request->product;
        }
        $image->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filename = Gambar::find($id);
        File::delete('images/product/'.$filename);
        $filename->delete();
        return redirect()->route('image.index');
    }
}
