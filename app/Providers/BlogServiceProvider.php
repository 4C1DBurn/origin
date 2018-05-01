<?php

namespace App\Providers;

use App\Category;
use function foo\func;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class BlogServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->topMenu();
    }

// Top menu for users
    public function topMenu() {
        View::composer('layouts.header', function ($view) {
            $view->with('categories', \App\Category::where('parent_id', 0)->where('published', 1)->get());
        });
    }
}