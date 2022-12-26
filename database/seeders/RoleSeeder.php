<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            ['name' => 'user', 'detail' => 'Người dùng chính'],
            ['name' => 'admin', 'detail' => 'Người quản lý'],
        ]);
    }
}
