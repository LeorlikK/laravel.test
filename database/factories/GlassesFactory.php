<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Glasses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Glasses>
 */
class GlassesFactory extends Factory
{
    protected $model = Glasses::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'slug' => $this->faker->unique()->word(),
            'text' => $this->faker->text(),
            'price' => random_int(1, 40),
            'discount' => random_int(1, 10),
            'brand_id' => Brand::get()->random()->id,
            'is_public' => 1
        ];
    }
}
