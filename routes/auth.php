<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Affiliate\AuthController as AffiliateAuthController;
use App\Http\Controllers\Affiliate\RegisterController as AffiliateRegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

Route::middleware('guest')->group(function () {
  //user routes
  Route::get('register', [RegisterController::class, 'create'])->name('register');
  Route::post('register', [RegisterController::class, 'store'])->name('register.store');

  Route::get('login', [AuthController::class, 'create'])->name('login');
  Route::post('login', [AuthController::class, 'store'])->name('login.store');



  //admin routes
  // Route::get('admin-login', [AdminAuthController::class, 'create'])->name('admin-login');
  // Route::post('admin-login', [AdminAuthController::class, 'store'])->name('admin-login.store');

  Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login', [AdminAuthController::class, 'create'])->name('login');
    Route::post('login', [AdminAuthController::class, 'store'])->name('login.store');
  });

  //affiliate routes

  Route::group(['prefix' => 'affiliate', 'as' => 'affiliate.'], function () {
    Route::get('login', [AffiliateAuthController::class, 'create'])->name('login');
    Route::post('login', [AffiliateAuthController::class, 'store'])->name('login.store');
    Route::get('register', [AffiliateRegisterController::class, 'create'])->name('register');
    Route::post('register', [AffiliateRegisterController::class, 'store'])->name('register.store');
  });

  // Route::get('affiliate-login', [AffiliateAuthController::class, 'create'])->name('affiliate-login');
  // Route::post('affiliate-login', [AffiliateAuthController::class, 'store'])->name('affiliate-login.store');

  // Route::get('affiliate-register', [AffiliateRegisterController::class, 'create'])->name('affiliate-register');
  // Route::post('affiliate-register', [AffiliateRegisterController::class, 'store'])->name('affiliate-register.store');

  Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
    ->name('password.request');

  Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
    ->name('password.email');

  Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    ->name('password.reset');

  Route::post('reset-password', [NewPasswordController::class, 'store'])
    ->name('password.store');
});

Route::middleware('auth')->group(function () {

  Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify');

  Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('verification.send');
  Route::post('logout', [AuthController::class, 'destroy'])->name('logout');
  Route::post('admin/logout', [AdminAuthController::class, 'destroy'])->name('admin.logout');
  Route::post('affiliate/logout', [AffiliateAuthController::class, 'destroy'])->name('affiliate.logout');
});
