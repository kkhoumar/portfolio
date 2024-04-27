<?php

use App\Http\Controllers\AccueilPortfolioController;
use Illuminate\Support\Facades\Route;


route::get("/",[AccueilPortfolioController::class,'index']);
