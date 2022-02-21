<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
            ], [
                'name' => 'employee',
            ], [
                'name' => 'client',
            ], [
                'name' => 'supervisor',
            ], 

        ];

        Role::insert($roles);
    }
}
