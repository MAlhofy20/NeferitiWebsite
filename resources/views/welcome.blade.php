<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400..800&family=El+Messiri:wght@400..700&family=Rakkas&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Local Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .custum {
            background: linear-gradient(to bottom left, #1091ff -73%, white 52%, transparent);
        }
    </style>
</head>

<body dir="rtl">
    <div class="main bg-[#101828] pb-[50px] relative overflow-hidden">
        <div class = "flex justify-center">
            <div id="menu" class="active  fixed z-[999999] ">
                <div class="logo ml-[10px]">
                    <img class="rounded-[8px] w-[40px] h-[50px]" src="{{ asset('frontend/images/logo trans.png') }}"
                        alt="">
                </div>
                <div class="content-menu lg:px-[30px]">
                    <ul class="px-[10px] lg:gap-[50px] gap-[24px] flex justify-center items-center cursor-pointer">
                        <li class="font-bold text-[16px] leading-[18.2px] text-[#FFFFFF]"><a
                                href="#ideas"><span>افكار</span></a></li>
                        <li class="font-bold text-[13px] leading-[18.2px] text-[#FFFFFF]"><a
                                href="#products "><span>المحتوي</span></a></li>
                        <li class="font-bold text-[13px] leading-[18.2px] text-[#FFFFFF]"><a
                                href="#blogs"><span>الأخبار</span></a></li>
                        <li class="font-bold text-[13px] leading-[18.2px] text-[#FFFFFF]"><a
                                href="#Here"><span>خدمات</span></a></li>
                        <li class="font-bold text-[13px] leading-[18.2px] text-[#FFFFFF]"><a
                                href="#clients"><span>الاراء</span></a></li>
                    </ul>
                </div>
                <div
                    class="start bg-[#FFFFFF] rounded-[12px] w-[116px] max-h-[36px] h-[36px] flex justify-center items-center">
                    <a class="text-[13px] font-[500]" href="#">ابدأ من هنا</a>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <img class="rounded-[8px] w-full  absolute  right-0 top-0 opacity-10"
                src="{{ asset('frontend/images/dadad.jpg') }}" alt="">
        </div>
        <div class="hero flex justify-center items-center flex-col pt-[140px] md:pt-[150px] text-center pb-[50px] px-[20px] "
            data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700">
            <p class="wave  text-[25px] font-bold  text-[#ffe9b7]"><span>نفرتيتي</span> <span>لحلول</span>
                <span>الاعمال</span>
            </p>
            <div class="title">
                <p class="text-[30px] md:text-[80px] text-white font-bold">نصمم مواقع تُحدث فرقًا</p>
                <p class="py-[20px] px-[50px] leading-[30px] md:leading-[37px] font-bold md:text-[20px] text-gray-500 ">
                    من خلال نظرة تجمع بين خبرة المبرمجين ودقة المصممين وبُعد نظر خبراء التسويق،
                    <br>
                    نصنع لك نافذة تنقل أعمالك إلى بُعد آخر
                </p>
            </div>
            <div>
                <a class="cursor-box not-allowed bg-gold-button rounded-[15px] text-white px-[50px] py-[10px] shadow-[0_0_3px_0_#0d0b0b]"
                    href="#contact-section">تواصل معنا</a>
            </div>
        </div>
        <div class="icons md:pt-[50px] overflow-hidden w-[80%] mx-auto pb-[54px]">
            <div class="title flex justify-center items-center text-white pb-[30px]" data-aos="fade-up"
                data-aos-easing="ease-in-sine" data-aos-duration="1000">
                موثوق به من قبل أكثر من 50 شركة
            </div>
            <div class="main-icon flex flex-col gap-[10px] ">
                <div class="iconimg right ">
                    <div class="flex justify-center items-center gap-[65px]">
                        @foreach (\App\Models\Partner::all() as $partner)
                            <img class="animate-scrollLeft rounded-[8px] w-[150px] h-[50px]"
                                src="{{ asset($partner->image) }}" alt="">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="color w-full absolute h-[14%] bg-white md:-bottom-[47px]"></div>
    </div>
    <div class="the-pahe bg-white relative md:pt-[50px] overflow-hidden">
        <div class="about-us relative">
            <div class="main flex-col justify-center items-center text-center px-[20px]">
                <div class="title font-bold text-[30px] md:text-[50px] text-[#0B2131] pb-[10px]">
                    عن اختيار فريق Nefirtiti
                </div>
                <p class="font-400 text-[#394B58] text-[20px] rounded-[30.24px] px-[35px]">
                    في
                    <span class="font-bold text-gold-gradient">
                        Nefertiti Solutions
                    </span>
                    نمتلك فريقًا متخصصًا يسخّر أحدث التقنيات لإدارة مشاريعك بكفاءة عالية
                    <br>
                    مع خطط مدروسة للتخطيط والتنفيذ، وضمان عمليات تسليم واختبار دقيقة تعكس احترافية عملنا
                </p>
            </div>
            <div class="cards relative z-[1] flex justify-center gap-[60px] items-center px-[20px] md:px-[50px] py-[80px] flex-wrap"
                data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                <div class="bb flex flex-col justify-center items-center gap-[30px]">
                    <div class="flex justify-center items-center bg-white  rounded-[32px] ">
                        <img class="w-full h-[110px]" src="{{ asset('frontend/images/section/3.png') }}" alt="">
                    </div>
                    <p class="font-[500] text-[30px] px-[20px] text-center text-[#0B2131]">تخطيط مُحكم</p>
                </div>
                <div class="aa flex flex-col justify-center items-center gap-[30px]">
                    <div class="flex justify-center items-center bg-white  rounded-[32px] ">
                        <img class="w-full h-[110px]" src="{{ asset('frontend/images/section/1.png') }}" alt="">
                    </div>
                    <p class="font-[500] text-[30px] px-[20px] text-center text-[#0B2131]">تقنية متطورة</p>
                </div>

                <div class="dd flex flex-col justify-center items-center gap-[30px]">
                    <div class="flex justify-center items-center bg-white rounded-[32px] ">
                        <img class="w-full h-[110px]" src="{{ asset('frontend/images/section/2.png') }}"
                            alt="">
                    </div>
                    <p class="font-[500] text-[30px] px-[20px] text-center text-[#0B2131]">تصميم عصري</p>
                </div>
                <div class="cc flex flex-col justify-center items-center gap-[30px]">
                    <div class="flex justify-center items-center bg-white rounded-[32px] ">
                        <img class="w-full h-[110px]" src="{{ asset('frontend/images/section/4.png') }}"
                            alt="">
                    </div>
                    <p class="font-[500] text-[30px] px-[20px] text-center text-[#0B2131]">تسليم واختبار </p>
                </div>
            </div>
            <div class="mb-12 mx-auto w-64">
                <a class="cursor-box font-bold cards-gold-gradient not-allowed text-nowrap rounded-[15px] text-white px-[50px] py-[10px] "
                    href="#contact-section">اطلب استشارتك المجانية</a>
            </div>

        </div>
        <div id="ideas" class="home relative overflow-hidden bg-[#101828] text-white p-[20px] md:p-[50px]">
            <div class="main text-center flex gap-[10px] flex-col justify-center items-center"
                data-aos="fade-down-right" data-aos-easing="linear" data-aos-easing="ease-in-sine"
                data-aos-duration="500">
                <div class="title font-bold md:font-500 text-[35px] md:text-[56px]">
                    رؤيتنا تتجاوز تقديم حلول تقليدية
                </div>
                <p class="font-[400] text-[20px] leading-[30px] text-center ">
                    في Nefertiti Solutions نسعى لنكون شريكك الحقيقي في عالم الإنترنت.
                    <br>
                    نلتزم ببناء علاقة مستدامة معك في رحلتك نحو النجاح الرقمي؛ من خلال تقديم
                    <span class="font-bold text-gold-gradient">
                        حلول برمجية مصممة خصيصًا
                    </span>
                    لتلبية احتياجات منظومتك
                    <hr>
                    مع دعم مستمر لضمان التطوير والصيانة
                    <br>

                </p>
            </div>
            <div class="flex gap-[20px] justify-center z-[2] relative items-center p-[20px] flex-wrap">
                <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] md:h-[180px] h-[140px]"
                    data-aos="zoom-in" data-aos-easing="linear" data-aos-easing="ease-in-sine"
                    data-aos-duration="500">
                    <i class="mb-2 fa-solid text-6xl fa-laptop-code"></i>

                    <div class="font-[400] text-center md:text-2xl">
                        تصميم وبرمجة مواقع احترافية
                    </div>
                </div>
                <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] md:h-[180px] h-[140px]"
                    data-aos="zoom-in" data-aos-easing="linear" data-aos-easing="ease-in-sine"
                    data-aos-duration="500">
                    <i class="mb-2 fa-solid text-6xl fa-mobile-screen-button"></i>
                    <div class="font-[400] text-center md:text-2xl">
                        تطوير تطبيقات عصرية ومميزة
                    </div>
                </div>
                <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] md:h-[180px] h-[140px]"
                    data-aos="zoom-in" data-aos-easing="linear" data-aos-easing="ease-in-sine"
                    data-aos-duration="500">
                    <i class="mb-2 fa-brands text-6xl  fa-google"></i>
                    <div class="font-[400] text-center md:text-2xl">
                        تحسين ظهورك عبر محركات البحث
                    </div>
                </div>
                <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] md:h-[180px] h-[140px]"
                    data-aos="zoom-in" data-aos-easing="linear" data-aos-easing="ease-in-sine"
                    data-aos-duration="500">
                    <i class="mb-2 fa-solid text-6xl fa-database"></i>
                    <div class="font-[400] text-center md:text-2xl">
                        إدارة استضافاتك باحترافية وأمان
                    </div>
                </div>
            </div>
            <div class="mb-12 mt-[35px] mx-auto w-64">
                <a class="cursor-box not-allowed bg-gold-button text-nowrap rounded-[15px] text-white px-[50px] py-[10px] shadow-[0_0_3px_0_#0d0b0b]"
                    href="#contact-section">ابدأ معنا الان</a>
            </div>

            <div class="colr absolute top-0 z-[1] opacity-[0.1] w-[300px] right-0"> <img
                    src="{{ asset('frontend/images/logo trans.png') }}" alt=""></div>
        </div>
        <div id="products" class="products p-[20px] md:p-[50px] bg-black text-white">
            <div class="main flex flex-col justify-center items-center text-center" data-aos="zoom-in-up"
                data-aos-easing="ease-in-sine" data-aos-duration="500">
                <div class="title font-bold md:font-500 text-[35px] md:text-[56px] pb-[20px]"> منتجات فريق Nefertiti
                </div>
                <p class="font-[400] text-[20px] leading-[30px] px[4px]">
                    في Nefertiti Solutions قمنا بصناعة وتقديم
                    <br>
                    منتجات متطورة صنعت خصيصًا لترك بصمة فريدة في احتياجات السوق .
                    سعيًا منا في دعم توجهات المسئولين
                    <hr>
                    نحو بيئات عمل رقمية متطورة
                    <span class="pt-[10px] font-bold text-gold-gradient">
                        توافق رؤية 2030
                    </span>


                    <br>
                </p>
            </div>
            <div class="accordon py-[50px] gap-[25px] flex flex-col">
                @foreach (\App\Models\Product::all() as $product)
                    <div class="accor flex justify-center items-center ">
                        <div class="min flex justify-center gap-[15px] cursor-pointer">
                            <div class="image" data-aos="zoom-in" data-aos-easing="linear"
                                data-aos-easing="ease-in-sine" data-aos-duration="500">
                                <img class="rounded-[18px] w-[140px] h-[40px] transition-all duration-300 ease-in-out"
                                    src="{{ asset($product->image) }}" alt="">
                            </div>
                            <div class="flex flex-col gap-[5px]">
                                <div class="tot flex justify-between items-center">
                                    <div class="tit font-bold md:font-[600] text-[20px] md:text-[28px]"
                                        data-aos="fade-up" data-aos-easing="linear" data-aos-easing="ease-in-sine"
                                        data-aos-duration="500">
                                        {{ $product->name }}</div>
                                    <div class="icon" data-aos="fade-right" data-aos-easing="linear"
                                        data-aos-easing="ease-in-sine" data-aos-duration="500">
                                        <i class="duration-300 ease-in-out rotate-180 fa-solid fa-arrow-down"></i>
                                    </div>
                                </div>
                                <p
                                    class="pl-[40px] md:pl-[100px] transition-all duration-300 ease-in-out overflow-hidden opacity-0 max-h-0">
                                    {!! breackableText($product->description) !!}
                                </p>
                                <div
                                    class="flex all overflow-hidden transition-all duration-300 ease-in-out opacity-0 max-h-0 gap-[10px] pr-[10px]">
                                    <a class="cursor-box w-[160px] h-[30px] transition-all duration-300 ease-in-out not-allowed bg-gold-button rounded-[15px] text-white  shadow-[0_0_3px_0_#0d0b0b]"
                                        href="#">اعرف اكتر</a>
                                    <a class="cursor-box w-[160px] h-[30px] transition-all duration-300 ease-in-out not-allowed bg-gold-button rounded-[15px] text-white  shadow-[0_0_3px_0_#0d0b0b]"
                                        href="#">تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="accor cursor-pointer flex justify-center items-center ">
                    <div class="min flex justify-center gap-[15px] cursor-pointer">
                        <div class="image" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
                            <img class="rounded-[18px] w-[140px] h-[40px] transition-all duration-300 ease-in-out"
                                src="{{ asset('frontend/images/accordion2.png') }}" alt="">
                        </div>
                        <div class="flex flex-col gap-[5px]">
                            <div class="tot flex justify-between items-center">
                                <div class="tit font-bold md:font-[600] text-[20px] md:text-[28px]" data-aos="fade-up"
                                    data-aos-easing="linear" data-aos-duration="600">
                                    منظومة الايصال الالكتروني بالتوافق مع توجيهات مصلحة الضرائب</div>
                                <div class="icon" data-aos="fade-right" data-aos-easing="linear"
                                    data-aos-duration="600">
                                    <i class="duration-300 ease-in-out rotate-180 fa-solid fa-arrow-down"></i>
                                </div>
                            </div>
                            <p
                                class="pl-[40px] md:pl-[100px] transition-all duration-300 ease-in-out overflow-hidden opacity-0 max-h-0">
                                في Gravity Team، نحن في مهمة
                                <br>
                                لتحقيق التوازن بين العرض والطلب في أسواق العملات المشفرة في جميع أنحاء العالم.
                                <br>
                                نحن صانع سوق للعملات المشفرة
                                <br>
                                أسسنا من قبل التجار والمطورين والمبتكرين الذين يؤمنون بشدة ويدعمون مستقبل اللامركزية
                                والأصول الرقمية.
                            </p>
                            <div class="flex all overflow-hidden opacity-0 max-h-0 gap-[10px] pr-[10px]">
                                <a class="cursor-box w-[160px] h-[30px] not-allowed bg-gold-button rounded-[15px] text-white  shadow-[0_0_3px_0_#0d0b0b]"
                                    href="#">اعرف اكتر</a>
                                <a class="cursor-box w-[160px] h-[30px] not-allowed bg-gold-button rounded-[15px] text-white  shadow-[0_0_3px_0_#0d0b0b]"
                                    href="#">تواصل معنا</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accor flex justify-center items-center ">
                    <div class="min flex justify-center gap-[15px] cursor-pointer">
                        <div class="image" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="700">
                            <img class="rounded-[18px] w-[140px] h-[40px] transition-all duration-300 ease-in-out"
                                src="{{ asset('frontend/images/accordion3.png') }}" alt="">
                        </div>
                        <div class="flex flex-col gap-[5px]">
                            <div class="tot flex justify-between items-center">
                                <div class="tit font-bold md:font-[600] text-[20px] md:text-[28px]" data-aos="fade-up"
                                    data-aos-easing="linear" data-aos-duration="700">
                                    متجر الكتروني صنعت تفاصيله برؤية المصممين وخبراء التسويق
                                </div>
                                <div class="icon" data-aos="fade-right" data-aos-easing="linear"
                                    data-aos-duration="700">
                                    <i class="duration-300 ease-in-out rotate-180 fa-solid fa-arrow-down"></i>
                                </div>
                            </div>
                            <p
                                class="pl-[40px] md:pl-[100px] transition-all duration-300 ease-in-out overflow-hidden opacity-0 max-h-0">
                                في Gravity Team، نحن في مهمة
                                <br>
                                لتحقيق التوازن بين العرض والطلب في أسواق العملات المشفرة في جميع أنحاء العالم.
                                <br>
                                نحن صانع سوق للعملات المشفرة
                                <br>
                                أسسنا من قبل التجار والمطورين والمبتكرين الذين يؤمنون بشدة ويدعمون مستقبل اللامركزية
                                والأصول الرقمية.
                            </p>
                            <div class="flex all overflow-hidden opacity-0 max-h-0 gap-[10px] pr-[10px]">
                                <a class="cursor-box w-[160px] h-[30px] not-allowed bg-gold-button rounded-[15px] text-white  shadow-[0_0_3px_0_#0d0b0b]"
                                    href="#">اعرف اكتر</a>
                                <a class="cursor-box w-[160px] h-[30px] not-allowed bg-gold-button rounded-[15px] text-white  shadow-[0_0_3px_0_#0d0b0b]"
                                    href="#">تواصل معنا</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="accor flex justify-center items-center ">
                    <div class="min flex justify-center gap-[15px] cursor-pointer">
                        <div class="image" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="800">
                            <img class="rounded-[18px] w-[140px] h-[40px] transition-all duration-300 ease-in-out"
                                src="{{ asset('frontend/images/accordion4.png') }}" alt="">
                        </div>
                        <div class="flex flex-col gap-[5px]">
                            <div class="tot flex justify-between items-center">
                                <div class="tit font-bold md:font-[600] text-[20px] md:text-[28px]" data-aos="fade-up"
                                    data-aos-easing="linear" data-aos-duration="800">نظام Scanly لعرض خدماتك ومنتجاتك
                                    بال QR Code
                                </div>
                                <div class="icon" data-aos="fade-right" data-aos-easing="linear"
                                    data-aos-duration="800">
                                    <i class="duration-300 ease-in-out rotate-180 fa-solid fa-arrow-down"></i>
                                </div>
                            </div>
                            <p
                                class="pl-[40px] md:pl-[100px] transition-all duration-300 ease-in-out overflow-hidden opacity-0 max-h-0">
                                في Gravity Team، نحن في مهمة
                                <br>
                                لتحقيق التوازن بين العرض والطلب في أسواق العملات المشفرة في جميع أنحاء العالم.
                                <br>
                                نحن صانع سوق للعملات المشفرة
                                <br>
                                أسسنا من قبل التجار والمطورين والمبتكرين الذين يؤمنون بشدة ويدعمون مستقبل اللامركزية
                                والأصول الرقمية.
                            </p>
                            <div class="flex all overflow-hidden opacity-0 max-h-0 gap-[10px] pr-[10px]">
                                <a class="cursor-box w-[160px] h-[30px] not-allowed bg-gold-button rounded-[15px] text-white  shadow-[0_0_3px_0_#0d0b0b]"
                                    href="#">اعرف اكتر</a>
                                <a class="cursor-box w-[160px] h-[30px] not-allowed bg-gold-button rounded-[15px] text-white  shadow-[0_0_3px_0_#0d0b0b]"
                                    href="#">تواصل معنا</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="accor  flex justify-center items-center ">
                    <div class="min flex justify-center gap-[15px] cursor-pointer">
                        <div class="image" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="900">
                            <img class="rounded-[18px] w-[140px] h-[40px] transition-all duration-300 ease-in-out"
                                src="{{ asset('frontend/images/accordion5.png') }}" alt="">
                        </div>
                        <div class="flex flex-col gap-[5px]">
                            <div class="tot flex justify-between items-center">
                                <div class="tit font-bold md:font-[600] text-[20px] md:text-[28px]" data-aos="fade-up"
                                    data-aos-easing="linear" data-aos-duration="900">لوحة تحكم تناسب ادارة اعمالك
                                </div>
                                <div class="icon" data-aos="fade-right" data-aos-easing="linear"
                                    data-aos-duration="800">
                                    <i class="duration-300 ease-in-out rotate-180 fa-solid fa-arrow-down"></i>
                                </div>
                            </div>
                            <p
                                class="pl-[40px] md:pl-[100px] transition-all duration-300 ease-in-out overflow-hidden opacity-0 max-h-0">
                                في Gravity Team، نحن في مهمة
                                <br>
                                لتحقيق التوازن بين العرض والطلب في أسواق العملات المشفرة في جميع أنحاء العالم.
                                <br>
                                نحن صانع سوق للعملات المشفرة
                                <br>
                                أسسنا من قبل التجار والمطورين والمبتكرين الذين يؤمنون بشدة ويدعمون مستقبل اللامركزية
                                والأصول الرقمية.
                            </p>
                            <div class="flex all overflow-hidden opacity-0 max-h-0 gap-[10px] pr-[10px]">
                                <a class="cursor-box w-[160px] h-[30px] not-allowed bg-gold-button rounded-[15px] text-white  shadow-[0_0_3px_0_#0d0b0b]"
                                    href="#">اعرف اكتر</a>
                                <a class="cursor-box w-[160px] h-[30px] not-allowed bg-gold-button rounded-[15px] text-white  shadow-[0_0_3px_0_#0d0b0b]"
                                    href="#">تواصل معنا</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="previous-work bg-[#101828] text-white p-[20px] md:p-[50px]">
            <div class="title flex items-center pb-[20px] pr-[20px] md:pr-[32px] gap-[10px]" data-aos="zoom-in"
                data-aos-easing="linear" data-aos-duration="1000" data-aos-easing="ease-in-sine"
                data-aos-duration="500">
                <div class="font-[600] text-[22px]">اعمال سابقه</div>
                <i class="fa-solid fa-turn-down"></i>
            </div>
            <div class="previous flex gap-[32px] flex-wrap justify-center">
                <div class="cee  rounded-[24px] border-2 border-[#282828]" data-aos="zoom-in"
                    data-aos-easing="linear" data-aos-duration="500">
                    <img class=" h-[300px] rounded-tl-[24px] rounded-tr-[24px]"
                        src="{{ asset('frontend/images/work1.png') }}" alt="">
                    <div class="title font-[600] text-[28px] px-[15px] py-[10px]">العلامة التجارية جالاكسيا</div>
                </div>
                <div class="cee  rounded-[24px] border-2 border-[#282828]" data-aos="zoom-in"
                    data-aos-easing="linear" data-aos-duration="500">
                    <img class=" h-[300px] rounded-tl-[24px] rounded-tr-[24px]"
                        src="{{ asset('frontend/images/work2.png') }}" alt="">
                    <div class="title font-[600] text-[28px] px-[15px] py-[10px]">جون ماير نيويورك</div>
                </div>
                <div class="cee rounded-[24px] border-2 border-[#282828]" data-aos="zoom-in" data-aos-easing="linear"
                    data-aos-duration="500">
                    <img class=" h-[300px] rounded-tl-[24px] rounded-tr-[24px]"
                        src="{{ asset('frontend/images/work3.png') }}" alt="">
                    <div class="title font-[600] text-[28px] px-[15px] py-[10px]">أنماط نايزاك</div>
                </div>
                <div class="cee rounded-[24px] border-2 border-[#282828]" data-aos="zoom-in" data-aos-easing="linear"
                    data-aos-duration="500">
                    <img class=" h-[300px] rounded-tl-[24px] rounded-tr-[24px]"
                        src="{{ asset('frontend/images/work4.png') }}" alt="">
                    <div class="title font-[600] text-[28px] px-[15px] py-[10px]">رقائق كريف</div>
                </div>
                <div class="cee rounded-[24px] border-2 border-[#282828]" data-aos="zoom-in" data-aos-easing="linear"
                    data-aos-duration="500">
                    <img class=" h-[300px] rounded-tl-[24px] rounded-tr-[24px]"
                        src="{{ asset('frontend/images/work2.png') }}" alt="">
                    <div class="title font-[600] text-[28px] px-[15px] py-[10px]">جون ماير نيويورك</div>
                </div>
                <div class="cee rounded-[24px] border-2 border-[#282828]" data-aos="zoom-in" data-aos-easing="linear"
                    data-aos-duration="500">
                    <img class=" h-[300px] rounded-tl-[24px] rounded-tr-[24px]"
                        src="{{ asset('frontend/images/work3.png') }}" alt="">
                    <div class="title font-[600] text-[28px] px-[15px] py-[10px]">أنماط نايزاك</div>
                </div>
            </div>
            <div class="allVeow flex justify-center items-center pt-[50px]" data-aos="anim" data-aos-easing="linear"
                data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-duration="100">
                <div
                    class="link-3 gap-5 flex justify-center items-center  p-[10px_8px] w-[663px] rounded-2xl cursor-pointer bg-[#0000001c] border border-[rgba(255,255,255,0.3)] shadow-[0_4px_6px_rgb(0,0,0)]">
                    <a href="#">جميع الالعمال السابقه</a>
                    <i class="fa-solid fa-arrow-trend-down"></i>
                </div>
            </div>
        </div>
        {{-- <div class="previousTwo">
            <div class="box">
                <span><img src="{{ asset('frontend/images/box1.jpg') }}" alt=""></span>
                <span><img src="{{ asset('frontend/images/box1.jpg') }}" alt=""></span>
                <span><img src="{{ asset('frontend/images/box1.jpg') }}" alt=""></span>
                <span><img src="{{ asset('frontend/images/box1.jpg') }}" alt=""></span>
                <span><img src="{{ asset('frontend/images/box1.jpg') }}" alt=""></span>
                <span><img src="{{ asset('frontend/images/box1.jpg') }}" alt=""></span>
                <span><img src="{{ asset('frontend/images/box1.jpg') }}" alt=""></span>
                <span><img src="{{ asset('frontend/images/box1.jpg') }}" alt=""></span>
                <span><img src="{{ asset('frontend/images/box1.jpg') }}" alt=""></span>
                <span><img src="{{ asset('frontend/images/box1.jpg') }}" alt=""></span>
                <span><img src="{{ asset('frontend/images/box1.jpg') }}" alt=""></span>
                <span><img src="{{ asset('frontend/images/box1.jpg') }}" alt=""></span>
                <span><img src="{{ asset('frontend/images/box1.jpg') }}" alt=""></span>
                <span><img src="{{ asset('frontend/images/box1.jpg') }}" alt=""></span>
            </div>
            <div class="bton">
                <div class="btn prev"></div>
                <div class="btn next"></div>
            </div>
            </div> --}}
        <div id="blogs" class="blogs p-[20px] md:p-[100px]">
            <div
                class="title gap-[10px] flex justify-center flex-wrap md:flex-nowrap md:justify-between pb-[50px] items-center">
                <div class="ti text-[35px] md:text-[42px] md:font-[800] font-bold" data-aos="anim"
                    data-aos-easing="linear" data-aos-duration="500">أحدث منشورات مدونتنا</div>
                <div class="link1 bg-[#171313] p-[15px] rounded-[10px] text-white" data-aos="anim"
                    data-aos-easing="linear" data-aos-duration="500" data-aos-easing="ease-in-sine">
                    <a class="font-[600] " href="#">شاهد جميع منشورات المدونة</a>
                </div>
            </div>
            <div class="tow-colmn flex gap-[20px] justify-start flex-wrap">
                <div class="one flex gap-[20px] flex-wrap">
                    <a href="#" class="alla block">
                        <div class="gap-[45px]" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                            <div class="image pb-[15px]">
                                <img src="{{ asset('frontend/images/blog1.png') }}" alt="">
                            </div>
                            <div class="date text-[#64607D]">
                                <span>08-11-2021</span>
                                <span>Category</span>
                            </div>
                            <div class="tit max-w-[375px] font-[800] text-[20px] leading-[36px] py-[5px]">
                                <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                            </div>
                            <p class="text-[#64607D] max-w-[375px] text-[400] leading-[30px]">
                                رحبت السيدة بالبركة التي التقت بها، ورحبت بالسيد الذي قام بتربيتها. ستة أيام من الفضول
                                لضمان السرير ضروري.
                            </p>
                        </div>
                    </a>
                    <a href="#" class="alla">
                        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                            <div class="image pb-[15px]">
                                <img src="{{ asset('frontend/images/blog3.png') }}" alt="">
                            </div>
                            <div class="date text-[#64607D]">
                                <span>08-11-2021</span>
                                <span>Category</span>
                            </div>
                            <div class="tit max-w-[375px] font-[800] text-[20px] leading-[36px] py-[5px]">
                                <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                            </div>
                            <p class="text-[#64607D] max-w-[375px] text-[400] leading-[30px]">
                                رحبت السيدة بالبركة التي التقت بها، ورحبت بالسيد الذي قام بتربيتها. ستة أيام من الفضول
                                لضمان السرير ضروري.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="two max-w-[375px]">
                    <a href="#" class="alla">
                        <div class="flex items-center gap-[19px] pb-[15px] border-b border-[#DEE1E6]"
                            data-aos="fade-right" data-aos-easing="linear" data-aos-easing="ease-in-sine"
                            data-aos-duration="500">
                            <div class="image min-w-[110px]">
                                <img src="{{ asset('frontend/images/blog2.png') }}" alt="">
                            </div>
                            <div>
                                <div class="date text-[14px] text-[#64607D]">
                                    <span>08-11-2021</span>
                                    <span>Category</span>
                                </div>
                                <div class="tit max-w-[375px] font-[800] leading-[25px] py-[5px]">
                                    <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="alla">
                        <div class="flex items-center gap-[19px] py-[15px]  border-b border-[#DEE1E6]"
                            data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                            <div class="image min-w-[110px]">
                                <img src="{{ asset('frontend/images/blog4.png') }}" alt="">
                            </div>
                            <div>
                                <div class="date text-[14px] text-[#64607D]">
                                    <span>08-11-2021</span>
                                    <span>Category</span>
                                </div>
                                <div class="tit max-w-[375px] font-[800]  leading-[25px] py-[5px]">
                                    <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="alla">
                        <div class="flex items-center gap-[19px] py-[15px]  border-b border-[#DEE1E6]"
                            data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
                            <div class="image min-w-[110px]">
                                <img src="{{ asset('frontend/images/blog5.png') }}" alt="">
                            </div>
                            <div>
                                <div class="date text-[14px] text-[#64607D]">
                                    <span>08-11-2021</span>
                                    <span>Category</span>
                                </div>
                                <div class="tit max-w-[375px] font-[800] leading-[25px] py-[5px]">
                                    <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="alla">
                        <div class="flex items-center gap-[19px] py-[15px] border-b border-[#DEE1E6]"
                            data-aos="fade-right" data-aos-easing="linear" data-aos-duration="800">
                            <div class="image min-w-[110px]">
                                <img src="{{ asset('frontend/images/blog6.png') }}" alt="">
                            </div>
                            <div>
                                <div class="date text-[#64607D] text-[14px]">
                                    <span>08-11-2021</span>
                                    <span>Category</span>
                                </div>
                                <div class="tit max-w-[375px] font-[800] leading-[25px] py-[5px]">
                                    <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="link15 bg-[#171313] p-[15px] rounded-[10px] text-white ">
                <a class="font-[600] " href="#">شاهد جميع منشورات المدونة</a>
            </div>
        </div>
        <div id="Here" class="Here-is-how bg-[#E3F8F8] p-[20px] md:px-[100px] md:py-[50px]">
            <div class="all ">
                <div class="title text-[33px] md:text-[60px] flex justify-center items-center text-center flex-col"
                    data-aos="anim" data-aos-easing="linear" data-aos-duration="500">
                    <div class="md:font-[700] font-bold  text-[#2E2F35]">
                        إطلاق سريع. نتائج سريعة.
                    </div>
                    <span class="font-[400] text-[#2E2F35]">إليك الطريقة.</span>
                </div>
                <div class="here">
                    <div class="min py-[15px]" data-aos="fade-right" data-aos-easing="linear"
                        data-aos-duration="500">
                        <div
                            class="tit text-[30px] md:text-[36px] font-[700] text-[#2E2F3566] pr-[50px] cursor-pointer">
                            شريحة</div>
                        <p class="text-[20px] leading-[34px] font-[500] pr-[50px] max-w-[400px]">
                            إعلانات لمرة واحدة أو تدفقات يتم تشغيلها تلقائيًا. يتلقى العملاء بطاقاتهم الشخصية في غضون
                            أسبوع.
                        </p>
                    </div>
                    <div class="min py-[15px]" data-aos="fade-right" data-aos-easing="linear"
                        data-aos-duration="600">
                        <div
                            class="tit text-[30px] md:text-[36px] text-[#2E2F3566] font-[700] pr-[50px] cursor-pointer">
                            تصميم</div>
                        <p class="text-[20px] leading-[34px] font-[500] pr-[50px] max-w-[400px]">
                            إعلانات لمرة واحدة أو تدفقات يتم تشغيلها تلقائيًا. يتلقى العملاء بطاقاتهم الشخصية في غضون
                            أسبوع.
                        </p>
                    </div>
                    <div class="min activeTwo py-[15px]" data-aos="fade-right" data-aos-easing="linear"
                        data-aos-duration="700">
                        <div
                            class="tit text-[30px] md:text-[36px] font-[700] text-[#2E2F3566] pr-[50px] cursor-pointer">
                            ارسال</div>
                        <p class="text-[20px] leading-[34px] font-[500] pr-[50px] max-w-[400px]">
                            إعلانات لمرة واحدة أو تدفقات يتم تشغيلها تلقائيًا. يتلقى العملاء بطاقاتهم الشخصية في غضون
                            أسبوع.
                        </p>
                    </div>
                    <div class="min py-[15px]" data-aos="fade-right" data-aos-easing="linear"
                        data-aos-duration="800">
                        <div
                            class="tit text-[30px] md:text-[36px] font-[700] text-[#2E2F3566] pr-[50px] cursor-pointer">
                            يتحول</div>
                        <p class="text-[20px] leading-[34px] font-[500] pr-[50px] max-w-[400px] ">
                            إعلانات لمرة واحدة أو تدفقات يتم تشغيلها تلقائيًا. يتلقى العملاء بطاقاتهم الشخصية في غضون
                            أسبوع.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="clients" class="clients bg-[#101828] text-white">
            <div class="title flex flex-col justify-center gap-[20px] items-center pt-[50px]">
                <div class="tit font-bold max-w-[600px] text-[22px] md:text-[33px] px-[20px] text-center"
                    data-aos="anim" data-aos-easing="linear" data-aos-duration="500">
                    يحب الكثير من الأشخاص الآخرين
                    بناء وشحن
                    المواقع باستخدام Framer.
                </div>
                <div class="link-2 flex gap-[10px] items-center" data-aos="anim" data-aos-easing="linear"
                    data-aos-duration="500">
                    <a class="text-[22px] font-bold font-sans" href="#">انضم إلى المجتمع</a>
                    <i class="fa-solid fa-turn-down"></i>
                </div>
            </div>
            <div class="Opinions overflow-hidden transition-translate duration-500 pr-[20px] ">
                <div
                    class="all md:py-[65px] py-[40px] bg-[#101828] flex gap-[24px] transition-translate duration-500 ">
                    <div
                        class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[22px] max-h-[350px] max-w-[1500px] flex  w-[390px] rounded-[20px] justify-center gap-[30px]">
                        <i class="text-[#10ACA2] text-[33px] fa-solid fa-quote-right"></i>
                        <div>
                            <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                                خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable
                                في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                            </div>
                            <div class="prerson flex items-center gap-[20px] pt-[30px]">
                                <span class="h-[3px] w-[60px] bg-white block"></span>
                                <span class="font-[700]">K Oiwake</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[22px] max-h-[350px] max-w-[1500px] flex  w-[390px] rounded-[20px] justify-center gap-[30px]">
                        <i class="text-[#10ACA2] text-[33px] fa-solid fa-quote-right"></i>
                        <div>
                            <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                                خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable
                                في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                            </div>
                            <div class="prerson flex items-center gap-[20px] pt-[30px]">
                                <span class="h-[3px] w-[60px] bg-white block"></span>
                                <span class="font-[700]">K Oiwake</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[22px] max-h-[350px] max-w-[1500px] flex  w-[390px] rounded-[20px] justify-center gap-[30px]">
                        <i class="text-[#10ACA2] text-[33px] fa-solid fa-quote-right"></i>
                        <div>
                            <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                                خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable
                                في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                            </div>
                            <div class="prerson flex items-center gap-[20px] pt-[30px]">
                                <span class="h-[3px] w-[60px] bg-white block"></span>
                                <span class="font-[700]">K Oiwake</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[22px] max-h-[350px] max-w-[1500px] flex  w-[390px] rounded-[20px] justify-center gap-[30px]">
                        <i class="text-[#10ACA2] text-[33px] fa-solid fa-quote-right"></i>
                        <div>
                            <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                                خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable
                                في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                            </div>
                            <div class="prerson flex items-center gap-[20px] pt-[30px]">
                                <span class="h-[3px] w-[60px] bg-white block"></span>
                                <span class="font-[700]">K Oiwake</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[22px] max-h-[350px] max-w-[1500px] flex  w-[390px] rounded-[20px] justify-center gap-[30px]">
                        <i class="text-[#10ACA2] text-[33px] fa-solid fa-quote-right"></i>
                        <div>
                            <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                                خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable
                                في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                            </div>
                            <div class="prerson flex items-center gap-[20px] pt-[30px]">
                                <span class="h-[3px] w-[60px] bg-white block"></span>
                                <span class="font-[700]">K Oiwake</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[22px] max-h-[350px] max-w-[1500px] flex  w-[390px] rounded-[20px] justify-center gap-[30px]">
                        <i class="text-[#10ACA2] text-[33px] fa-solid fa-quote-right"></i>
                        <div>
                            <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                                خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable
                                في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                            </div>
                            <div class="prerson flex items-center gap-[20px] pt-[30px]">
                                <span class="h-[3px] w-[60px] bg-white block"></span>
                                <span class="font-[700]">K Oiwake</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[22px] max-h-[350px] max-w-[1500px] flex  w-[390px] rounded-[20px] justify-center gap-[30px]">
                        <i class="text-[#10ACA2] text-[33px] fa-solid fa-quote-right"></i>
                        <div>
                            <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                                خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable
                                في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                            </div>
                            <div class="prerson flex items-center gap-[20px] pt-[30px]">
                                <span class="h-[3px] w-[60px] bg-white block"></span>
                                <span class="font-[700]">K Oiwake</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[22px] max-h-[350px] max-w-[1500px] flex  w-[390px] rounded-[20px] justify-center gap-[30px]">
                        <i class="text-[#10ACA2] text-[33px] fa-solid fa-quote-right"></i>
                        <div>
                            <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                                خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable
                                في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                            </div>
                            <div class="prerson flex items-center gap-[20px] pt-[30px]">
                                <span class="h-[3px] w-[60px] bg-white block"></span>
                                <span class="font-[700]">K Oiwake</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[22px] max-h-[350px] max-w-[1500px] flex  w-[390px] rounded-[20px] justify-center gap-[30px]">
                        <i class="text-[#10ACA2] text-[33px] fa-solid fa-quote-right"></i>
                        <div>
                            <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                                خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable
                                في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                            </div>
                            <div class="prerson flex items-center gap-[20px] pt-[30px]">
                                <span class="h-[3px] w-[60px] bg-white block"></span>
                                <span class="font-[700]">K Oiwake</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[22px] max-h-[350px] max-w-[1500px] flex  w-[390px] rounded-[20px] justify-center gap-[30px]">
                        <i class="text-[#10ACA2] text-[33px] fa-solid fa-quote-right"></i>
                        <div>
                            <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                                خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable
                                في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                            </div>
                            <div class="prerson flex items-center gap-[20px] pt-[30px]">
                                <span class="h-[3px] w-[60px] bg-white block"></span>
                                <span class="font-[700]">K Oiwake</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[22px] max-h-[350px] max-w-[1500px] flex  w-[390px] rounded-[20px] justify-center gap-[30px]">
                        <i class="text-[#10ACA2] text-[33px] fa-solid fa-quote-right"></i>
                        <div>
                            <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                                خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable
                                في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                            </div>
                            <div class="prerson flex items-center gap-[20px] pt-[30px]">
                                <span class="h-[3px] w-[60px] bg-white block"></span>
                                <span class="font-[700]">K Oiwake</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="section-info p-[50px] bg-[#000000] flex flex-wrap justify-center">
            <div
                class="all flex flex-wrap justify-center flex-row-reverse rounded-[20px] w-[1000px] overflow-hidden shadow-[0px_0px_9px_0px_#377287]">
                <!-- Contact Form -->
                <div id="contact-section" class="contact-form bg-[#2a2a2a] flex-[1_1_300px] p-8"
                    data-aos="zoom-in-left" data-aos-easing="linear" data-aos-duration="500">
                    <h3 class="mb-5 text-[30px] font-bold text-[cyan]">تواصل معنا</h3>
                    <div class="form">
                        <div class="form-group mb-[20px]">
                            <input type="text"
                                class="form-control placeholder-[#bbb] w-full p-3 shadow-[3px_4px_1px_0px_#1e1e1e] border border-[#444] rounded-md bg-[#333] text-white text-sm"
                                name="name" id="name" placeholder="Name">
                        </div>
                        <div class="form-group mb-[20px]">
                            <input type="email"
                                class="form-control placeholder-[#bbb] w-full p-3 shadow-[3px_4px_1px_0px_#1e1e1e] border border-[#444] rounded-md bg-[#333] text-white text-sm"
                                name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group mb-[20px]">
                            <input type="text"
                                class="form-control placeholder-[#bbb] w-full p-3 shadow-[3px_4px_1px_0px_#1e1e1e] border border-[#444] rounded-md bg-[#333] text-white text-sm"
                                name="subject" id="subject" placeholder="Subject">
                        </div>
                        <div class="form-group mb-[20px]">
                            <textarea name="message"
                                class="form-control w-full p-3 shadow-[3px_4px_1px_0px_#1e1e1e]  border border-[#444] rounded-sm bg-[#333] text-white text-sm placeholder-[#bbb]"
                                id="message" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group mb-[20px]  cursor-pointer  ">
                            <input type="submit" value="Send Message"
                                class="btn link5 w-full rounded-2xl p-3 border border-[rgba(255,255,255,0.3)] shadow-[0_4px_6px_rgb(0,0,0)]  bg-[#186766] text-white text-lg font-bold cursor-pointer  transition-colors-transform duration-300 ">
                        </div>
                    </div>
                </div>
                <!-- Contact Information -->
                <div class="contact-info flex-[1_1_300px] bg-[#1c1e25] p-8 text-[#dcdcdc]" data-aos="zoom-in-right"
                    data-aos-easing="linear" data-aos-duration="600">
                    <h3 class="mb-[20px] text-[30px] font-bold text-[cyan]">معلومات للتواصل معنا</h3>
                    <p class="mb-[20px] leading-9 text-[20px] text-[#666666]">نحن منفتحون على أي اقتراح <br> أو مجرد
                        الدردشة</p>

                    <div class="info-item flex gap-[20px] justify-start items-center mb-[25px] ">
                        <div
                            class=" w-[60px] h-[60px] rounded-full bg-[rgba(255,255,255,0.02)] flex justify-center items-center">
                            <i class="te1 text-[#fff] fa-solid fa-phone-volume"></i>
                        </div>
                        <p><span class="text-[#fff] pl-[10px] font-bold text-[20px] "> الهاتف : </span><a
                                class="text-[#666666] font-bold text-[20px]  no-underline link8"
                                href="tel:+1235235598">+ 1235 2355 98</a></p>
                    </div>
                    <div class="info-item  flex gap-[20px] justify-start items-center mb-[15px]">
                        <div
                            class="w-[60px] h-[60px] rounded-full bg-[rgba(255,255,255,0.02)] flex justify-center items-center">
                            <i class="te1 text-[#fff] fa-solid fa-envelope"></i>
                        </div>
                        <p><span class="text-[#fff] pl-[10px] font-bold text-[20px] "> الاميل : </span><a
                                class="font-bold text-[20px]  text-[#666666] no-underline link8"
                                href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                    </div>
                    <div class="info-item flex gap-[20px] justify-start items-center mb-[15px]">
                        <div
                            class="w-[60px] h-[60px] rounded-full bg-[rgba(255,255,255,0.02)] flex justify-center items-center">
                            <i class="te1 text-[#fff] fa-solid fa-earth-americas"></i>
                        </div>
                        <p><span class="text-[#fff] pl-[10px] font-bold text-[20px] "> الموقع الإلكتروني : </span><a
                                class=" font-bold text-[20px]  text-[#666666] no-underline link8"
                                href="#">yoursite.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="footer relative px-[20px] lg:text-start text-center lg:px-[100px] pt-[50px] lg:pt-[80px]  bg-[rgb(16_24_40/var(--tw-bg-opacity))] text-white">
            <div class="absolute left-[7%] top-0 z-1 opacity-50 3xl:left-[19%]"><svg width="1237" height="405"
                    viewBox="0 0 1237 405" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1833_4737)">
                        <ellipse cx="618.5" cy="-213" rx="268.5" ry="268" fill="#48DCFF">
                        </ellipse>
                    </g>
                    <defs>
                        <filter id="filter0_f_1833_4737" x="0" y="-831" width="1237" height="1236"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                            </feBlend>
                            <feGaussianBlur stdDeviation="175" result="effect1_foregroundBlur_1833_4737">
                            </feGaussianBlur>
                        </filter>
                    </defs>
                </svg></div>
            <div
                class="information pb-[10px] lg:pb-[50px] flex justify-center lg:justify-between flex-wrap  gap-[40px]">
                <div class="main-fot leading-[26px]">
                    <div class="logo ml-[10px]">
                        <img class="rounded-[8px] w-[65px] h-[88px]"
                            src="{{ asset('frontend/images/logo trans.png') }}" alt="">
                    </div>
                    <p class="max-w-[414px] text-[#FFFFFF] leading-[26px] pt-[24px] t">
                        خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable في
                        الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك. </p>
                </div>
                <div class="overview max-w-[275px] leading-[26px]">
                    <div class="font-[700] text-[24px]">اختصارات</div>
                    <div class="list">
                        <ul class="flex flex-wrap gap-y-4 pt-[24px] leading-[16px]">
                            <li class="w-1/2 hover:font-bold"><a class="link9" href="#">افكار</a></li>
                            <li class="w-1/2 hover:font-bold"><a class="link9" href="#">المحتوي</a></li>
                            <li class="w-1/2 hover:font-bold"><a class="link9" href="#">الاخبار</a></li>
                            <li class="w-1/2 hover:font-bold"><a class="link9" href="#">الخدمات</a></li>
                            <li class="w-1/2 hover:font-bold"><a class="link9" href="#">الاراء</a></li>
                            <li class="w-1/2 hover:font-bold"><a class="link9" href="#">التواصل معنا</a></li>
                            <li class="w-1/2 hover:font-bold"><a class="link9" href="#">اعمالنا السابقه</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="contact-Us leading-[24px]">
                    <div class="font-[700] text-[24px]">للتواصل</div>
                    <div class="forYou pt-[24px]">
                        <p><span class="text-[#fff] pl-[10px]"> الهاتف : </span><a class=" no-underline link9"
                                href="tel:+1235235598">+ 1235 2355 98</a></p>
                        <p class="py-[10px]"><span class="text-[#fff] pl-[10px]"> الاميل : </span><a
                                class=" no-underline link9" href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                        <p><span class="text-[#fff] pl-[10px]"> الموقع الإلكتروني : </span><a
                                class=" no-underline link9" href="#">yoursite.com</a></p>
                    </div>
                    <div class="iconeweb py-[18px]  text-[40px] flex gap-[16px] lg:justify-start justify-center ">
                        <div class="start2">
                            <a class=" facebook" href="https://www.facebook.com/">
                                <i class=" fa-brands fa-facebook"></i>
                            </a>
                        </div>
                        <div class="start2">
                            <a class=" x " href="https://x.com/?lang=en">
                                <i class=" fa-brands fa-twitter"></i>
                            </a>
                        </div>
                        <div class="start2">
                            <a class=" instagram" href="https://www.instagram.com/?hl=en">
                                <i class="  fa-brands fa-instagram"></i>
                            </a>
                        </div>
                        <div class="start2">
                            <a class=" whatsapp" href="https://web.whatsapp.com/">
                                <i class="  fa-brands fa-whatsapp"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div
                class="location border-t border-white py-[20px] gap-[10px] flex-wrap flex justify-between items-center">
                <div class="locati flex gap-[8px] items-baseline">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="country">Riyadh - KSA</div>
                </div>
                <div class="locati-sp flex flex-wrap gap-[10px]">
                    <span>Terms and conditions</span>
                    <span>Privacy police </span>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
