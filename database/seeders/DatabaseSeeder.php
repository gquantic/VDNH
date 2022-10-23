<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Dealer;
use App\Models\Good;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Вставляем админа
        User::query()->create([
            'name' => 'admin',
            'email' => 'admin@admin.ru',
            'phone' => '89956112267',
            'login' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        // Вставляем дилеров
        Dealer::factory()
            ->count(50)
            ->create();

        // Вставляем товары
        Good::factory()
            ->count(1000)
            ->create();
    }
}
