<?php
// step 1: Providers/RiakServiceProvider.php
namespace App\Providers;

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
