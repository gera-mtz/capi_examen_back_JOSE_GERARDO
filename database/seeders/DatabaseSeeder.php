<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\user_domicilio::factory(100)->create()->for( function ($ud){
            $user = \App\Models\User::factory()->create();
            $ud->user()->save($user);
        });
    }
}
