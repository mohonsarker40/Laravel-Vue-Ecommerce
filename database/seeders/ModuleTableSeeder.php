<?php

namespace Database\Seeders;

use App\Models\modules;
use App\Models\permission;
use App\Models\role_modules;
use App\Models\role_permisson;
use App\Models\roles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{

    public function run()
    {
        roles::truncate();
        modules::truncate();
        permission::truncate();
        role_modules::truncate();
        role_permisson::truncate();

        $modules = [
            [
                'name' => 'Product',
                'key' => 'product',
                'link' => '#', // Placeholder link, can be updated with actual URL if needed
                'permission' => ['add', 'view', 'edit', 'delete'], // Global permissions for the module
                'submenus' => [
                    [
                        'name' => 'Category',
                        'key' => 'category',
                        'link' => '/admin/product/category',
                        'permission' => ['add', 'view', 'edit', 'delete'], // Specific permissions for Category
                    ],
                    [
                        'name' => 'SubCategory',
                        'key' => 'sub_category',
                        'link' => '/admin/product/sub_category',
                        'permission' => ['add', 'view', 'edit', 'delete'], // Specific permissions for SubCategory
                    ],
                    [
                        'name' => 'Products',
                        'key' => 'products',
                        'link' => '/admin/product/product',
                        'permission' => ['add', 'view', 'edit', 'delete'], // Specific permissions for Products
                    ],
                ],
            ],
        ];


//        $role = new roles();
//        $role->name = 'Admin';
//        $role->save();
//
//
//        User::where('id', 1)->update([
//            'role_id' => 1,
//        ]);

        $role = new roles();
        $role->name = 'Admin';
        $role->save();

        User::where('id', 1)->update([
            'role_id' => 1,
        ]);

        foreach ($modules as $eachModule) {
            $module = new modules();
            $module->name = $eachModule['name'];
            $module->link = $eachModule['link'];
            $module->save();

            $roleModule = new role_modules();
            $roleModule->role_id = $role->id;
            $roleModule->module_id = $module->id;
            $roleModule->save();

            foreach ($eachModule['permission'] as $permission) {
                $permissionModel = new permission();
                $permissionModel->module_id = $module->id;
                $permissionModel->name = $eachModule['key'] . "_" . $permission;
                $permissionModel->save();

                $rolePermission = new role_permisson();
                $rolePermission->role_id = $role->id;
                $rolePermission->permission_id = $permissionModel->id;
                $rolePermission->save();
            }

            foreach ($eachModule['submenus'] as $submenu) {
                $subModule = new modules();
                $subModule->parent_id = $module->id;
                $subModule->name = $submenu['name'];
                $subModule->link = $submenu['link'];
                $subModule->save();

                $roleModule = new role_modules();
                $roleModule->role_id = $role->id;
                $roleModule->module_id = $subModule->id;
                $roleModule->save();

                foreach ($submenu['permission'] as $permission) {
                    $subPermissionModel = new permission();
                    $subPermissionModel->module_id = $module->id;
                    $subPermissionModel->name = $submenu['key'] . "_" . $permission;
                    $subPermissionModel->save();

                    $rolePermission = new role_permisson();
                    $rolePermission->role_id = $role->id;
                    $rolePermission->permission_id = $subPermissionModel->id;
                    $rolePermission->save();
                }
            }

        }

    }
}
