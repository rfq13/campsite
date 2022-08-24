<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'campsite-list',
           'campsite-create',
           'campsite-edit',
           'campsite-delete',
           'service-list',
           'service-create',
           'service-edit',
           'service-delete',
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
           'transaction-list',
           'transaction-create',
           'transaction-edit',
           'transaction-delete'
        ];
   
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
