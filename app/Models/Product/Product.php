<?php

declare(strict_types=1);

namespace App\Models\Product;

use App\Models\Brand\Brand;
use App\Models\Category\Category;
use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App\Models\Product
 */
class Product extends Model
{

    /**
     * @var string
     */
    protected $table = 'product';

    /**
     * @var string[]
     */
    protected $fillable = [
        'category_id',
        'brand_id',
        'name',
        'price',
        'description',
        'voltage',
        'color'
    ];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array|string[]
     */
    public $rules = [
        'category_id' => 'required|numeric',
        'brand_id' => 'required|numeric',
        'name' => 'required|min:2|max:120',
        'price' => 'required',
        'description' => 'required|min:50',
        'voltage' => 'required|min:2',
        'color' => 'required|min:2',
    ];

    protected $with = [
        'brand',
        'category'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

}