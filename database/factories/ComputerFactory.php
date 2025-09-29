<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brands = ['Dell', 'HP', 'Lenovo', 'Asus', 'Acer', 'Apple', 'MSI', 'Samsung', 'Toshiba', 'Sony'];
        $models = ['Inspiron', 'Pavilion', 'ThinkPad', 'VivoBook', 'Aspire', 'MacBook', 'Gaming', 'Galaxy Book', 'Satellite', 'VAIO'];
        $ramSizes = [4, 8, 16, 32, 64];

        return [
            'computer_brand' => $this->faker->randomElement($brands),
            'computer_model' => $this->faker->randomElement($models) . ' ' . $this->faker->randomNumber(4),
            'computer_price' => $this->faker->randomFloat(2, 300, 5000), // Price between $300 and $5000
            'computer_ram_size' => $this->faker->randomElement($ramSizes), // RAM in GB
            'computer_is_laptop' => $this->faker->boolean(70), // 70% chance of being a laptop
        ];
    }
}
