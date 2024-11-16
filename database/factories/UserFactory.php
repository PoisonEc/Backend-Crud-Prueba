<?php

namespace Database\Factories;

use App\Features\Department\Models\Department;
use App\Features\JobTitle\Models\JobTitle;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->unique()->userName,
            'first_name' => $this->faker->firstName,
            'second_name' => $this->faker->firstName,
            'first_last_name' => $this->faker->lastName,
            'second_last_name' => $this->faker->lastName,
            'department_id' => Department::inRandomOrder()->first()->id,
            'job_title_id' => JobTitle::inRandomOrder()->first()->id,
        ];
    }

}
