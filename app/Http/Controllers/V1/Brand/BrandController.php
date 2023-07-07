<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Brand;

use App\Http\Controllers\AbstractController;
use App\Services\Brand\BrandService;


/**
 * Class BrandController
 * @package App\Http\Controllers\V1\Brand
 */
class BrandController extends AbstractController
{
    /**
     * @var array
     */
    protected array $searchFields = [];

    /**
     * BrandController constructor.
     * @param BrandService $brand
     */
    public function __construct(BrandService $brand)
    {
        parent::__construct($brand);
    }

}
