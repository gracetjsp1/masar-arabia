<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\MainProduct;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share $mainProducts with all views
        View::composer('*', function ($view) {
            $view->with('mainProducts', MainProduct::all());
        });
    }

    public function register()
    {
        //
    }
}

