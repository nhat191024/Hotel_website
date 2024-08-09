<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PromotionController;

Route::get('/', function () {
    return view('index');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::prefix('/category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/add', [CategoryController::class, 'showAddCategory'])->name('admin.category.show_add');
        Route::post('/add', [CategoryController::class, 'addCategory'])->name('admin.category.add');
        Route::post('/edit', [CategoryController::class, 'editCategory'])->name('admin.category.edit');
        Route::get('/edit/{id}', [CategoryController::class, 'showEditCategory'])->name('admin.category.show_edit');
        Route::get('/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('admin.category.delete');
    });

    Route::prefix('/banner')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('admin.banner.index');
        Route::get('/add', [BannerController::class, 'showAddBanner'])->name('admin.banner.show_add');
        Route::post('/add', [BannerController::class, 'addBanner'])->name('admin.banner.add');
        Route::post('/edit', [BannerController::class, 'editBanner'])->name('admin.banner.edit');
        Route::get('/edit/{id}', [BannerController::class, 'showEditBanner'])->name('admin.banner.show_edit');
        Route::get('/change-status/{id}/{status}', [BannerController::class, 'changeStatus'])->name('admin.banner.change_status');
        Route::get('/delete/{id}', [BannerController::class, 'deleteBanner'])->name('admin.banner.delete');
    });

    Route::prefix('/promotion')->group(function (){
        Route::get('/', [PromotionController::class, 'index'])->name('admin.promotion.index');
        Route::get('/add', [PromotionController::class, 'showAddPromotion'])->name('admin.promotion.show_add');
        Route::post('/add', [PromotionController::class, 'addPromotion'])->name('admin.promotion.add');
        // Route::post('/edit', [PromotionController::class, 'editPromotion'])->name('admin.promotion.edit');
        Route::get('/edit/{id}', [PromotionController::class, 'showEditPromotion'])->name('admin.promotion.show_edit');
        // Route::get('/change-status/{id}/{status}', [PromotionController::class, 'changeStatus'])->name('admin.promotion.change_status');
        // Route::get('/delete/{id}', [PromotionController::class, 'deletePromotion'])->name('admin.promotion.delete');
    });
});
