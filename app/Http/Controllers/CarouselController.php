<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Image;
use File;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel = Carousel::all();
        $no = 1;
        return view('admin.carousel.index',compact('carousel','no'));
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
            'title' => 'required',
            'deskription' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $carousel = new Carousel;
        $carousel->title = $request->title;
        $carousel->deskription = $request->deskription;

        $image = $request->image;
        $namefile = time().'.'.$image->getClientOriginalExtension();

        Image::make($image)->resize(1900,900)->save('images/carousel/'.$namefile);
        // $image->move('carousel/images/', $namefile);

        $carousel->image = $namefile;
        $carousel->save();

        return redirect()->route('carousel.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        return view('admin.carousel.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousel $carousel)
    {
        if($request->has('image')){
            $carousel->title = $request->title;
            $carousel->deskription = $request->deskription;
            
            $filename = $carousel->image;
            File::delete('images/carousel/'.$filename);
            
            $image = $request->image;
            $namefile = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1900,900)->save('images/carousel/'.$namefile);

            $carousel->image = $namefile;
        }else{
            $carousel->title = $request->title;
            $carousel->deskription = $request->deskription;
        }
        $carousel->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carousel::find($id);
        $filename = $carousel->image;
        File::delete('images/carousel/'.$filename);
        $carousel->delete();
        return redirect()->route('carousel.index');
    }
}
