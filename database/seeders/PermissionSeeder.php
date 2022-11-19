<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{

    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'edit_banner',
            'edit_about',
            'store_icons',
            'view_multi_icons',
            'view_portofolio',
            'create_portofolio',
            'edit_portofolio',
            'delete_portofolio',
            'view_services',
            'create_service',
            'edit_service',
            'delete_service',
            'view_footer',
            'edit_footer',
            'view_blog',
            'edit_blog',
            'delete_blog',
            'view_feedback'
        ];

        $role = Role::create([
            'name' => 'Super Admin'
        ]);

        foreach ($permissions as $permission)
        {
            Permission::create([
                'name' => $permission
            ]);

            $role->givePermissionTo($permission);
        }
    }
}
