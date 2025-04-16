<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::create(
            [
                'title' =>  'Buy milk',
                'description' => 'Buy 2 litres of milk',
                'completed' => false,
            ]
        );

        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Todo::create(
                [
                    'title' => $faker->sentence,
                    'description' => $faker->paragraph,
                    'completed' => $faker->boolean,
                ]
                );
        }

    }
}
