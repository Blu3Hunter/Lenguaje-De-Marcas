<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //guardar 20 registros
        $arrays = range(0, 20);
        foreach ($arrays as $valor) {
            DB::table('products')->insert([
                'name' => Str::random(10),
                'description' => Str::random(10),
                'price' => rand(1, 99) / 10,
                'stock' => rand(1, 99),
                'category' => 1,
            ]);
        }
    }
}
