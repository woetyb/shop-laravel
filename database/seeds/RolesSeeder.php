<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Role::create([
            'name' => 'Administrator',
            'permissions' => json_encode([
                'product.create' => true,
            ])
        ]);

        \App\Model\Role::create([
            'name' => 'Customer',
            'permissions' => json_encode([
                'product.create' => false,
            ])
        ]);

        \App\Model\Role::create([
            'name' => 'Accountant',
            'permissions' => json_encode([
                'product.create' => false,
            ])
        ]);

        \App\Model\Role::create([
            'name' => 'Stock Keeper',
            'permissions' => json_encode([
                'product.create' => true,
            ])
        ]);

        \App\Model\Role::create([
            'name' => 'Shipper',
            'permissions' => json_encode([
                'product.create' => false,
            ])
        ]);

        \App\Model\Role::create([
            'name' => 'Marketer',
            'permissions' => json_encode([
                'product.create' => false,
            ])
        ]);

        \App\Model\Role::create([
            'name' => 'Sales',
            'permissions' => json_encode([
                'product.create' => false,
            ])
        ]);

        \App\Model\UserRole::create([
            'user_id' => 1,
            'role_id' => 1
        ]);
    }
}
