<?php

namespace Database\Seeders;

use App\Models\Hotel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        Hotel::create([
            'user_id' => $user->id,
            'name' => "Hotel Maximo Roma",
            'adress' => "viale Guglielmo Marconi 19, Rome, 00146",
        ]);
    }
}
