<?php

use Illuminate\Support\Facades\Route;
use App\Functions\Study;

Route::get('/', function () {
    return Study::sum(1, 2);
});
