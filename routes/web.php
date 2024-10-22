<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamisasTimeController;


Route::get("/", [CamisasTimeController::class, "index"]);
