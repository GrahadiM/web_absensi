<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Employee::truncate();
        // $user = [
        //     [
        //         'name' => $this->faker->name(),
        //         'nip' => Str::random(4),
        //         'gender' => 'Pria',
        //         'employment' => 'Pegawai',
        //         'religion' => 'Islam',
        //         'address' => ,
        //         'place_of_birth' => ,
        //         'date_of_birth' => $this->faker->dateTimeBetween('1990-01-01', '2010-12-31')->format('d/m/Y'),
        //         'password' => bcrypt('password'),
        //         'remember_token' => Str::random(60),
        //         'email_verified_at' => '2021-07-09 20:19:13',
        //     ],
        // ];

        // foreach ($user as $key => $value) {
        //     Employee::create($value);
        // }
    }
}
