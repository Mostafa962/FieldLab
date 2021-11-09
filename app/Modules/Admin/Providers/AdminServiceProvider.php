<?php

namespace Admin\Providers;

use Admin\Models\{
    Admin
};
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
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
        view()->composer('Admin::_layout.sidebar', function ($view) {
            $view->with([
                'adminTrashesCount' => Admin::onlyTrashed()->count(),
            ]);
        });

        $moduleName = 'Admin';
        config([
            $moduleName => File::getRequire(loadConfigFile('routePrefix', $moduleName))
        ]);
        $this->loadRoutesFrom(loadRoute('web', $moduleName));
        $this->loadViewsFrom(loadViews($moduleName), $moduleName);
        $this->loadTranslationsFrom(loadTranslations($moduleName), $moduleName);
        $this->loadMigrationsFrom(loadMigrations($moduleName));
    }
}
