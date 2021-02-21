<?php

namespace App\Http\Controllers;

use App\Models\Sales\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales=Sale::all();
        return ['data'=>$sales];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sale=Sale::create([
            'total'=>$request->total,
            'sale_date'=>$request->sale_date,
        ]);
        return ['data'=>$sale];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        return ['data'=>$sale];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $sale=Sale::find($request->id);
        $sale->update([
            'total'=>$request->total,
            'sale_date'=>$request->sale_date,
        ]);
        return ['data'=>$sale];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        if($sale->delete())
        {
            return ['message'=>"Delete succesfully"];
        }
        else{
            return ['message'=>"Delete failed"];
        }
    }
}
