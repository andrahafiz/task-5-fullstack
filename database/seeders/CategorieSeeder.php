<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Categorie::insert(
            [
                [
                    'name' => 'Kesehatan',
                    'user_id' => '1'
                ],
                [
                    'name' => 'Olahraga',
                    'user_id' => '1'
                ],
                [
                    'name' => 'Teknologi',
                    'user_id' => '2'
                ]
            ]
        );
    }
}
