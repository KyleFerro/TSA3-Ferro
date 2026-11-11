<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('about:tasks', function () {
    $this->comment('Tasks for Today Management System');
})->purpose('Display basic project information');
