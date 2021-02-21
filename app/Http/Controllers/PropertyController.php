<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products\ProductProperty;
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties=ProductProperty::all();
        return ['data'=>$properties];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property=ProductProperty::create([
            'name'=>$request->name
        ]);
        return ['data'=>$property];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ProductProperty $property)
    {
        return ['data'=>$property];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $property=ProductProperty::find($request->id);
        $property->update([
            'name'=>$request->name
        ]);
        return ['data'=>$property];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductProperty $property)
    {
        if($property->delete())
        {
            return ['message'=>"Delete succesfully"];
        }
        else{
            return ['message'=>"Delete failed"];
        }
    }
}
