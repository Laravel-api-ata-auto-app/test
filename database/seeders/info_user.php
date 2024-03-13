<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserModel;
class info_user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $faker = \Faker\Factory::create();
          for ($i = 0; $i < 100; $i++) {
            UserModel::create([
                'name' => $faker->name,
                'gender' => $faker->gender,
                'email' => $faker->email,
                'subject' => $faker->subject,
                'profile' => $faker->profile
            ]);
    }
}
}
