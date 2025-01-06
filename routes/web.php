<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LangMiddleware;
use Illuminate\Auth\Notifications\VerifyEmail;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\MessageController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\AuthDashController;
use App\Http\Controllers\Dashboard\HomeDashController;
use App\Http\Controllers\Dashboard\EmailSettingController;
use App\Http\Controllers\Dashboard\ExternalPageController;

Route::get('/', function () {
    return view('welcome');
});

    Route::get('dashboard/login', [AuthDashController::class, 'login_page'])->name('login');
    Route::post('dashboard/login', [AuthDashController::class, 'login_store'])->name('login.check');

    // Route::get('/', [HomeDashController::class, 'index'])->name('dashboard.home');

// Route::name('dashboard.')->prefix('dashboard')->middleware([LangMiddleware::class, 'auth'])->group(function () {
//     Route::get('/', [HomeDashController::class, 'index'])->name('home');
   
//     Route::get('email_settings', [EmailSettingController::class, 'index'])->name('email_settings');
//     Route::post('email_settings', [EmailSettingController::class, 'update'])->name('email_settings.update');
    
//     Route::get('profile', [ProfileController::class, 'index'])->name('profile');
//     Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');

//     Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
//     Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
//     Route::post('blogs/store', [BlogController::class, 'store'])->name('blogs.store');
//     Route::get('blogs/edit/{blog_id}', [BlogController::class, 'edit'])->name('blogs.edit');
//     Route::put('blogs/update/{blog_id}', [BlogController::class, 'update'])->name('blogs.update');
//     Route::delete('blogs/delete/{blog_id}', [BlogController::class, 'delete'])->name('blogs.delete');
    
    
//     Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
//     Route::post('settings', [SettingController::class, 'update'])->name('settings.update');
    
//     Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
//     Route::post('messages', [MessageController::class, 'delete'])->name('messages.delete');

//     Route::get('external_pages', [ExternalPageController::class, 'index'])->name('external_pages.index');
//     Route::get('external_pages/create', [ExternalPageController::class, 'create'])->name('external_pages.create');
//     Route::post('external_pages/store', [ExternalPageController::class, 'store'])->name('external_pages.store');
//     Route::get('external_pages/edit/{external_page_id}', [ExternalPageController::class, 'edit'])->name('external_pages.edit');
//     Route::put('external_pages/update/{external_page_id}', [ExternalPageController::class, 'update'])->name('external_pages.update');
//     Route::delete('external_pages/delete/{external_page_id}', [ExternalPageController::class, 'delete'])->name('external_pages.delete');
//     Route::get('external_pages/{external_page_id}', [ExternalPageController::class, 'show'])->name('external_pages.show');

    
//     Route::post('logout', function () {
//         auth()->logout();
//         return redirect()->route('login')->with('success', 'تم تسجيل الخروج بنجاح');
//     })->name('logout');
// });


Route::get('language/{locale}', function($locale){
    if (isset($locale) && in_array($locale, ['ar','en'])) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
    }

    return redirect()->back();
})->name('lang');


// Route::get('/test-email', function () {
//     // قم بإنشاء قيمة وهمية لـ OTP
//     $otp = rand(100000, 999999); // يمكن تعديل طول الـ OTP حسب الحاجة

//     // إرسال البريد الإلكتروني
//     Mail::to("malhofynl@gmail.com")->send(new VerifyEmail(12356));

//     return 'Email sent with OTP: ' . $otp;
// });


Route::get('/sitemap.xml', function () {
    // إضافة الـheader المناسب لملف XML
    $content = '<?xml version="1.0" encoding="UTF-8"?>';
    $content .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    // الصفحة الرئيسية
    $content .= '<url>';
    $content .= '<loc>' . url('/') . '</loc>';
    $content .= '<changefreq>daily</changefreq>';
    $content .= '<priority>1.0</priority>';
    $content .= '</url>';

    // صفحة من نحن
    $content .= '<url>';
    $content .= '<loc>' . url('/about_us') . '</loc>';
    $content .= '<changefreq>monthly</changefreq>';
    $content .= '<priority>0.8</priority>';
    $content .= '</url>';
    // صفحة التواصل
    $content .= '<url>';
    $content .= '<loc>' . url('/contact') . '</loc>';
    $content .= '<changefreq>monthly</changefreq>';
    $content .= '<priority>0.8</priority>';
    $content .= '</url>';

    // صفحة الـBlogs العامة
    $content .= '<url>';
    $content .= '<loc>' . url('/blogs') . '</loc>';
    $content .= '<changefreq>weekly</changefreq>';
    $content .= '<priority>0.9</priority>';
    $content .= '</url>';

    // إضافة المقالات بشكل ديناميكي
    // $blogs = Blog::all(); // هنا بنجيب كل المقالات من قاعدة البيانات
    // foreach ($blogs as $blog) {
    //     $content .= '<url>';

    //     // توليد الـ slug بناءً على اللغة أو اللغة الافتراضية
    //     $title = $blog['title_' . lang()] ?? $blog['title_en'];
    //     $slug = Str::slug($title, '-'); // استخدام الـ "-" كفاصل

    //     // استخدام الـblog_id والـslug في الرابط الصحيح
    //     $content .= '<loc>' . url("/blog/show/{$blog->id}/{$slug}") . '</loc>';
    //     $content .= '<lastmod>' . $blog->updated_at->tz('UTC')->toAtomString() . '</lastmod>';
    //     $content .= '<changefreq>monthly</changefreq>';
    //     $content .= '<priority>0.7</priority>';
    //     $content .= '</url>';
    // }

    $content .= '</urlset>';

    // إرسال الـXML كاستجابة
    return response($content, 200)
        ->header('Content-Type', 'application/xml');
});

