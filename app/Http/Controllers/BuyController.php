<?php

namespace App\Http\Controllers;

use App\Models\Buys\Buy;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buys=Buy::all();
        return ['data'=>$buys];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buy=Buy::create([
            'total'=>$request->total,
            'buy_date'=>$request->buy_date,
        ]);
        return ['data'=>$buy];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function show(Buy $buy)
    {
        return ['data'=>$buy];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $buy=Buy::find($request->id);
        $buy->update([
            'total'=>$request->total,
            'buy_date'=>$request->buy_date,
        ]);
        return ['data'=>$buy];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buy  $buy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buy $buy)
    {
        if($buy->delete())
        {
            return ['message'=>"Delete succesfully"];
        }
        else{
            return ['message'=>"Delete failed"];
        }
    }
}
