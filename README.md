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
6. Custom Validation Rules with form request validation method in Laravel: https://lavalite.org/blog/custom-validation-rules-with-form-request-validation-method-in-laravel
```bash
php artisan make:request UserStoreRequest
php artisan make:provider ValidatorServiceProvider
```
- check connection to DB
```bash
php artisan tinker
DB::connection()->getPdo()
```
```bash
php artisan make:controller PostController
# PostController@show
```
```bash
# create model
php artisan help make:model
php artisan make:model Project -mc
# Model created successfully.
# Created Migration: 2020_09_24_145059_create_projects_table
# Controller created successfully.

php artisan migrate
# Migrating: 2020_09_24_145059_create_projects_table
# Migrated:  2020_09_24_145059_create_projects_table (0.02 seconds)
```
- mix
```bash
npm install
npm run dev
npm run watch
```
