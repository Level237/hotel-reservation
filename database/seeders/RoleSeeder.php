<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'id'=>1,
            'type'=>'admin'
        ],
    );

    Role::create([
        'id'=>2,
        'type'=>'admin-hotel'
    ],
    );

    Role::create([
        'id'=>3,
        'type'=>'client'
    ],
    );
    }
}
