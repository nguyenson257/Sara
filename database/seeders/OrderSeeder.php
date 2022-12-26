<?php

namespace Database\Seeders;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::insert([
            [
                'user_id' => 1,
                'payment_id' => 1,
                'address' => '48 Cao Thắng, phường Thanh Bình, quận Hải Châu',
                'status' => 0,
                'payment_status' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 1,
                'payment_id' => 2,
                'address' => '48 Cao Thắng, phường Thanh Bình, quận Hải Châu',
                'status' => 0,
                'payment_status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'user_id' => 1,
                'payment_id' => 2,
                'address' => '48 Cao Thắng, phường Thanh Bình, quận Hải Châu',
                'status' => 1,
                'payment_status' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
        Order::factory(50)->create();
    }
}
