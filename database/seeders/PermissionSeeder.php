<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions=[
            'view dashboard',
            'manage units',
            'manage teachers',
            'manage students',
            'manage news',
            'manage agendas',
            'manage gallery',
            'manage testimonials',
            'manage settings'
        ];
        foreach($permissions as $permission)
        {
            Permission::create([
            'name'=>$permission
            ]);
        }
        $super =
            Role::where(
            'name',
            'Super Admin'
        )->first();
        $super->givePermissionTo(
        Permission::all()
        );
    }
}