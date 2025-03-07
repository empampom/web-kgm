<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get("/usg-kamar_bedah", function () {
    return view("usg_kamar_bedah");
})->name("usg_kamar_bedah");
Route::get("/usg-urologi", function () {
    return view("usg_urologi");
})->name("usg_urologi");
Route::get("/digital-radiology", function () {
    return view("digital_radiology");
})->name("digital_radiology");
Route::get("/console-ct-scan", function () {
    return view("console_ct_scan");
})->name("console_ct_scan");
Route::get("/obat-alkes-2025", function () {
    return view("obat_alkes_2025");
})->name("obat_alkes_2025");

Route::controller(AuthenticationController::class)->group(function () {
    Route::get("/login", "login")->name("login");
    Route::post("/login-act", "loginAct")->name("login_act");
});
Route::middleware(['auth'])->group(function () {
    Route::prefix("administrator")->group(function () {
        Route::controller(AdministratorController::class)->group(function () {
            Route::name('administrator.')->group(function () {
                Route::get("/", "index")->name("index");
                Route::get("/create", "create")->name("create");
                Route::post("/store", "store")->name("store");
                Route::get("/edit/{id}", "edit")->name("edit");
                Route::patch("/update/{id}", "update")->name("update");
                Route::get("/destroy/{id}", "destroy")->name("destroy");
            });
        });
    });
});
Route::controller(DashboardController::class)->group(function () {
    Route::get("/", "index")->name("home");
    Route::get("/detail/{id}", "detail")->name("dashboard.detail");
});

