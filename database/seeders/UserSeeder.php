<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'role_id' => 1,
                'email' => 'user@gmail.com',
                'password' => Hash::make('12345678'),
                'name' => 'User Test',
                'date_of_birth' => '1999/01/01',
                'phone_number' => '0987456123',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'role_id' => 2,
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'name' => 'Admin',
                'date_of_birth' => '1999/01/01',
                'phone_number' => '0987686868',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
        User::factory(30)->create();
    }
}
