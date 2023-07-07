<?php

declare(strict_types=1);

namespace App\Services\Product;

use App\Http\Resources\Task\TaskResource;
use App\Services\AbstractService;
use App\Services\TaskImage\TaskImageService;
use Illuminate\Http\Request;


/**
 * Class ProductService
 * @package App\Services\Product
 */
class ProductService extends AbstractService
{

    /**
     * @param int $limit
     * @param array $orderBy
     * @param $filters
     * @return array
     */
    public function findAllProductsImp( $filters, int $limit = 10, array $orderBy = []): array
    {
        return $this->repository->findAllProductsRepository($limit, $orderBy, $filters);
    }

}
