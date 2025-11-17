<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserManagementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    $totalAudits = App\Models\Audit::count();
    $avgScore = App\Models\Audit::whereNotNull('skor_total')->avg('skor_total');
    $pendingAudits = App\Models\Audit::where('status_audit', '!=', 'Selesai')->count();
    $recentAudits = App\Models\Audit::with(['auditor', 'validasi.kinerja.user.unit'])
        ->orderBy('tanggal_audit', 'desc')
        ->limit(5)
        ->get();
    
    return view('dashboard', compact('totalAudits', 'avgScore', 'pendingAudits', 'recentAudits'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    // User profile view for any user
    Route::get('/user/{user}', [ProfileController::class, 'viewUser'])->name('user.profile');
    
    // Master Data Routes
    Route::resource('standar-mutu', App\Http\Controllers\StandarMutuController::class);
    Route::resource('indikator-kinerja', App\Http\Controllers\IndikatorKinerjaController::class);
    Route::resource('kriteria', App\Http\Controllers\KriteriaController::class);
    
    // Performance Routes
    Route::resource('data-kinerja', App\Http\Controllers\DataKinerjaController::class);
    Route::resource('validasi', App\Http\Controllers\ValidasiController::class);
    
    // Audit Routes
    Route::resource('audit', App\Http\Controllers\AuditController::class);
    Route::resource('audit-temuan', App\Http\Controllers\AuditTemuanController::class);
    Route::resource('tindak-lanjut', App\Http\Controllers\TindakLanjutController::class);
    
    // Report Routes
    Route::resource('laporan', App\Http\Controllers\LaporanController::class);
    Route::get('audit-trail', [App\Http\Controllers\AuditTrailController::class, 'index'])->name('audit-trail.index');
    
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::resource('/users', UserManagementController::class);
    });
});

require __DIR__.'/auth.php';
