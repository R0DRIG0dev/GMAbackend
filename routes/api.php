<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('cortos/{corto}', [CortoController::class,'show']);
