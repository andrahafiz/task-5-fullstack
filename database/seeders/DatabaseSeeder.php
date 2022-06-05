<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
// use App\Models\;
// use A
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //Seeader Tabel User
        \App\Models\User::insert([[
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('asdasdasd')
        ], [
            'name' => 'Andra',
            'email' => 'andra@gmail.com',
            'password' => Hash::make('asdasdasd')
        ]]);

        $this->call([
            CategorieSeeder::class,
            ArticleSeeder::class
        ]);
    }
}
