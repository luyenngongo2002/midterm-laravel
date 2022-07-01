<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class T_restaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name(),
            'description'=> $this->faker->name(),
            'price' => rand(1, 100) ,
            'image' => 'food' . rand(1, 3) . '.jpeg',
            // 'mf_id' => rand(1, 10)        
        ];
    }
}
