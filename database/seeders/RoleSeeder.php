<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Role1 = Role::create(['name' => 'Admin']);
        $Role2 = Role::ccreate(['name' => 'JefAr']);

        Permission::create(['name' => 'encuestas.categories']);
        Permission::create(['name' => 'encuestas.categories']);
        Permission::create(['name' => 'encuestas.categories']);
        Permission::create(['name' => 'encuestas.categories']);
    }
}
