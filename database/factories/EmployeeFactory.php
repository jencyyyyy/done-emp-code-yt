<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //Employee faker info
            "name"=> $this->faker->name(),
            "job_title"=> $this->faker->jobTitle(),
            'joining_date'=>$this->faker-> date(),
            'salary'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 10000, $max = 10000000),
            "email"=> $this->faker->safeEmail(),
            "mobile_no"=> $this->faker->phoneNumber(),
            "address"=> $this->faker->address()


        ];
    }
}
