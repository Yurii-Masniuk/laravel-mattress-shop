<?php

use App\Models\Mattress;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Mattress::all();
    return view('welcome', ['products' => $products]);
});

Route::get('/checkout/{id}', function ($id) {
    $mattress = \App\Models\Mattress::find($id);
    return view('checkout', ['mattress' => $mattress]);
});

use Illuminate\Http\Request;

Route::post('/order-success', function (Request $request) {
    return view('success', ['name' => $request->name]);
})->name('order.confirm');

use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::delete('/admin/mattress/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');

Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
