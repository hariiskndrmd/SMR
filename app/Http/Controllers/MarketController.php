<?php

namespace App\Http\Controllers;

use App\Models\Market;
use File;
use Image;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $market = Market::all();
        $no = 1;
        return view('admin.market.index', compact('market','no'));
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
            'image'         => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $market = new Market;
        $market->name = $request->name;

        $image = $request->image;
        $namefile = time().'.'.$image->getClientOriginalExtension();
        // copy file
        Image::make($image)->resize(150,100)->save('images/market/'.$namefile);

        $market->flag = $namefile;
        $market->save();

        return redirect()->route('market.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Market  $market
     * @return \Illuminate\Http\Response
     */
    public function show(Market $market)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Market  $market
     * @return \Illuminate\Http\Response
     */
    public function edit(Market $market)
    {
        return view('admin.market.edit',compact('market'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Market  $market
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Market $market)
    {
        if($request->has('image')){
            $market->name = $request->name;
            
            $filename = $market->flag;
            File::delete('images/market/'.$filename);
            
            $image = $request->image;
            $namefile = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(150,100)->save('images/market/'.$namefile);

            $market->flag = $namefile;
        }else{
            $market->name = $request->name;
        }
        $market->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Market  $market
     * @return \Illuminate\Http\Response
     */
    public function destroy(Market $market)
    {
        $filename = $market->flag;
        File::delete('images/market/'.$filename);
        $market->delete();
        return redirect()->route('market.index');
    }
}
