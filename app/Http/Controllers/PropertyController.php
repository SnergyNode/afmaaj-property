<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Pic;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends MyController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::where('active', true)->orderBy('id', 'DESC')->get();
        return view('admin.pages.property.index')->with('properties', $properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::where('active', true)->orderBy('id', 'DESC')->get();

        return view('admin.pages.property.add')->with('locations', $locations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




        $property = new Property();
        $property->name = $request->input('name');
        $property->location = $request->input('location');
        $property->price = $request->input('price');
        $property->bedroom = $request->input('bedroom');
        $property->toilet = $request->input('toilet');
        $property->type = $request->input('type');
        $property->info = $request->input('info');
        $property->unid = $this->unidid(50);
        $property->active = true;
        $image = '';

        if ($request->hasFile('image')) {


            foreach ($request->file('image') as $file){

                $resp = $this->fileUploader($file);
                if($resp[1]){
                    $pic = new Pic();
                    $pic->prop_key = $property->unid;
                    $pic->unid = "PIC".$this->unidid(50);
                    $pic->url = $resp[0];
                    $pic->save();
                }
            }
        }

        $property->save();
        return redirect()->route('property.index')->withMessage('New Property Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show($unid)
    {
        $property = Property::whereUnid($unid)->first();
        if(!empty($property)){
            $locations = Location::where('active', true)->orderBy('id', 'DESC')->get();

            return view('admin.pages.property.show')
                ->with('property', $property)
                ->with('locations', $locations);
        }

        return redirect()->route('admin.pages.property.index')->withMessage('Item not found');


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $unud)
    {
        $property = Property::whereUnid($unud)->first();
        if(!empty($property)){
            if ($request->hasFile('image')) {


                foreach ($request->file('image') as $file){

                    $resp = $this->fileUploader($file);
                    if($resp[1]){
                        $pic = new Pic();
                        $pic->prop_key = $property->unid;
                        $pic->unid = "PIC".$this->unidid(50);
                        $pic->url = $resp[0];
                        $pic->save();
                    }
                }
            }

            $property->name = $request->input('name');
            $property->location = $request->input('location');
            $property->price = $request->input('price');
            $property->bedroom = $request->input('bedroom');
            $property->toilet = $request->input('toilet');
            $property->type = $request->input('type');
            $property->info = $request->input('info');
            $property->update();
            return back()->withMessage('Property Updated');
        }

        return back()->withErrors($this->error_man('Item not found'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }

    public function popPic($unid){
        $pic = Pic::whereUnid($unid)->first();
        $message = '';
        if(!empty($pic)){
            //unlink pic
            unlink($pic->url);
            $pic->delete();
            $message = 'completed';
        }
        return back()->withMessage($message);
    }
}
