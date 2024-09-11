<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\layouts\Blank;
use App\Http\Controllers\layouts\Fluid;

use App\Http\Controllers\SliderController;
use App\Http\Controllers\layouts\Container;
use App\Http\Controllers\theme\tables\Basic;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\layouts\WithoutMenu;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\theme\icons\Boxicons;
use App\Http\Controllers\layouts\WithoutNavbar;
use App\Http\Controllers\theme\cards\CardBasic;
use App\Http\Controllers\theme\pages\MiscError;
use App\Http\Controllers\user_interface\Alerts;
use App\Http\Controllers\user_interface\Badges;
use App\Http\Controllers\user_interface\Footer;
use App\Http\Controllers\user_interface\Modals;
use App\Http\Controllers\user_interface\Navbar;
use App\Http\Controllers\user_interface\Toasts;
use App\Http\Controllers\backend\SizeController;
use App\Http\Controllers\backend\UnitController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\user_interface\Buttons;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\ColorController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\user_interface\Carousel;
use App\Http\Controllers\user_interface\Collapse;
use App\Http\Controllers\user_interface\Progress;
use App\Http\Controllers\user_interface\Spinners;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\user_interface\Accordion;
use App\Http\Controllers\user_interface\Dropdowns;
use App\Http\Controllers\user_interface\Offcanvas;
use App\Http\Controllers\user_interface\TabsPills;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\user_interface\ListGroups;
use App\Http\Controllers\user_interface\Typography;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\theme\extended_ui\TextDivider;
use App\Http\Controllers\theme\form_elements\BasicInput;
use App\Http\Controllers\theme\form_elements\InputGroups;
use App\Http\Controllers\theme\form_layouts\VerticalForm;
use App\Http\Controllers\user_interface\TooltipsPopovers;
use App\Http\Controllers\theme\pages\MiscUnderMaintenance;
use App\Http\Controllers\theme\form_layouts\HorizontalForm;
use App\Http\Controllers\theme\extended_ui\PerfectScrollbar;
use App\Http\Controllers\theme\pages\AccountSettingsAccount;
use App\Http\Controllers\user_interface\PaginationBreadcrumbs;
use App\Http\Controllers\theme\pages\AccountSettingsConnections;
use App\Http\Controllers\theme\pages\AccountSettingsNotifications;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Affiliate\AuthController as AffiliateAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Affiliate\DashboardController as AffiliateDashboardController;

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Admin\RoleController;


require __DIR__ . '/auth.php';

