<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\Subcategory;
use Illuminate\Support\ServiceProvider;
use View;
use Cookie;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        // footer category
    View::composer('frontend.layouts.header', function ($view){
        $view->with('categorys', Category::where('status', 1)->get());
    });

        // frontend app
        View::composer('frontend.layouts.app', function ($view){
            $view->with('setting', Setting::all());
        });
        // frontend app
        View::composer('frontend.loginreg.app', function ($view){
            $view->with('setting', Setting::all());
        });
        // frontend app
        View::composer('frontend.loginreg.login', function ($view){
            $view->with('setting', Setting::all());
        });
        // frontend app
        View::composer('frontend.loginreg.registration', function ($view){
            $view->with('setting', Setting::all());
        });
        // frontend index
        View::composer('frontend.index', function ($view){
            $view->with('setting', Setting::all());
        });
        // frontend contect
        View::composer('frontend.contect', function ($view){
            $view->with('setting', Setting::all());
        });
        // frontend header
        View::composer('frontend.layouts.header', function ($view){
            $view->with('setting', Setting::all());
        });
        // frontend header
        View::composer('frontend.product_details', function ($view){
            $view->with('setting', Setting::all());
        });

        // frontend header category
        View::composer('frontend.category', function ($view){
            $view->with('categorys', Category::where('status', 1)->get());
        });
        // frontend app category
        View::composer('frontend.layouts.app', function ($view){
            $view->with('categorys', Category::where('status', 1)->get());
        });
        // frontend footer
        View::composer('frontend.layouts.footer', function ($view){
            $view->with('setting', Setting::all());
        });

        // frontend app
        View::composer('frontend.layouts.app', function ($view){
            $view->with('setting', Setting::all());
        });

        // backend footer
        View::composer('backend.layouts.footer', function ($view){
            $view->with('setting', Setting::all());
        });
        // backend sidebar
        View::composer('backend.layouts.sidebar', function ($view){
            $view->with('setting', Setting::all());
        });
        // backend app
        View::composer('backend.order.multi_view_invoice_print', function ($view){
            $view->with('setting', Setting::all());
        });
        // backend multi print
        View::composer('backend.layouts.app', function ($view){
            $view->with('setting', Setting::all());
        });
        // auth app
        View::composer('auth.app', function ($view){
            $view->with('setting', Setting::all());
        });
        // auth login
        View::composer('auth.login', function ($view){
            $view->with('setting', Setting::all());
        });
        // member sitebar
        View::composer('frontend.memberdashboard.sitebar', function ($view){
            $view->with('customer', Auth::guard('customer')->user());
        });
        // member header
        View::composer('frontend.loginreg.header', function ($view){
            $view->with('customer', Auth::guard('customer')->user());
        });
    }
}
