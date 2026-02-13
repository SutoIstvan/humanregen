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
        $this->ensurePricesExist();
        $price1 = Price::find(1);
        $price2 = Price::find(2);
        $price3 = Price::find(3);
        $price4 = Price::find(4);
        $price5 = Price::find(5);
        $price6 = Price::find(6);
        $price7 = Price::find(7);
        $price8 = Price::find(8);

        return view('price', compact('price1', 'price2', 'price3', 'price4', 'price5', 'price6', 'price7', 'price8'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Price $price)
    {
        $this->ensurePricesExist();
        $price1 = Price::find(1);
        $price2 = Price::find(2);
        $price3 = Price::find(3);
        $price4 = Price::find(4);
        $price5 = Price::find(5);
        $price6 = Price::find(6);
        $price7 = Price::find(7);
        $price8 = Price::find(8);
    
        return view('dashboard.price', compact('price1', 'price2', 'price3', 'price4', 'price5', 'price6', 'price7', 'price8'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateAllPrices(Request $request)
    {
        $this->ensurePricesExist();
        $request->validate([
            'price1' => 'required|numeric|min:0',
            'price2' => 'required|numeric|min:0',
            'price3' => 'required|numeric|min:0',
            'price4' => 'required|numeric|min:0',
            'price5' => 'required|numeric|min:0',
            'price6' => 'required|numeric|min:0',
            'price7' => 'required|numeric|min:0',
            'price8' => 'required|numeric|min:0',
        ]);
    
        $price1 = Price::find(1);
        if ($price1) {
            $price1->amount = $request->input('price1');
            $price1->save();
        }
    
        $price2 = Price::find(2);
        if ($price2) {
            $price2->amount = $request->input('price2');
            $price2->save();
        }
    
        $price3 = Price::find(3);
        if ($price3) {
            $price3->amount = $request->input('price3');
            $price3->save();
        }
    
        $price4 = Price::find(4);
        if ($price4) {
            $price4->amount = $request->input('price4');
            $price4->save();
        }

        $price5 = Price::find(5);
        if ($price5) {
            $price5->amount = $request->input('price5');
            $price5->save();
        }

        $price6 = Price::find(6);
        if ($price6) {
            $price6->amount = $request->input('price6');
            $price6->save();
        }

        $price7 = Price::find(7);
        if ($price7) {
            $price7->amount = $request->input('price7');
            $price7->save();
        }

        $price8 = Price::find(8);
        if ($price8) {
            $price8->amount = $request->input('price8');
            $price8->save();
        }
    
        return redirect()->route('price.edit')->with('success', 'Árak sikeresen frissítve');
    }
    
    private function ensurePricesExist()
    {
        for ($i = 1; $i <= 8; $i++) {
            if (!Price::find($i)) {
                $price = new Price();
                $price->id = $i;
                $price->name = 'Price ' . $i;
                $price->amount = 0;
                $price->save();
            }
        }
    }
}
