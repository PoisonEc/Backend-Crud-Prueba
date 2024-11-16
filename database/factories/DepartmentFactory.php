<?php

namespace Database\Factories;

use App\Features\Department\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{

    protected $model = Department::class;
    
    /**
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->word,
            'name' => $this->faker->company,
            'active' => $this->faker->boolean(80),
            'user_creation_id' => $this->faker->randomNumber(),
        ];
    }
}
