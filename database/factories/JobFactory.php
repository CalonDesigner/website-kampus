<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}
public function definition(): array
      {
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraphs(3, asText: true),
            'salary' => $this->faker->numberBetween(5_000, 150_000),
            'location' => $this->faker->city,
            'category' => $this->faker->randomElement(Job::$category),
            'experience' => $this->faker->randomElement(Job::$experience)
        ];
      }