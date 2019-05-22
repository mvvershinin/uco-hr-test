<?php

use App\Contact;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('en_GB');

        $limit = 10;

        $gender = ['male', 'female'];

        for ($i = 0; $i < $limit; $i++) {
            Contact::create([
                'isActive' => (bool)random_int(0, 1),
                'age' => random_int(10, 70),
                'eyeColor' => $faker->colorName,
                'name' => $faker->lastName . ' ' . $faker->firstName,
                'gender' => $faker->randomElement($gender),
                'company' => $faker->company,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
            ]);
        }
    }
}
