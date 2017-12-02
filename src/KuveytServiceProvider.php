<?php

namespace Serefercelik\Kuveyt;

use Illuminate\Support\ServiceProvider;
use Serefercelik\Kuveyt\Http\Base\Kuveyt;

class KuveytServiceProvider extends ServiceProvider {


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('kuveyt.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('kuveyt', function ($app)
        {
            return new Kuveyt;
        });
    }


}
