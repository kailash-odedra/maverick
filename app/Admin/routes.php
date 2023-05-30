<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->post('upload', [UploadController::class, 'upload'])->name('admin-upload');

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('service', ServiceController::class);
    $router->resource('client', ClientController::class);
    $router->resource('blog', BlogsController::class);
    $router->resource('sub-service', SubserviceController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('about', AboutController::class);
    $router->resource('testmonials', TestmonialsController::class);
    $router->resource('portfolio', PortfolioController::class);
    $router->resource('team', TeamController::class);
    $router->resource('articles', ArticalsController::class);
    $router->resource('contact', ContactController::class);
    $router->resource('about-us', AboutController::class);
    $router->resource('sub-portfolio', SubportfolioController::class);
    

});
