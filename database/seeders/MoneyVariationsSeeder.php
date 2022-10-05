<?php

namespace Database\Seeders;

use App\Models\MoneyVariations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoneyVariationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MoneyVariations::factory(50)->create(); 
    }
}
