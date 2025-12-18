<?php

use App\Http\Controllers\Admin\InformasiKlienController;
use App\Models\InformasiKlien;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\MedsosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $totalClients = InformasiKlien::count();

    // Group by industry for chart data
    $industryData = InformasiKlien::select('industri', DB::raw('count(*) as total'))
        ->groupBy('industri')
        ->orderByDesc('total')
        ->get();

    $chartLabels = $industryData->pluck('industri');
    $chartData = $industryData->pluck('total');
    $recentClients = InformasiKlien::latest()->limit(6)->get();

    // Debug: check if data is passed
    // dd($chartLabels->toArray(), $chartData->toArray());

    return view('dashboard', compact('totalClients', 'chartLabels', 'chartData', 'recentClients'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin routes for client management
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('informasi-klien', InformasiKlienController::class);
        Route::resource('medsos', MedsosController::class);
    });
});

require __DIR__.'/auth.php';
