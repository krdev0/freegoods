<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Item::factory(10)->create();
        // \App\Models\User::factory(1)->create();

        $user = User::factory()->create([
            'full_name' => 'Kristaps Ritins',
            'username' => 'tempus77',
            'email' => 'cold10@inbox.lv',
            'password' => '123',
            'telephone' => '27154641'
        ]);

        \App\Models\Item::factory(10)->create([
            'user_id' => $user->id
        ]);
    }
}
