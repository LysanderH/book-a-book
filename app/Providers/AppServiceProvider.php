<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);

        Blade::directive('formatDate', function ($expression) {
            return "<?php echo ($expression)->format('d/m/Y'); ?>";
        });


        Blade::directive('formatPrice', function ($price) {
            return "<?php echo number_format($price, 2, ',', ' ') . '€'; ?>";
        });
    }
}
