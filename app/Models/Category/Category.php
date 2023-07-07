<?php

declare(strict_types=1);

namespace App\Models\Category;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class Category
 * @package App\Models\Category
 */
class Category extends Model
{

    /**
     * @var string
     */
    protected $table = 'category';

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