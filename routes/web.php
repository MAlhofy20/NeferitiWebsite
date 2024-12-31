<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Notifications\VerifyEmail;
use App\Http\Controllers\Dashboard\AuthDashController;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware([LangMiddleware::class])->group(function () {
//     Route::get('dashboard/register', [AuthDashController::class, 'register_page'])->name('register');
//     Route::post('dashboard/register', [AuthDashController::class, 'register_store'])->name('register.store');
//     Route::get('dashboard/register/verify_email', [AuthDashController::class, 'verify_email_page'])->name('register.verify_email_page');
//     Route::get('dashboard/register/edit_mail', [AuthDashController::class, 'edit_mail_page'])->name('register.edit_mail_page');
//     Route::post('dashboard/register/edit_mail', [AuthDashController::class, 'edit_mail'])->name('register.edit_mail');
//     Route::post('dashboard/register/send_otp', [AuthDashController::class, 'send_otp'])->name('register.send_otp');
//     Route::get('dashboard/register/check_otp_page', [AuthDashController::class, 'check_otp_page'])->name('register.check_otp_page');
//     Route::post('dashboard/register/check_otp', [AuthDashController::class, 'check_otp'])->name('register.check_otp');
//     Route::get('dashboard/login', [AuthDashController::class, 'login_page'])->name('login');
//     Route::post('dashboard/login', [AuthDashController::class, 'login_store'])->name('login.check');

// });

// Route::name('dashboard.')->prefix('dashboard')->middleware([LangMiddleware::class, 'auth'])->group(function () {
//     Route::get('/', [HomeDashController::class, 'index'])->name('home');
//     Route::get('/profile', ProfileAdminLive::class)->name('profile');
//     Route::get('/facilities_categories', [FacilityCategoryController::class, 'index'])->name('facilities_categories');
//     Route::post('/facilities_categories', [FacilityCategoryController::class, 'update'])->name('facilities_categories.update');
//     Route::get('/facilities', [FacilityController::class, 'index'])->name('facilities');
//     Route::post('/facilities', [FacilityController::class, 'update'])->name('facilities.update');

//     Route::get('/users', [UserController::class, 'index'])->name('users');
//     Route::post('users/delete', [UserController::class, 'delete'])->name('users.delete');
//     Route::post('users/block', [UserController::class, 'block'])->name('users.block');
//     Route::post('users/unblock', [UserController::class, 'unblock'])->name('users.unblock');
//     Route::post('users/update_expiry_date', [UserController::class, 'update_expiry_date'])->name('users.update_expiry_date');

//     Route::get('email_settings', [EmailSettingController::class, 'index'])->name('email_settings');
//     Route::post('email_settings', [EmailSettingController::class, 'update'])->name('email_settings.update');
    
//     Route::get('profile', [ProfileController::class, 'index'])->name('profile');
//     Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');

//     Route::get('properties', [PropertyController::class, 'index'])->name('properties.index');
//     Route::get('properties/create', [PropertyController::class, 'create'])->name('properties.create');
//     Route::post('properties/store', [PropertyController::class, 'store'])->name('properties.store');
//     Route::get('properties/edit/{property_id}', [PropertyController::class, 'edit'])->name('properties.edit');
//     Route::PUT('properties/update/{property_id}', [PropertyController::class, 'update'])->name('properties.update');
//     Route::post('properties/delete_image/{image_id}', [PropertyController::class, 'delete_image'])->name('properties.delete_image');
//     Route::post('properties/delete', [PropertyController::class, 'delete'])->name('properties.delete');
    
//     Route::get('properties/{property_id}/rooms', [RoomController::class, 'index'])->name('rooms.index');
//     Route::get('properties/{property_id}/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
//     Route::post('properties/rooms/store', [RoomController::class, 'store'])->name('rooms.store');
//     Route::get('properties/{property_id}/rooms/edit/{room_id}', [RoomController::class, 'edit'])->name('rooms.edit');
//     Route::put('properties/{property_id}/rooms/update/{room_id}', [RoomController::class, 'update'])->name('rooms.update');
//     Route::post('properties/rooms/delete', [RoomController::class, 'delete'])->name('rooms.delete');


//     Route::get('channels/{property_id}', [ChannelsController::class, 'index'])->name('channels.index');

//     Route::get('booking', [BookingController::class, 'index'])->name('bookings.index');
//     Route::get('booking/{booking_id}', [BookingController::class, 'show'])->name('bookings.show');
//     Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
//     Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
//     Route::post('blogs/store', [BlogController::class, 'store'])->name('blogs.store');
//     Route::get('blogs/edit/{blog_id}', [BlogController::class, 'edit'])->name('blogs.edit');
//     Route::put('blogs/update/{blog_id}', [BlogController::class, 'update'])->name('blogs.update');
//     Route::delete('blogs/delete/{blog_id}', [BlogController::class, 'delete'])->name('blogs.delete');
    
//     Route::get('faqs', [FaqController::class, 'index'])->name('faqs.index');
//     Route::get('faqs/create', [FaqController::class, 'create'])->name('faqs.create');
//     Route::post('faqs/store', [FaqController::class, 'store'])->name('faqs.store');
//     Route::get('faqs/edit/{faq_id}', [FaqController::class, 'edit'])->name('faqs.edit');
//     Route::put('faqs/update/{faq_id}', [FaqController::class, 'update'])->name('faqs.update');
//     Route::delete('faqs/delete/{faq_id}', [FaqController::class, 'delete'])->name('faqs.delete');

//     Route::get('slider_images', [SliderController::class, 'index'])->name('slider_images.index');
//     Route::post('slider_images', [SliderController::class, 'store'])->name('slider_images.store');
//     Route::delete('slider_images', [SliderController::class, 'delete'])->name('slider_images.delete');
    
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

