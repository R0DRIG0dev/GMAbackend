<?php

namespace App\Providers;

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
        // if (env('APP_DEBUG')) {
        //     \DB::listen(function ($query) {
        //         \Log::info("Query Time:{$query->time}ms] $query->sql", $query->bindings);
        //         // Para mostrar las consultas en la consola
        //         // echo "Query Time:{$query->time}ms] $query->sql";
        //     });
        // }
        
        // \DB::listen(function($query) {
        //     \Log::info(
        //         $query->sql,
        //         [
        //             'bindings' => $query->bindings,
        //             'time' => $query->time
        //         ]
        //     );
        // });
    }
}
