# laravel7x_tutorial
https://vegibit.com/25-popular-applications-built-with-laravel/
0. https://viblo.asia/p/laravel-beauty-recipes-best-practices-6BAMYk9Evnjz
1. https://github.com/barryvdh/laravel-debugbar
2. https://github.com/rap2hpoutre/laravel-log-viewer
3. https://laravel.com/docs/7.x/providers
```bash
# https://programmer.group/laravel-practice-service-providers.html
# 1. create serviceProvider
php artisan make:provider RiakServiceProvider
# 2. Autoloaded Service Providers 
config/app.php
# 3. test
php artisan tinker
    # resolve('riak', ['id' => 1])
    # app('riak', ['id' => 1])
```
4. interface - contracts: https://laravel.com/docs/7.x/contracts#introduction
5. How to create Facade: https://www.tutorialspoint.com/laravel/laravel_facades.htm
