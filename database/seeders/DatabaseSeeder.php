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
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);

        \App\Models\User::factory(10)->create();
        \App\Models\Campsite::factory(10)->create();
        \App\Models\Service::factory(10)->create();
        \App\Models\Transaction::factory(50)->create();
        \App\Models\TransactionDetail::factory(100)->create();

    }
}
