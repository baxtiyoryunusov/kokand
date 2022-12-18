<?php

namespace App\Providers;

use App\Category;
use App\SidebarControl;
use App\brands;
use App\Color;
use App\Variant;
use App\Favori;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }


    public function boot()
    {


        View::share('menu', Category::with('getP')->orderBY("order", 'ASC')->where("status", 1)->where('p_id', Null)->get());
        View::share('CategoryAll', Category::where("status", 1)->get());
        View::share('brendAll', brands::where("id", '!=', 2)->get());
        View::share('brandFilterAll', brands::all());
        View::share('colorFilterAll', Color::all());
        View::share('sizeFilterAll', variant::all());
        View::share('url', '');


        Paginator::defaultView('view-name');
        Paginator::defaultSimpleView('view-name');

    }
}
