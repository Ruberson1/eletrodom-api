<?php

declare(strict_types=1);

namespace App\Repositories\Product;


use App\Models\Product\Product;
use App\Repositories\AbstractRepository;


/**
 * Class ProductRepository
 * @package App\Repositories\Brand
 */
class ProductRepository extends AbstractRepository
{
    /**
     * @param int $limit
     * @param array $orderBy
     * @param $filters
     * @return array
     */
    public function findAllProductsRepository(int $limit = 10, array $orderBy = [], $filters): array
    {
        if(!isset($filters[0])) {
            $results = $this->model::query();

            foreach ($orderBy as $key => $value) {
                if (strstr($key, '-')) {
                    $key = substr($key, 1);
                }

                $results->orderBy($key, $value);
            }

            return $results->paginate($limit)
                ->appends([
                    'order_by' => implode(',', array_keys($orderBy)),
                    'limit' => $limit
                ])
                ->toArray();
        }

        $query = Product::query();
        $ignoredKeys = ['limit', 'page', 'order_by'];

        foreach ($filters as $index => $filter) {

            if (!isset($filter['key']) || in_array($filter['key'], $ignoredKeys)) {
                continue; // Pula para a próxima iteração do loop
            }

            if ($filter['key'] === 'dev_date') {
                $startDate = $filter['value']['start'];
                $endDate = $filter['value']['end'];
                $query->whereBetween('dev_date', [$startDate, $endDate]);
            } else {
                $query->where($filter['key'], $filter['value']);
            }
        }
        $results = $query->get();
        return $results->toArray();
    }

}
