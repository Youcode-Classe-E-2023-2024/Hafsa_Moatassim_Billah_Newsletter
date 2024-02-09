<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'create template']);
        Permission::create(['name' => 'update template']);
        Permission::create(['name' => 'delete template']);
        Permission::create(['name' => 'send mail']);

        Permission::create(['name' => 'upload file']);

        Permission::create(['name' => 'assign roles']);
    }

}
