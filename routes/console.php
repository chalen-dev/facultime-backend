<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('make:enum {name}', function ($name) {
    $this->info("Creating enum: {$name}");
})->purpose('Create a new enum class');

Artisan::command('make:scaffold {name}', function ($name) {
    $this->info("Creating scaffold: {$name}");
})->purpose('Create a new scaffold');
