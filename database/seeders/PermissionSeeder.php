<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'view dashboard',
            'manage units',
            'manage teachers',
            'manage students',
            'manage news',
            'manage agendas',
            'manage gallery',
            'manage testimonials',
            'manage settings',
            'view_any_news_article',
            'create_news_article',
            'update_news_article',
            'delete_news_article',
            'view_any_agenda',
            'create_agenda',
            'update_agenda',
            'delete_agenda',
            'view_any_student',
            'create_student',
            'update_student',
            'view_any_teacher',
            'create_teacher',
            'update_teacher',
            'delete_teacher',
            'view_any_gallery_album',
            'create_gallery_album',
            'update_gallery_album',
            'delete_gallery_album',
            'view_any_testimonial',
            'create_testimonial',
            'update_testimonial',
            'delete_testimonial',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        $super = Role::where('name', 'Super Admin')->first();

        if ($super) {
            $super->givePermissionTo(Permission::all());
        }
    }
}