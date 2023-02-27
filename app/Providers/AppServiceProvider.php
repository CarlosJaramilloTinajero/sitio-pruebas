<?php

namespace App\Providers;

// use App\Models\Extras;
// use Illuminate\Support\Facades\View;
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
        // $tiposCamio = Extras::where('key', 'LIKE', "%TIPOCAMBIO%")->get();
        // View::share('tiposCambio', $tiposCamio);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
