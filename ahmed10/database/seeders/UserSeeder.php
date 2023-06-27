<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('User')->insert([
            [
                'name' => Str::random(10),
                'email' => Str::random(10),
                'password' => INT::random(10),

            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10),
                'password' => INT::random(10),

            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10),
                'password' => INT::random(10),

            ],
    }
}
