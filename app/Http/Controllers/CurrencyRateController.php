<?php

namespace App\Http\Controllers;

use App\CurrencyRate;
use Illuminate\Http\Request;

class CurrencyRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = CurrencyRate::get();
        return view('currencyrate.index',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('currencyrate.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currRate = new CurrencyRate;
        $currRate->PKR = $request->pkr;
        $currRate->INR = $request->pkr * 0.59;
        $currRate->EURO = $request->pkr * 0.0073;
        $currRate->POUND = $request->pkr * 0.0064 ;
        $currRate->DIRHAM = $request->pkr * 0.032;
        $currRate->RIYAL = $request->pkr * 0.032;
        $currRate->save();

        return redirect('/currencyrate')->with('message', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CurrencyRate  $currencyRate
     * @return \Illuminate\Http\Response
     */
    public function show(CurrencyRate $currencyRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CurrencyRate  $currencyRate
     * @return \Illuminate\Http\Response
     */
    public function edit(CurrencyRate $currencyRate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CurrencyRate  $currencyRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CurrencyRate $currencyRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CurrencyRate  $currencyRate
     * @return \Illuminate\Http\Response
     */
    public function destroy(CurrencyRate $currencyRate)
    {
        //
    }
}
