<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
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
//        Model::shouldBeStrict(!$this->app->isProduction());
        Relation::enforceMorphMap([
            'item' => 'App\Models\Item',
            'collection' => 'App\Models\Collection',
            'user' => 'App\Models\User',
        ]);
    }
}
