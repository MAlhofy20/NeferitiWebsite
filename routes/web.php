<?php

use App\Mail\NotificationMail;
use App\Http\Middleware\TrackVisits;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\MessageController;
use App\Http\Controllers\Dashboard\PartnerController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\AuthDashController;
use App\Http\Controllers\Dashboard\HomeDashController;
use App\Http\Controllers\Dashboard\ProjectsController;
use App\Http\Controllers\Dashboard\AdminDashController;
use App\Http\Controllers\Dashboard\TestimonialController;
use App\Http\Controllers\Dashboard\EmailSettingController;
use App\Http\Controllers\Dashboard\ProductDetailController;

Route::get('dashboard/login', [AuthDashController::class, 'login_page'])->name('login');
Route::post('dashboard/login', [AuthDashController::class, 'login_store'])->name('login.check');


Route::name('dashboard.')->prefix('dashboard')->middleware(['auth:admin'])->group(function () {
    Route::get('/', [HomeDashController::class, 'index'])->name('home');

    Route::resource('admin', AdminDashController::class)->names('admin');

    Route::resource('products', ProductController::class)->names('products');
    Route::post('products/up/{product}', [ProductController::class, 'up'])->name('products.up');
    Route::post('products/down/{product}', [ProductController::class, 'down'])->name('products.down');

    Route::controller(ProductDetailController::class)->group(function () {
        Route::get('product_details/{product}', 'index')->name('product_details.index');
        Route::get('product_details/create/{product}', 'create')->name('product_details.create');
        Route::post('product_details/store/{product}', 'store')->name('product_details.store');
        Route::get('product_details/edit/{product_detail}', 'edit')->name('product_details.edit');
        Route::put('product_details/update/{product_detail}', 'update')->name('product_details.update');
        Route::delete('product_details/delete/{product_detail}', 'destroy')->name('product_details.destroy');
        Route::post('product_details/up/{product_detail}', 'up')->name('product_details.up');
        Route::post('product_details/down/{product_detail}', 'down')->name('product_details.down');
    });

    Route::resource('partners', PartnerController::class)->names('partners');

    Route::resource('projects', ProjectsController::class)->names('projects');
    Route::post('projects/up/{project}', [ProjectsController::class, 'up'])->name('projects.up');
    Route::post('projects/down/{project}', [ProjectsController::class, 'down'])->name('projects.down');

    Route::resource('testimonials', TestimonialController::class)->names('testimonials');

    Route::get('email_settings', [EmailSettingController::class, 'index'])->name('email_settings');
    Route::post('email_settings', [EmailSettingController::class, 'update'])->name('email_settings.update');

    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('blogs/store', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('blogs/edit/{blog_id}', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('blogs/update/{blog_id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('blogs/delete/{blog_id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    Route::post('blogs/up/{blog_id}', [BlogController::class, 'up'])->name('blogs.up');
    Route::post('blogs/down/{blog_id}', [BlogController::class, 'down'])->name('blogs.down');

    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [SettingController::class, 'update'])->name('settings.update');

    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    Route::post('messages', [MessageController::class, 'delete'])->name('messages.delete');

    // Route::get('external_pages', [ExternalPageController::class, 'index'])->name('external_pages.index');
    // Route::get('external_pages/create', [ExternalPageController::class, 'create'])->name('external_pages.create');
    // Route::post('external_pages/store', [ExternalPageController::class, 'store'])->name('external_pages.store');
    // Route::get('external_pages/edit/{external_page_id}', [ExternalPageController::class, 'edit'])->name('external_pages.edit');
    // Route::put('external_pages/update/{external_page_id}', [ExternalPageController::class, 'update'])->name('external_pages.update');
    // Route::delete('external_pages/delete/{external_page_id}', [ExternalPageController::class, 'delete'])->name('external_pages.delete');
    // Route::get('external_pages/{external_page_id}', [ExternalPageController::class, 'show'])->name('external_pages.show');


    Route::post('logout', function () {
        auth()->logout();
        return redirect()->route('login')->with('success', 'تم تسجيل الخروج بنجاح');
    })->name('logout');
});


Route::name('front.')->middleware(TrackVisits::class)->group(function () {
    Route::get('/', [FrontController::class, 'home'])->name('home');
    Route::get('product/{slug}', [FrontController::class, 'product'])->name('product');
    Route::get('projects', [FrontController::class, 'projects'])->name('projects');
    Route::get('blog', [FrontController::class, 'blog'])->name('blog');
    Route::get('blog/{slug}', [FrontController::class, 'blog_show'])->name('blog.show');

    Route::post('message', [FrontController::class, 'store_message'])->name('message.store');
});

Route::post('action', [FrontController::class, 'action'])->name('front.action');

Route::get('language/{locale}', function($locale){
    if (isset($locale) && in_array($locale, ['ar','en'])) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
    }

    return redirect()->back();
})->name('lang');

Route::get('/test-emaill', function () {
    try {
        $testMessage = "This is a test notification email from Laravel!";
        
        Mail::to('melhofy20@gmail.com')->send(new NotificationMail($testMessage));
        
        return 'Email sent successfully!';
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
