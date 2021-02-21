<?php

namespace App\Http\Controllers;

use App\Models\Products\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return ['data'=>$products];
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=Product::create([
            'name'=>$request->name,
            'existance'=>$request->existance,
            'unit_price'=>$request->unit_price,
        ]);
        foreach ($request->properties as $property) {
            $product->properties()->attach($property["id"], ['value' => $property["value"]]);
        }
        return ['data'=>$product];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return ['data'=>["product"=>[
                        "id"=>$product->id,
                        "name"=>$product->name,
                        "existance"=>$product->existance,
                        "unit_price"=>$product->unit_price]
                        ,"properties"=>$product->properties]];
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $product=Product::find($request->id);
        $product->update([
            'name'=>$request->name,
            'existance'=>$request->existance,
            'unit_price'=>$request->unit_price,
        ]);
        return ['data'=>$product];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->delete())
        {
            return ['message'=>"Delete succesfully"];
        }
        else{
            return ['message'=>"Delete failed"];
        }
    }

    public function setPrice(Request $request, $id){
        $product=Product::find($id);
        $product->update([
            'unit_price'=>$request->unit_price
        ]);
        return ['data'=>$product];
    }
}
