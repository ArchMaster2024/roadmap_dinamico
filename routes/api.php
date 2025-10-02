<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoadmapController;

Route::get("/roadmap/{user_id}", [RoadmapController::class, 'index'])->where(["user_id" => "[0-9]+"])->name("roadmap");
