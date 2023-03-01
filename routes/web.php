<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    \App\Services\QueueInjectorService\QueueInjectorService::setInjectors([
        \App\Jobs\InjectorHandlers\AuthenticationInjector::class
    ]);

    // Any dispatched job from here will have AuthenticationInjector::data
    // then while processing the job AuthenticationInjector::handle
    // will be executed

    \App\Jobs\TestJob::dispatchSync();
});
