<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    public function run()
    {
//        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);
//        $editorRole = Role::create(['name' => 'editor']);

//        $adminRole->givePermissionTo('all');

        $roleAdmin = Role::firstOrCreate(['name' => 'admin']);
        $permissionAdmin = Permission::where('name', 'assign roles')->first();

        $roleAdmin->givePermissionTo($permissionAdmin);

        $editorRole = Role::firstOrCreate(['name' => 'editor']);

        $permissionEditor1 = Permission::where('name', 'create template')->first();
        $permissionEditor2 = Permission::where('name', 'update template')->first();
        $permissionEditor3 = Permission::where('name', 'send mail')->first();
        $permissionEditor4 = Permission::where('name', 'delete template')->first();

        $permissionEditor5 = Permission::where('name', 'upload file')->first();


        $editorRole->givePermissionTo([
            $permissionEditor1,
            $permissionEditor2,
            $permissionEditor3,
            $permissionEditor4,
            $permissionEditor5,
        ]);
    }
}
