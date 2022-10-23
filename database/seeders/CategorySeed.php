<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'Промышленное машиностроение и металлообработка',
                'slug' => 'prom',
            ],
            [
                'title' => 'Энергетическое машино- и станкостроение',
                'slug' => 'energetics',
            ],
            [
                'title' => 'Химическая промышленность',
                'slug' => 'himProm',
            ],
            [
                'title' => 'Агропромышленный комплекс',
                'slug' => 'agroProm',
            ],
            [
                'title' => 'Легкая промышленность',
                'slug' => 'lightProm',
            ],
            [
                'title' => 'IT-индустрия',
                'slug' => 'it',
            ],
        ]);
    }
}
