<?php

namespace App\Http\Controllers;

use App\Models\Team;
use File;
use Image;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        $no   = 1;
        return view('admin.team.index', compact('team','no')); 
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
            'bridge'          => 'required',
            'deskription'   => 'required',
            'image'         => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $team = new Team;
        $team->name = $request->name;
        $team->bridge = $request->bridge;
        $team->deskription = $request->deskription;

        $image = $request->image;
        $namefile = time().'.'.$image->getClientOriginalExtension();
        // copy file
        Image::make($image)->resize(500,500)->save('images/team/'.$namefile);

        $team->image = $namefile;
        $team->save();

        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        if($request->has('image')){
            $team->name = $request->name;
            $team->bridge = $request->bridge;
            $team->deskription = $request->deskription;
            
            $filename = $team->image;
            File::delete('images/team/'.$filename);
            
            $image = $request->image;
            $namefile = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,500)->save('images/team/'.$namefile);

            $team->image = $namefile;
        }else{
            $team->name = $request->name;
            $team->bridge = $request->bridge;
            $team->deskription = $request->deskription;
        }
        $team->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $filename = $team->flag;
        File::delete('images/team/'.$filename);
        $team->delete();
        return redirect()->route('team.index');
    }
}
