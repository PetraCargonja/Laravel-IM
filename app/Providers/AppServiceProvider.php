<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::share('title', 'Moja videoteka');

        // proširujemo Blade sa novom direktivom
        Blade::directive('rand', function () {
            return "<?php echo rand(1, 10); ?>";
        });
    }
}
