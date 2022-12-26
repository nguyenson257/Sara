<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = User::all()->whereIn('role_id', 1)->random()->id;
        $payment_id = Payment::all()->random()->id;
        $status = rand(0,1);
        if($status==1 || $payment_id == 2){
            $payment_status = 1;
        }
        else{
            $payment_status = 0;
        }

        return [
            'user_id' => $user_id,
            'payment_id' => $payment_id,
            'address' => $this->faker->address(),
            'status' => $status,
            'payment_status' => $payment_status,
        ];
    }
}
