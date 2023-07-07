<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Brand\Brand;
use App\Repositories\Brand\BrandRepository;
use App\Services\Brand\BrandService;
use Illuminate\Support\ServiceProvider;

class BrandServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(BrandService::class, function () {
           return new BrandService(new BrandRepository(new Brand()));
        });
    }
}
