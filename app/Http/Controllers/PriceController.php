<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Http\Requests\StorePriceRequest;
use App\Http\Requests\UpdatePriceRequest;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $price1 = Price::find(1);
        $price2 = Price::find(2);
        $price3 = Price::find(3);
        $price4 = Price::find(4);

        return view('price', compact('price1', 'price2', 'price3', 'price4'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Price $price)
    {
        $price1 = Price::find(1);
        $price2 = Price::find(2);
        $price3 = Price::find(3);
        $price4 = Price::find(4);
    
        return view('dashboard.price', compact('price1', 'price2', 'price3', 'price4'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateAllPrices(Request $request)
    {
        $request->validate([
            'price1' => 'required|numeric|min:0',
            'price2' => 'required|numeric|min:0',
            'price3' => 'required|numeric|min:0',
            'price4' => 'required|numeric|min:0',
        ]);
    
        // Обновление цены с ID 1
        $price1 = Price::find(1);
        if ($price1) {
            $price1->amount = $request->input('price1');
            $price1->save();
        }
    
        // Обновление цены с ID 2
        $price2 = Price::find(2);
        if ($price2) {
            $price2->amount = $request->input('price2');
            $price2->save();
        }
    
        // Обновление цены с ID 3
        $price3 = Price::find(3);
        if ($price3) {
            $price3->amount = $request->input('price3');
            $price3->save();
        }
    
        // Обновление цены с ID 4
        $price4 = Price::find(4);
        if ($price4) {
            $price4->amount = $request->input('price4');
            $price4->save();
        }
    
        return redirect()->route('price.edit')->with('success', 'Все цены успешно обновлены');
    }
    
}
