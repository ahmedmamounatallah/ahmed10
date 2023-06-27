<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Order')->insert([
            [
                'subtotal' => Int::random(10),
                'tax' => Int::random(10),
                'total' => Int::random(10),
                'discount' => Int::random(10),
                'quantity' => Int::random(10),

            ],
    }
}
