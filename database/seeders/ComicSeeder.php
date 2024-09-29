<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Comic::create([
                'title' => $faker->randomElement(['Joker', 'Green Arrow', 'Supergirl', 'Shazam', 'Lucifer', 'Flash']),
                'description' => $faker->paragraph(),
                'price' => $faker->randomFloat(2, 1, 100),
                'image' => $faker->imageUrl(200, 300),
                'series' => $faker->word(),
                'type' => $faker->word()
            ]);
        }
    }
}