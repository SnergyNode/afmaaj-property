<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends MyController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::where('active', true)->orderBy('id', 'DESC')->get();
        return view('admin.pages.location.index')->with('locations', $locations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.location.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $exist = Location::where('name', $request->input('name'))->first();
        if(!empty($exist)){
            return back()->withErrors(array('errors'=>'Location already exist'))->withInput($request->input());
        }
        $location = new Location();
        $image = '';
        if ($request->hasFile('image')) {

            $photo = $request->file('image');
            $resp = $this->fileUploader($photo);
            if($resp[1]){
                $image = $resp[0];
            }else{
                return back()->withErrors(array('errors'=>$resp[0]))->withInput($request->input());
            }

        }
        $location->name = $request->input('name');
        $location->unid = $this->unidid(50);
        $location->pic = $image;
        $location->active = true;
        $location->save();
        return redirect()->route('location.index')->withMessage('New Location Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show($unid)
    {
        $location = Location::whereUnid($unid)->first();
        if(!empty($location)){
            return view('admin.pages.location.show')->with('location', $location);
        }

        return back()->withErrors($this->error_man('item not found'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $unid)
    {
        $location = Location::whereUnid($unid)->first();
        if(!empty($location)){
            $location->name = $request->input('name');

            $process = false;
            $message = 'Updated';


            if ($request->hasFile('image')) {


                $photo = $request->file('image');
                $resp = $this->fileUploader($photo);

                $image = $resp[0];
                $process = $resp[1];

                if($process){
                    $message = $resp[0];
                    $location->pic = $image;
                }else{
                    $message = $resp[0];
                    return back()->withMessage($message);
                }

            }

            $location->update();

            return back()->withMessage($message);
        }
        return redirect()->route('location.index')->withErrors($this->error_man('item not found'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
