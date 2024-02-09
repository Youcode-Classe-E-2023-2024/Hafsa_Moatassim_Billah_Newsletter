<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::firstOrCreate(['name' => 'create template']);
        Permission::firstOrCreate(['name' => 'update template']);
        Permission::firstOrCreate(['name' => 'delete template']);
        Permission::firstOrCreate(['name' => 'send mail']);

        Permission::firstOrCreate(['name' => 'upload file']);

        Permission::firstOrCreate(['name' => 'assign roles']);
    }

}
