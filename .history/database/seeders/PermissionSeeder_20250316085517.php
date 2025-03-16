<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'index-dashboard', 'index-product', 'create-product', 'delete-product', 'update-product',
            'index-category', 'create-category', 'delete-category', 'update-category',
            'index-supplier', 'create-supplier', 'delete-supplier', 'update-supplier',
            'index-vehicle', 'create-vehicle', 'delete-vehicle', 'update-vehicle',
            'index-stock', 'create-stock',
            'index-permission', 'create-permission', 'delete-permission', 'update-permission',
            'index-role', 'create-role', 'delete-role', 'update-role',
            'index-user', 'create-user', 'delete-user', 'update-user',
            'index-order', 'create-order',
            'index-rent', 'create-rent',
            'index-transaction', 'create-transaction'
        ];

        foreach ($permissions as $permission) {
            if (!Permission::where('name', $permission)->exists()) {
                Permission::create(['name' => $permission]);
            }
        }
    }
}
