<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    public function run(): void
    {
        User::all()
            ->each(function (User $user) {
                Link::factory()->count(random_int(1, 5))->create([
                    'user_id' => $user->id
                ]);
        });
    }
}
