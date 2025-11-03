<?php

namespace Database\Factories;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           

             'title' => fake()->sentence(),
             'description'=>fake()->paragraph(10),
             'duration'=>fake()->time(),
             'price'=>fake()->numberBetween(100,1000),
             'image'=>fake()->imageUrl(),







        ];
    }
}
