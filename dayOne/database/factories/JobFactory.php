<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Tag;
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
            'employer_id' => Employer::factory(),
            'tag_id' => Tag::factory(),
            'title' => fake()->jobTitle(),
            'description' => fake()->paragraph(1),
            'location' => fake()->city(),
            'salary' => fake()->numberBetween(1000, 50000),
            'company' => fake()->company(),
        ];
    }

}
