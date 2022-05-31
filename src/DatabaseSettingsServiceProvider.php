<?php

namespace Mortenhansen\LaravelUserSettingsInDatabase;

class DatabaseSettingsServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {
        /**
         * Migrations for the package
         */
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ],
            'ldb-settings-migrations'
        );

//        if ($this->app->runningInConsole()) {
//            $destination = database_path('migrations/' . date('Y_m_d_His',
//                    time()) . '_create_user_settings_tables.php');
//            $this->publishes([
//                __DIR__ . '/database/migrations/create_user_settings_tables.php.stub' => $destination,
//            ], 'migrations');
//
////            $this->publishes([
////                __DIR__ . '/../config/translations-database.php' => config_path('translations-database.php'),
////            ]);
//        }
    }
}