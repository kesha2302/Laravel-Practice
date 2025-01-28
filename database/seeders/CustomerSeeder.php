<?php

namespace Database\Seeders;

use App\Models\Customers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $customer = new Customers();
        // $customer->name = "Roshni";
        // $customer->email = "roshni@gmail.com";
        // $customer->password = "Roshni123";
        // $customer->address = "Anand";
        // $customer->state = "Gujarat";
        // $customer->country = "India";
        // $customer->gender = "F";
        // $customer->dob = now();
        // $customer->save();

        for($i=1; $i<=10; $i++){
        $faker = Faker::create();
        $customer = new Customers();
        $customer->name = $faker->name;
        $customer->email = $faker->email;
        $customer->password = $faker->password;
        $customer->address = $faker->address;
        $customer->state = $faker->state;
        $customer->country = $faker->country;
        $customer->gender = "M";
        $customer->dob = $faker->date;
        $customer->save();
    }
    }
}
