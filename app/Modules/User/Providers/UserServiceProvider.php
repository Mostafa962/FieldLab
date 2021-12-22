<?php

namespace User\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Admin\Models\{
    Setting,
    Category
};
class UserServiceProvider extends ServiceProvider
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
        View::share('web_settings', Setting::first());
        View::share('web_categories', Category::with('products')->select(['id', 'name'])->get());
        $moduleName = basename(dirname(__DIR__, 1));
        $this->loadRoutesFrom(loadRoute('web', $moduleName));
        // $this->loadRoutesFrom(loadRoute('api', $moduleName));
        $this->loadViewsFrom(loadViews($moduleName), $moduleName);
        $this->loadTranslationsFrom(loadTranslations($moduleName), $moduleName);
        $this->loadMigrationsFrom(loadMigrations($moduleName));
    }

}
