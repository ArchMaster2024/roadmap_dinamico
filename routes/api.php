<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoadmapController;

Route::get("/roadmap/{user}", RoadmapController::class)
    ->where(["user" => "[0-9]+"])
    ->name("roadmap");
