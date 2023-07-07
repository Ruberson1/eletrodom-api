<?php

namespace Database\Seeders;

use App\Models\Product\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Geladeira Brastemp Frost Free Inverse 588 litros',
                'price' => 2.999,
                'description' => 'A Geladeira Brastemp Frost Free Inverse 588 litros é elegante por fora e gigante por dentro!
                Possui altissima capacidade para armazenar todos seus alimentos de maneira inteligente.',
                'voltage' => '220v',
                'color' => 'Inox',
                'brand_id' => 1,
                'category_id' => 1
            ],
            [
                'name' => 'Lavadoura Brastemp Frost Free Inverse 588 litros',
                'price' => 2.999,
                'description' => 'A Geladeira Brastemp Frost Free Inverse 588 litros é elegante por fora e gigante por dentro!
                Possui altissima capacidade para armazenar todos seus alimentos de maneira inteligente.',
                'voltage' => '220v',
                'color' => 'Inox',
                'brand_id' => 1,
                'category_id' => 2
            ],
            [
                'name' => 'Fogão Brastemp Frost Free Inverse 588 litros',
                'price' => 2.999,
                'description' => 'A Geladeira Brastemp Frost Free Inverse 588 litros é elegante por fora e gigante por dentro!
                Possui altissima capacidade para armazenar todos seus alimentos de maneira inteligente.',
                'voltage' => '220v',
                'color' => 'Inox',
                'brand_id' => 1,
                'category_id' => 3
            ],
            [
                'name' => 'Microondas Brastemp Frost Free Inverse 588 litros',
                'price' => 2.999,
                'description' => 'A Geladeira Brastemp Frost Free Inverse 588 litros é elegante por fora e gigante por dentro!
                Possui altissima capacidade para armazenar todos seus alimentos de maneira inteligente.',
                'voltage' => '220v',
                'color' => 'Inox',
                'brand_id' => 1,
                'category_id' => 4
            ]
        ];

        Product::insert($products);
    }
}
