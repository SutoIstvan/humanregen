<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Price::create([
            'name' => 'Price 1',
            'amount' => 3000,
        ]);

        \App\Models\Price::create([
            'name' => 'Price 2',
            'amount' => 5000,
        ]);

        \App\Models\Price::create([
            'name' => 'Price 3',
            'amount' => 4000,
        ]);

        \App\Models\Price::create([
            'name' => 'Price 4',
            'amount' => 4000,
        ]);

        \App\Models\Price::create([
            'name' => 'Price 5',
            'amount' => 4000,
        ]);
    }
}
