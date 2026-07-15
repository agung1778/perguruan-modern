<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;


use Spatie\Permission\Models\Permission;



class RolePermissionSeeder extends Seeder
{


public function run(): void
{


$super =
Role::firstOrCreate([
'name'=>'Super Admin'
]);



$admin =
Role::firstOrCreate([
'name'=>'Admin Perguruan'
]);



$operator =
Role::firstOrCreate([
'name'=>'Operator Sekolah'
]);



$super->givePermissionTo(
Permission::all()
);



$admin->givePermissionTo([


'view dashboard',


'view_any_news_article',

'create_news_article',

'update_news_article',

'delete_news_article',


'view_any_agenda',

'create_agenda',

'update_agenda',

'delete_agenda'


]);



$operator->givePermissionTo([


'view_any_student',

'create_student',

'update_student',


'view_any_teacher',


]);



}

}