<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Share categories data with all views
        View::composer('components.layouts.header', function ($view) {
            $categories = Category::all();  // Fetch categories from the database
            $view->with('categories', $categories);  // Share the categories with the header view
        });
    }
}
