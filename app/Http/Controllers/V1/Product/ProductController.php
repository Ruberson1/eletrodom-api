<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Product;

use App\Helpers\OrderByHelper;
use App\Http\Controllers\AbstractController;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product\Brand;
use App\Services\Product\ProductService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * Class ProductController
 * @package App\Http\Controllers\V1\Brand
 */
class ProductController extends AbstractController
{
    /**
     * @var array
     */
    protected array $searchFields = [];

    /**
     * ProductController constructor.
     * @param ProductService $product
     */
    public function __construct(ProductService $product)
    {
        parent::__construct($product);
    }


    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function findAllProducts(Request $request): JsonResponse
    {
        $filters = $request->query();
        try {
            $limit = (int) $request->get('limit', 10);
            $orderBy = $request->get('order_by', []);

            if (!empty($orderBy)) {
                $orderBy = OrderByHelper::treatOrderBy($orderBy);
            }

            $searchString = $request->get('q', '');

            if (!empty($searchString)) {
                $result = $this->service->searchBy(
                    $searchString,
                    $this->searchFields,
                    $limit,
                    $orderBy
                );
            } else {
                $result = $this->service->findAllProductsImp($filters, $limit, $orderBy);
            }

            $response = $this->successResponse($result, Response::HTTP_PARTIAL_CONTENT);
        } catch (Exception $e) {
            $response = $this->errorResponse($e);
        }

        return response()->json($response, $response['status_code']);
    }

}