Route::get('/pass', function () {
  return Hash::make('123456');
  });

    //** backend routes *//
    Route::middleware('auth')->group(function () {
      Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

      Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
      Route::resource('units', UnitController::class);
      Route::resource('sliders', SliderController::class);
      Route::resource('categories', CategoryController::class);
      Route::resource('brands', BrandController::class);
      Route::resource('products', ProductController::class);
      Route::resource('colors', ColorController::class);
      Route::resource('sizes', SizeController::class);  
      Route::resource('roles', RoleController::class);

      Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
  
      // view all
      Route::get('/products', [ProductController::class, 'index'])->name('products.index');

      });

      Route::group(['prefix' => 'affiliate', 'as' => 'affiliate.'], function () {
      Route::get('/dashboard', [AffiliateDashboardController::class, 'index'])->name('dashboard');
      });

      Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
      Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
      Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
      });
      // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    });

    //** End backend routes *//

    //** Frontend Routes *//
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/all-products', [FrontendController::class, 'products'])->name('product-page');
    Route::get('/product/{id}', [FrontendController::class, 'allProducts'])->name('product.all');
    // Route::get('/products/best-selling-products', [FrontendController::class, 'allProducts'])->name('product.bestSelling');
    Route::get('/product-details/{id}', [FrontendController::class, 'productDetails'])->name('product-details');

    Route::get('/shopping-cart', [FrontendController::class, 'shopping_cart'])->name('shopping_cart');
    Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
    Route::post('/placeorder', [FrontendController::class, 'placeorder'])->name('placeorder.form'); 
    Route::get('/search', [FrontendController::class, 'search']);
    Route::get('/products/all', [ProductController::class, 'showAllProducts'])->name('products.all');
    Route::get('/products/{slug}', [FrontendController::class, 'cat_wise_products'])->name('cat_wise_products');                    
    Route::post('product/{slug}/reviews', [ReviewController::class, 'store'])->middleware('auth')->name('reviews.store');

    // Route::get('/products', [ProductController::class, 'index'])->name('products');

    //** End Frontend Routes *//


    //** theme route *//
    // Route group
      Route::group(['prefix' => 'theme', 'as' => 'theme.'], function () {
        Route::get('/cards-basic', [CardBasic::class, 'index'])->name('cards-basic');
        Route::get('/analytics', [Analytics::class, 'index'])->name('analytics');
        Route::get('/affiliate-register', [AffiliateAuthController::class, 'index'])->name('affiliate-register');
        Route::get('/perfect-scrollbar', [PerfectScrollbar::class, 'index'])->name('PerfectScrollbar');
        Route::get('/text-devider', [TextDivider::class, 'index'])->name('text-devider');
        Route::get('/basic-input', [BasicInput::class, 'index'])->name('basic-input');
        Route::get('/input-groups', [InputGroups::class, 'index'])->name('input-groups');
        Route::get('/horizontal-form', [HorizontalForm::class, 'index'])->name('horizontal-form');
        Route::get('/vertical-form', [VerticalForm::class, 'index'])->name('vertical-form');
        Route::get('/boxicons', [Boxicons::class, 'index'])->name('boxicons');
        Route::get('/blank', [Blank::class, 'index'])->name('blank');
        Route::get('/container', [Container::class, 'container'])->name('container');
        Route::get('/fluid', [Fluid::class, 'fluid'])->name('fluid');
        Route::get('/without-menu', [WithoutMenu::class, 'withoutMenu'])->name('without-menu');
        Route::get('/without-navbar', [WithoutNavbar::class, 'withoutNavbar'])->name('without-navbar');
        Route::get('/account-settings-account', [AccountSettingsAccount::class, 'index'])->name('account-settings-account');
        Route::get('/account-settings-connections', [AccountSettingsConnections::class, 'index'])->name('account-settings-connections');
        Route::get('/account-settings-notifications', [AccountSettingsNotifications::class, 'index'])->name('account-settings-notifications');
        Route::get('/misc-error', [MiscError::class, 'index'])->name('misc-error');
        Route::get('/misc-under-maintenance', [MiscUnderMaintenance::class, 'index'])->name('misc-under-maintenance');
        Route::get('/basic', [Basic::class, 'index'])->name('basic');
        Route::get('/accordion', [Accordion::class, 'index'])->name('accordion');
        Route::get('/alerts', [Alerts::class, 'index'])->name('alerts');
        Route::get('/badges', [Badges::class, 'index'])->name('badges');
        Route::get('/buttons', [Buttons::class, 'index'])->name('buttons');
        Route::get('/carousel', [Carousel::class, 'index'])->name('carousel');
        Route::get('/collapse', [Collapse::class, 'index'])->name('collapse');
        Route::get('/dropdowns', [Dropdowns::class, 'index'])->name('dropdowns');
        Route::get('/footer', [Footer::class, 'index'])->name('footer');
        Route::get('/list-groups', [ListGroups::class, 'index'])->name('list-groups');
        Route::get('/modals', [Modals::class, 'index'])->name('modals');
        Route::get('/navbar', [Navbar::class, 'index'])->name('navbar');
        Route::get('/offcanvas', [Offcanvas::class, 'index'])->name('offcanvas');
        Route::get('/pagination-breadcrumbs', [PaginationBreadcrumbs::class, 'index'])->name('pagination-breadcrumbs');
        Route::get('/spinners', [Spinners::class, 'index'])->name('spinners');
        Route::get('/progress', [Progress::class, 'index'])->name('progress');
        Route::get('/tabs-pills', [TabsPills::class, 'index'])->name('tabs-pills');
        Route::get('/toasts', [Toasts::class, 'index'])->name('toasts');
        Route::get('/tooltips-popovers', [TooltipsPopovers::class, 'index'])->name('tooltips-popovers');
        Route::get('/typography', [Typography::class, 'index'])->name('typography');
        Route::get('/table', [Basic::class, 'index'])->name('table-index');
      });
      //** theme route *//
