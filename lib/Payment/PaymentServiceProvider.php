<?php

namespace Payment;

use Illuminate\Support\ServiceProvider;
use Payment\Drivers\PaymentDriverContract;

class PaymentServiceProvider extends ServiceProvider
{

    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton(PaymentGatewayManager::class, function ($app){
            $manager = new PaymentGatewayManager($app);

            $manager->extend('abc', function($app){
                // return a new instance of driver
                return new class implements PaymentDriverContract{
                    public function pay($amount)
                    {
                        // TODO: Implement pay() method.
                        dump('abc pay');
                    }

                    public function refund($amount)
                    {
                        // TODO: Implement refund() method.
                    }
                };
            });

            return $manager;
        });
    }


}