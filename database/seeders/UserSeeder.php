<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Ygor Combi',
            'email' => 'ygor@combi.xyz',
            'password' => 'ygor@combi.xyz'
        ]);
    }
}
