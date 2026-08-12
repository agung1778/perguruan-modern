<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'name'=>'Super Admin'
	    'guard_name' => 'web'
        ]);

        Role::create([
            'name'=>'Admin Perguruan'
'guard_name' => 'web
        ]);

        Role::create([
            'name'=>'Operator Sekolah'
 'guard_name' => 'web       
]);
    }
}
