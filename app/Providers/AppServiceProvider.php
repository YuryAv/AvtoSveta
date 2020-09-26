<?php

namespace App\Providers;

use App\Brand;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap();

        View::share('brands', Brand::all());

        Blade::directive('svg', function ($expression)
        {
            return "<?php echo Storage::disk('public')->get(json_decode($expression)[0]->download_link); ?>";
        });
    }
}
