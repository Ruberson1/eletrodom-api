<?php

namespace Database\Seeders;

use App\Models\Category\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Geladeira'],
            ['name' => 'Lavadoura'],
            ['name' => 'Fogão'],
            ['name' => 'Microondas'],
        ];

        Category::insert($categories);
    }
}
