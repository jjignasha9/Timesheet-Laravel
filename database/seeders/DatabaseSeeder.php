<?php

namespace Database\Seeders;

use Database\Seeders\RoleSeeder;
use Database\Seeders\ShiftSeeder;
use Database\Seeders\Timesheet_StatusesSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            ShiftSeeder::class,
            Timesheet_StatusesSeeder::class,
        ]);
    }
}
