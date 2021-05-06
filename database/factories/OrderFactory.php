<?php

namespace Database\Factories;

use App\Enums\OrderStatus;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->lastName,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'comment' => $this->faker->text,
            'status' => OrderStatus::Created,
            'track_code' => $this->faker->sha256,
            'delivery_option' => $this->faker->slug,
            'payment_time' => now(),
            'paid_amount' => rand(10,100),
            'payment_information' => json_encode([$this->faker->text(200),$this->faker->text(100)]),
        ];
    }
}
