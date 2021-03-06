<?php

define('LUMEN_START', microtime(true));

require_once __DIR__.'/../vendor/autoload.php';

(new Laravel\Lumen\Bootstrap\LoadEnvironmentVariables(
    dirname(__DIR__)
))->bootstrap();

date_default_timezone_set(env('APP_TIMEZONE', 'UTC'));

define('REQUEST_ID', (new \Monolog\Processor\UidProcessor(32))->getUid());

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Here we will load the environment and create the application instance
| that serves as the central piece of this framework. We'll use this
| application as an "IoC" container and router for this framework.
|
*/

$app = new Laravel\Lumen\Application(
    dirname(__DIR__)
);

$app->withFacades();

$app->withEloquent();


/*
|--------------------------------------------------------------------------
| Register Container Bindings
|--------------------------------------------------------------------------
|
| Now we will register a few bindings in the service container. We will
| register the exception handler and the console kernel. You may add
| your own bindings here if you like or you can make another file.
|
*/

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

/*
|--------------------------------------------------------------------------
| Register Config Files
|--------------------------------------------------------------------------
|
| Now we will register the "app" configuration file. If the file exists in
| your configuration directory it will be loaded; otherwise, we'll load
| the default version. You may register other files below as needed.
|
*/

// add application config
foreach (scandir(__DIR__ . '/../config') as $configItem) {
    if (!in_array($configItem, ['.', '..'])) {
        $app->configure(str_replace('.php', '', $configItem));
    }
}

/*
|--------------------------------------------------------------------------
| Register Middleware
|--------------------------------------------------------------------------
|
| Next, we will register the middleware with the application. These can
| be global middleware that run before and after each request into a
| route or middleware that'll be assigned to some specific routes.
|
*/

// $app->middleware([
//     App\Http\Middleware\ExampleMiddleware::class
// ]);

$app->routeMiddleware([
 'auth' => App\Http\Middleware\Authenticate::class,
]);

/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Here we will register all of the application's service providers which
| are used to bind services into the container. Service providers are
| totally optional, so you are not required to uncomment this line.
|
*/

$app->register(App\Providers\AppServiceProvider::class);
$app->register(App\Providers\AuthServiceProvider::class);
// jwt
$app->register(Tymon\JWTAuth\Providers\LumenServiceProvider::class);
$app->register(Maatwebsite\Excel\ExcelServiceProvider::class);
$app->register(App\Providers\EventServiceProvider::class);


// 设置 Excel 别名
$app->alias('Excel', 'Maatwebsite\Excel\Facades\Excel');
$app->alias('app', 'Illuminate\Support\Facades\App');

if ($app->environment() !== 'production') {
    $app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
}

/*
|--------------------------------------------------------------------------
| Load The Application Routes
|--------------------------------------------------------------------------
|
| Next we will include the routes file so that they can all be added to
| the application. This will provide all of the URLs the application
| can respond to, as well as the controllers that may handle them.
|
*/

$app->router->group([
    'namespace' => 'App\Http\Controllers',
], function ($router) {
    require __DIR__ . '/../routes/default.php';
});

$app->router->group([
    'namespace' => 'App\Http\Controllers\Admin',
    'prefix' => 'admin',
], function ($router) {
    require __DIR__.'/../routes/admin.php';
});

$app->router->group([
    'namespace' => 'App\Http\Controllers\Member',
    'prefix' => 'member',
], function ($router) {
    require __DIR__.'/../routes/member.php';
});

$app->router->group([
    'namespace' => 'App\Http\Controllers\Mini',
    'prefix' => 'mini',
], function ($router) {
    require __DIR__.'/../routes/mini.php';
});

$app->router->group([
    'namespace' => 'App\Http\Controllers\Work',
    'prefix' => 'admin',
], function ($router) {
    require __DIR__.'/../routes/work.php';
});

$app->router->group([
    'namespace' => 'App\Http\Controllers\Callback',
    'prefix' => 'callback',
], function ($router) {
    require __DIR__.'/../routes/callback.php';
});

return $app;
