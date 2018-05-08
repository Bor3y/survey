<?php

namespace Survey;

use Illuminate\Support\ServiceProvider;

class SurveyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        \Schema::defaultStringLength(191);
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views','survey');
    }

    public function register()
    {
        $this->registerPublishables();
    }

    private function registerPublishables(){
        $basePath = dirname(__DIR__);
        $arrPublishable = [
            "migrations" => [
                "$basePath/publishable/database/migrations" => database_path('migrations'),
            ],
            "config" => [
                "$basePath/publishable/config/" => config_path(),
            ]
        ];

        foreach ($arrPublishable as $group => $paths){
            $this->publishes($paths, $group);
        }
    }
}