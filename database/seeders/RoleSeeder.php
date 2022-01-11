<?php

namespace Database\Seeders;

use App\Models\Role;
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
        $rols = ['admin', 'director', 'guard', 'prisioner'];

        for ($i = 0; $i < 4; $i++) {
            Role::create([
                'name' => $rols[$i]
            ]);
        }
    }
}