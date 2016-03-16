<?php

use Illuminate\Database\Seeder;
use \App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('en_IN');

        foreach(range(1,30000) as $index)
        {
            Student::create([
                'first_name' => $faker->firstName($gender = 'male'|'female'),
                'middle_name' => $faker->firstname($gender = 'male'|'female'),
                'last_name' => $faker->lastName,
                'admission_date' => $faker->dateTimeBetween('-4 years', '-2 days')->format('d/m/Y'),
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email
            ]);
        }
    }
}
