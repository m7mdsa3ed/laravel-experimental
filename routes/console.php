<?php

use App\Models\ApiKey;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('api-key:generate', function () {
    $apiKey = ApiKey::create([
        'key' => str()->random(32),
        'is_active' => true
    ]);

    echo $apiKey->key;
})->purpose('Generate an API key');
