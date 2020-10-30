<?php

namespace App\Providers;

use App\Brand;
use App\Form;
use App\SeoTitle;
use App\Suggestion;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

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
        $seo = SeoTitle::where('url', $_SERVER['REQUEST_URI'] ?? '')->first();

        $recommendations = DB::table('recommendations')
            ->leftJoin('cars', 'recommendations.car_id', '=', 'cars.id')
            ->select('cars.*')
            ->get();

        Paginator::useBootstrap();

        View::share('seo', $seo);
        View::share('brands', Brand::all());
        View::share('forms', Form::all());
        View::share('suggestions', Suggestion::all());
        View::share('recommendations', $recommendations);

        Blade::directive('svg', function ($expression)
        {
            return "<?php echo Storage::disk('public')->get(json_decode($expression)[0]->download_link); ?>";
        });

        Voyager::addAction(\App\Actions\PublishCar::class);
    }
}
