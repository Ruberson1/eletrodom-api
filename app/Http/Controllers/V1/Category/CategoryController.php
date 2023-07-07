<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Category;

use App\Http\Controllers\AbstractController;
use App\Services\Category\CategoryService;

/**
 * Class CategoryController
 * @package App\Http\Controllers\V1\Category
 */
class CategoryController extends AbstractController
{
    /**
     * @var array
     */
    protected array $searchFields = [];

    /**
     * CategoryController constructor.
     * @param CategoryService $category
     */
    public function __construct(CategoryService $category)
    {
        parent::__construct($category);
    }

}
