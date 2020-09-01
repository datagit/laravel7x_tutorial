<?php
// step 1: Providers/RiakServiceProvider.php
namespace App\Providers;

use App\Services\AppleService;
use App\Services\BananaService;
use App\Services\CarService;
use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider
{
    // protected $defer = true;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * 1. binding singleton: service name 'riak'
         * 3. resolving: service name in any place in code
         *      app('riak')
         *      resolve('riak', ['id' => 1])
         *      $this->app->make('riak')
         *      $this->app->makeWith('riak', ['id' => 1])
         */
        $this->app->singleton('riak', function($app, $params = []) {
            var_dump($params);
            return time();
        });

        $this->app->singleton('service1', function(){
            return 'service1';
        });
        $this->app->singleton('service2', function(){
            return 'service2';
        });
        $this->app->singleton('service3', function(){
            return 'service3';
        });

        $this->app->singleton('CarService', function ($app) {
            return new CarService();
        });

        $this->app->singleton('AppleService', function ($app) {
            $apple = new AppleService('apple1', 100);
            // dependence on other service
            $apple->setCarService(app('CarService'));
            return $apple;
        });

        $this->app->singleton('BananaService', function ($app) {
            return new BananaService();
        });
    }

    public function provides()
    {
        return ['service1','service2','service3'];
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
