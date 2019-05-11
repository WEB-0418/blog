<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\NewsCategory;
use App\Models\Season;
use App\Models\Material;
use App\Models\Producer;
use Illuminate\Support\Facades\Schema;

use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        View::composer('blog.filters', function ($view) {
            $view->with([
                'categories' => NewsCategory::all()
            ]);
        });

        View::composer('catalog.sidebar', function ($view) {
            $view->with([
                'seasons' => Season::all(),
                'materials' => Material::all(),
                'producers' => Producer::all(),
            ]);
        });
    }
}
