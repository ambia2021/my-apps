<?php

namespace Webkul\User\Database\Seeders;

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
        $this->call([
            RolesSeeder::class,
            UsersSeeder::class,
        ]);
        // $this->call(RolesSeeder::class);
        
        // $this->call(UsersSeeder::class);
    }
}
