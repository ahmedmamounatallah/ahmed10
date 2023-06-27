<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Product')->insert([
            [
                'ean' => Str::random(10),
                'title' => Str::random(10),
                'category' => Str::random(10),
                'vendor' => Str::random(10),
                'price' => Str::random(10),
                'rating' => Str::random(10),
            ],
            [
                'ean' => Str::random(10),
                'title' => Str::random(10),
                'category' => Str::random(10),
                'vendor' => Str::random(10),
                'price' => Str::random(10),
                'rating' => Str::random(10),
            ],
            [
                'ean' => Str::random(10),
                'title' => Str::random(10),
                'category' => Str::random(10),
                'vendor' => Str::random(10),
                'price' => Str::random(10),
                'rating' => Str::random(10),
            ],

        ]);
    }
}
