<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobTitleFactory extends Factory
{

    /**
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->word,
            'name' => $this->faker->jobTitle,
            'active' => $this->faker->boolean(80),
            'user_creation_id' => $this->faker->randomNumber(),
        ];
    }
}
