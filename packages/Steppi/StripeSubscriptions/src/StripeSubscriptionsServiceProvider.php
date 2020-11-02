<?php

namespace Steppi\StripeSubscriptions;

use Illuminate\Support\ServiceProvider;
use Steppi\StripeSubscriptions\Facade\StripeSubscriptions;
use Steppi\StripeSubscriptions\Config\StripeConfig;

class StripeSubscriptionsServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton("stripe", function($app) {
            return new StripeSubscriptions();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
