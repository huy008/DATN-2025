<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ViewShareServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Facades\View::composer('*', function (View $view) {
            $view->with('categoriesWithProductCount', Category::withCount('products')->get());
        });
    }
}
