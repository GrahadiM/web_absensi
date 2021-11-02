<?php

namespace Database\Factories;

use App\Models\Employee;
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
        $faker = Factory::create();
        foreach (range(1,50) as $index) {

            Employee::create([
                'name'              =>  $faker->firstNameMale,
                'nip'               =>  $faker->unique->randomDigit,
                'employment'        => 'Pegawai',
                'religion'          => 'Islam',
                'address'           =>  $faker->city,
                'place_of_birth'    =>  $faker->city,
                'date_of_birth'     =>  $faker->dateTimeBetween('1990-01-01', '2010-12-31')->format('d/m/Y'),
            ]);

        }
    }
}
