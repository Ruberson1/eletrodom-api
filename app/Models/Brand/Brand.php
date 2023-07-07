<?php

declare(strict_types=1);

namespace App\Models\Brand;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class Brand
 * @package App\Models\Brand
 */
class Brand extends Model
{
    /**
     * @var string
     */
    protected $table = 'brand';

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array|string[]
     */
    public $rules = [
        'name' => 'required|min:2|max:120',
    ];
}