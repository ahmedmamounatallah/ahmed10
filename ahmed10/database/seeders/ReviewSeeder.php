<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Review')->insert([
            [
                'product_id' => Str::random(10),
                'reviewer' => Str::random(10),
                'rating' => Int::random(10),
                'body' => Str::random(10),
            ],
            [
                'product_id' => Str::random(10),
                'reviewer' => Str::random(10),
                'rating' => Int::random(10),
                'body' => Str::random(10),
            ],
            [
                'product_id' => Str::random(10),
                'reviewer' => Str::random(10),
                'rating' => Int::random(10),
                'body' => Str::random(10),
            ],
    }
}
