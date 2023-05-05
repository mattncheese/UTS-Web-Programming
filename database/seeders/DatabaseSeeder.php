<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Coffee;
use App\Models\CoffeeCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Mr. Vico Lomar',
            'email' => 'vicolomar@gmail.com',
            'password' => bcrypt('asd'),
            'loyalty' => User::$GOLD_LOYALTY,
            'point' => 0
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Ms. Fei Fei Li',
            'email' => 'feifeili@gmail.com',
            'password' => bcrypt('asd'),
            'loyalty' => User::$GREEN_LOYALTY,
            'point' => 0
        ]);

        CoffeeCategory::factory()->create([
            'name' => 'Signature'
        ]);
        CoffeeCategory::factory()->create([
            'name' => 'Expresso'
        ]);
        CoffeeCategory::factory()->create([
            'name' => 'Brewed'
        ]);
        CoffeeCategory::factory()->create([
            'name' => 'Blended Coffee'
        ]);

        Coffee::factory()->create([
            'name' => 'Americano',
            'categoryId' => 1,
            'image_url' => '/americano.png',
            'price' => 30000,
        ]);

        Coffee::factory()->create([
            'name' => 'Cappucino',
            'categoryId' => 1,
            'image_url' => '/cappucino.png',
            'price' => 50000,
        ]);

        Coffee::factory()->create([
            'name' => 'Flat Black',
            'categoryId' => 1,
            'image_url' => '/flat_black.png',
            'price' => 32000,
        ]);

        Coffee::factory()->create([
            'name' => 'Flat Black',
            'categoryId' => 3,
            'image_url' => '/flat_black.png',
            'price' => 28000,
        ]);

        Coffee::factory()->create([
            'name' => 'Flat White',
            'categoryId' => 2,
            'image_url' => '/flat_white.png',
            'price' => 23000,
        ]);
        Coffee::factory()->create([
            'name' => 'Latte',
            'categoryId' => 3,
            'image_url' => '/latte.png',
            'price' => 19000,
        ]);
        Coffee::factory()->create([
            'name' => 'Mocha',
            'categoryId' => 4,
            'image_url' => '/mocha.png',
            'price' => 34000,
        ]);
    }
}
