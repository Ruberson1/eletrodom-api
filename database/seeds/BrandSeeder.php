<?php

namespace Database\Seeders;

use App\Models\Brand\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            ['name' => 'Consul'],
            ['name' => 'Brastemp'],
            ['name' => 'Eletrolux'],
            ['name' => 'Philips'],
            ['name' => 'Fischer'],
            ['name' => 'Samsung'],
            ['name' => 'LG'],
        ];

        Brand::insert($brands);
    }
}
