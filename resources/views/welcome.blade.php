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
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400..800&family=El+Messiri:wght@400..700&family=Rakkas&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
                integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
                crossorigin="anonymous" referrerpolicy="no-referrer">
        <!-- Local Stylesheets -->
        <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .custum{
                background: linear-gradient(to bottom left, #1091ff -73%, white 52%, transparent);
            }
        </style>
        {{-- bg-[#041527] --}}
    </head>
    <body dir="rtl" class="bg">
    <div class="main bg-[#041527] pb-[50px] relative">
        <div class = "flex justify-center">
            <div id="menu" class="active">
                <div class="logo ml-[10px]">
                    <img class="rounded-[8px] w-[44px] h-[36px]" src="{{asset('frontend/images/logo.png')}}" alt="">
                </div>
                <div class="content-menu">
                    <ul class="px-[10px] gap-[50px] flex justify-center items-center">
                        <li class="font-[300] text-[13px] leading-[18.2px] text-[#FFFFFF]">الرئيسيه</li>
                        <li class="font-[300] text-[13px] leading-[18.2px] text-[#FFFFFF]">الاسعار</li>
                        <li class="font-[300] text-[13px] leading-[18.2px] text-[#FFFFFF]">المدونه</li>
                        <li class="font-[300] text-[13px] leading-[18.2px] text-[#FFFFFF]">المحتوي</li>
                        <li class="font-[300] text-[13px] leading-[18.2px] text-[#FFFFFF]">الاراء</li>
                    </ul>
                </div>
                <div class="start bg-[#FFFFFF] rounded-[12px] w-[116px] max-h-[36px] h-[36px] flex justify-center items-center">
                    <a class="text-[13px] font-[500]" href="#">ابدأ من هنا</a>
                </div>
        </div>
        </div>
        <div class="hero flex justify-center items-center flex-col pt-[150px] text-center pb-[50px]">
            <div class="title">
                <p class="text-[80px] text-white font-bold">نصمم مواقع تُحدث فرقًا</p>
                <p class="py-[20px] leading-[37px] font-bold text-[20px] text-gray-500">
                    من خلال نظرة تجمع بين خبرة المبرمجين ودقة المصممين وبُعد نظر خبراء التسويق،
                    <br>
                    نصنع لك نافذة تنقل أعمالك إلى بُعد آخر
                </p>
            </div>
            <div>
                <a class="bg-gray-800 rounded-[15px] text-white px-[50px] py-[10px] shadow-[0_0_3px_0_#0d0b0b]" href="#">تواصل معنا</a>
            </div>
        </div>
        <div class="icons pt-[50px] overflow-hidden w-[80%] mx-auto pb-[50px]">
            <div class="title flex justify-center items-center text-white pb-[30px]">
                موثوق به من قبل أكثر من 25000 شركة
            </div>
            <div class="main-icon flex flex-col gap-[10px]">
                <div class="iconimg right ">
                    <div class="flex justify-center items-center gap-[65px]">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logob.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoc.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logod.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoe.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logob.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoc.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logod.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoe.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoe.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logob.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoc.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logod.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoe.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoe.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollLeft rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                    </div>
                </div>
                <div class="iconimg left">
                    <div class="flex logos-track justify-center items-center gap-[65px]">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logob.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoc.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logod.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoe.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logob.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoc.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logod.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logob.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logob.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoe.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logob.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoc.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logod.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoe.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logob.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoc.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logod.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logob.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoa.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logob.png')}}" alt="">
                        <img class="animate-scrollRight rounded-[8px] w-[100px] h-[50px]" src="{{asset('frontend/images/logoe.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="color w-full absolute h-[14%] bg-white -bottom-[47px]"></div>
    </div>
    <div class="the-pahe bg-white relative pt-[50px] h-[600px]">
        <div class="about-us relative">
            <div class="colr absolute ">
                <img class="w-[62%]" src="{{asset('frontend/images/middle1.png')}}" alt="">
            </div>
            <div class="main flex-col justify-center items-center text-center">
                <div class="title font-500 text-[50px] text-[#0B2131]">
                    نحن نقدم هذه الخدمات
                </div>
                <p class="font-400 text-[#394B58] text-[20px] rounded-[30.24px]">
                    نحن نقدم أربع فئات من الخدمات
                    <br>
                    وستحصل على خدمات عالية الجودة من هنا
                </p>
            </div>
            <div class="cards relative z-[1] flex justify-center gap-[60px] items-center px-[50px] py-[80px] flex-wrap">
                <div class="flex flex-col justify-center items-center gap-[30px]">
                    <div class="flex justify-center items-center bg-white shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] w-[160px] h-[160px] rounded-[32px] border-[2px] border-[#0B2131]">
                        <img src="{{asset('frontend/images/Group1.png')}}" alt="">
                    </div>
                    <p class="font-[500] text-[30px] text-center text-[#0B2131]">تصميم التخطيط</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-[30px]">
                    <div class="flex justify-center items-center bg-white shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] w-[160px] h-[160px] rounded-[32px] border-[2px] border-[#0B2131]">
                        <img src="{{asset('frontend/images/Group2.png')}}" alt="">
                    </div>
                    <p class="font-[500] text-[30px] text-center text-[#0B2131]">التصميم الجرافيكي</p>
                </div>
                <div class="flex flex-col justify-center items-center gap-[30px]">
                    <div class="flex justify-center items-center bg-white shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] w-[160px] h-[160px] rounded-[32px] border-[2px] border-[#0B2131]">
                        <img src="{{asset('frontend/images/Group3.png')}}" alt="">
                    </div>
                    <p class="font-[500] text-[30px] text-center text-[#0B2131]">تصميم الهاتف </p>
                </div>
                <div class="flex flex-col justify-center items-center gap-[30px]">
                    <div class="flex justify-center items-center bg-white shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] w-[160px] h-[160px] rounded-[32px] border-[2px] border-[#0B2131]">
                        <img src="{{asset('frontend/images/Group4.png')}}" alt="">
                    </div>
                    <p class="font-[500] text-[30px] text-center text-[#0B2131]">تصميم الويب</p>
                </div>
            </div>
        </div>
        {{-- #0b2131 --}}
        <div class="home relative overflow-hidden bg-[#0b2131] text-white p-[50px]">
            <div class="main text-center flex gap-[10px] flex-col justify-center items-center">
                <div class="title font-500 text-[56px]">
                    نبذة عن فريق جرافيتي
                </div>
                <p class="font-[400] text-[20px] leading-[30px] text-center ">
                    في Gravity Team، نحن في مهمة
                    <br>
                    لتحقيق التوازن بين العرض والطلب في أسواق العملات المشفرة في جميع أنحاء العالم.
                    <br>
                    نحن صانع سوق للعملات المشفرة
                    <br>
                    أسسنا من قبل التجار والمطورين والمبتكرين الذين يؤمنون بشدة ويدعمون مستقبل اللامركزية والأصول الرقمية.
                </p>
            </div>
            <div class="flex gap-[20px] justify-center z-[2] relative items-center p-[80px] flex-wrap">
                    <div class="box1 flex flex-col text-center justify-center p-[15px] hover:bg-custom-gradient rounded-[20px] items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">~$100 billion</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            حجم التداول التراكمي
                            <br>
                            حتى تاريخه
                        </div>
                    </div>
                    <div class="box2 flex flex-col text-center justify-center p-[15px] hover:bg-custom-gradient rounded-[20px] items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">0.8%</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            من حجم تداول العملات
                            <br>
                            المشفرة العالمية
                        </div>
                    </div>
                    <div class="box3 flex flex-col text-center justify-center p-[15px] hover:bg-custom-gradient rounded-[20px] transition-all duration-500 items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">~30</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            زملاء فريق الجاذبية
                            <br>
                            (& ينمون)
                        </div>
                    </div>
                    <div class="box4 flex flex-col text-center justify-center p-[15px] hover:bg-custom-gradient rounded-[20px] items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">25+</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            البورصات العالمية والمحلية الرائدة
                            <br>
                            في مجال العملات المشفرة
                        </div>
                    </div>
                    <div class="box5 flex flex-col text-center justify-center p-[15px] hover:bg-custom-gradient rounded-[20px] items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">2017</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            البداية، مواطنو التشفير
                        </div>
                    </div>
                    <div class="box6 flex flex-col text-center justify-center p-[15px] hover:bg-custom-gradient rounded-[20px] items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">1,200+</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            أزواج الأصول المشفرة
                        </div>
                    </div>
                    <div class="box7 flex flex-col text-center justify-center p-[15px] hover:bg-custom-gradient rounded-[20px] items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">24/7</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            السيولة
                        </div>
                    </div>
                    <div class="box8 flex flex-col text-center justify-center p-[15px] hover:bg-custom-gradient rounded-[20px] items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">50+الف</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            الصفقات التي تمت حتى الآن
                        </div>
                    </div>
            </div>
            <div class="colr absolute bottom-[-59px] z-[1] opacity-20 left-[150px]"> <img src="{{asset('frontend/images/middle2.png')}}" alt=""></div>
        </div>
        {{-- <div class="services flex flex-col gap-[30px] justify-center items-center p-[50px]">
            <div class="sirvOne flex justify-center items-center ">
                <div class="main">
                    <div class="title">
                        ليست مجرد وكالة تصميم عادية
                    </div>
                    <p>
                        لقد سلم فريق Teamollo الموقع في الجدول الزمني الذي طلبوه.
                        <br>
                        وفي النهاية، وجد العميل زيادة بنسبة 50% في حركة المرور في غضون أيام منذ إطلاقه.
                        <br>
                        كما كان لديهم قدرة رائعة على استخدام التقنيات التي لم تستخدمها الشركة   ،
                        <br>
                        والتي أثبتت أيضًا سهولة استخدامها وأنها موثوقة.
                    </p>
                </div>
                <div><img src="{{asset('frontend/images/Mask Group 1.png')}}" alt=""></div>

            </div>
            <div class="sirvOne">
                <div><img src="{{asset('frontend/images/Mask Group 2.png')}}" alt=""></div>
                <div class="main">
                    <div class="title">
                        ليست مجرد وكالة تصميم عادية
                    </div>
                    <p>
                        لقد سلم فريق Teamollo الموقع في الجدول الزمني الذي طلبوه.
                        وفي النهاية، وجد العميل زيادة بنسبة 50% في حركة المرور في غضون أيام منذ إطلاقه.
                        كما كان لديهم قدرة رائعة على استخدام التقنيات التي لم تستخدمها الشركة   ،
                        والتي أثبتت أيضًا سهولة استخدامها وأنها موثوقة.
                    </p>
                </div>
            </div>
        </div> --}}
        <div class="products p-[50px] bg-[#cecbc5]">
            <div class="main flex flex-col justify-center items-center text-center">
                <div class="title font-500 text-[56px]"> نبذة عن فريق جرافيتي</div>
                <p class="font-[400] text-[20px] leading-[30px]">
                    في Gravity Team، نحن في مهمة
                    <br>
                    لتحقيق التوازن بين العرض والطلب في أسواق العملات المشفرة في جميع أنحاء العالم.
                    <br>
                    نحن صانع سوق للعملات المشفرة
                    <br>
                    أسسنا من قبل التجار والمطورين والمبتكرين الذين يؤمنون بشدة ويدعمون مستقبل اللامركزية والأصول الرقمية.

                </p>
            </div>
            <div class="accordon py-[50px] gap-[25px] flex flex-col">
                <div class="accor cursor-pointer flex justify-center items-center ">
                    <div class="min flex justify-center gap-[45px] items-center">
                        <div class="image transition-all duration-300 ease-in-out max-w-[100px]">
                            <img class="rounded-[18px] " src="{{asset('frontend/images/accordion1.png')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <div class="tit font-[600] text-[28px]">تصميم الويب والهواتف المحمولة</div>
                            <p class="pl-[100px] transition-all duration-300 ease-in-out overflow-hidden opacity-0 max-h-0">
                                في Gravity Team، نحن في مهمة
                                <br>
                                لتحقيق التوازن بين العرض والطلب في أسواق العملات المشفرة في جميع أنحاء العالم.
                                <br>
                                نحن صانع سوق للعملات المشفرة
                                <br>
                                أسسنا من قبل التجار والمطورين والمبتكرين الذين يؤمنون بشدة ويدعمون مستقبل اللامركزية والأصول الرقمية.
                            </p>
                        </div>
                    </div>
                    <div class="icon">
                        <i class="transition-transform duration-300 ease-in-out fa-solid fa-plus"></i>
                    </div>
                </div>
                <div class="accor cursor-pointer flex justify-center items-center ">
                    <div class="min flex justify-center gap-[45px] items-center">
                        <div class="image transition-all duration-300 ease-in-out max-w-[100px]">
                            <img class="rounded-[18px] " src="{{asset('frontend/images/accordion2.png')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <div class="tit font-[600] text-[28px]">تصميم الويب والهواتف المحمولة</div>
                            <p class="pl-[100px] transition-all duration-300 ease-in-out overflow-hidden opacity-0 max-h-0">
                                في Gravity Team، نحن في مهمة
                                <br>
                                لتحقيق التوازن بين العرض والطلب في أسواق العملات المشفرة في جميع أنحاء العالم.
                                <br>
                                نحن صانع سوق للعملات المشفرة
                                <br>
                                أسسنا من قبل التجار والمطورين والمبتكرين الذين يؤمنون بشدة ويدعمون مستقبل اللامركزية والأصول الرقمية.
                            </p>
                        </div>
                    </div>
                    <div>
                        <i class="transition-transform duration-300 ease-in-out fa-solid fa-plus"></i>
                    </div>
                </div>
                <div class="accor cursor-pointer flex justify-center items-center ">
                    <div class="min flex justify-center gap-[45px] items-center">
                        <div class="image transition-all duration-300 ease-in-out max-w-[100px]">
                            <img class="rounded-[18px] " src="{{asset('frontend/images/accordion3.png')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <div class="tit font-[600] text-[28px]">تصميم الويب والهواتف المحمولة</div>
                            <p class="pl-[100px] transition-all duration-300 ease-in-out overflow-hidden opacity-0 max-h-0">
                                في Gravity Team، نحن في مهمة
                                <br>
                                لتحقيق التوازن بين العرض والطلب في أسواق العملات المشفرة في جميع أنحاء العالم.
                                <br>
                                نحن صانع سوق للعملات المشفرة
                                <br>
                                أسسنا من قبل التجار والمطورين والمبتكرين الذين يؤمنون بشدة ويدعمون مستقبل اللامركزية والأصول الرقمية.
                            </p>
                        </div>
                    </div>
                    <div>
                        <i class=" transition-transform duration-300 ease-in-out fa-solid fa-plus"></i>
                    </div>
                </div>
                <div class="accor cursor-pointer flex justify-center items-center ">
                    <div class="min flex justify-center gap-[45px] items-center">
                        <div class="image transition-all duration-300 ease-in-out max-w-[100px]">
                            <img class="rounded-[18px] " src="{{asset('frontend/images/accordion4.png')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <div class="tit font-[600] text-[28px]">تصميم الويب والهواتف المحمولة</div>
                            <p class="pl-[100px] transition-all duration-300 ease-in-out overflow-hidden opacity-0 max-h-0">
                                في Gravity Team، نحن في مهمة
                                <br>
                                لتحقيق التوازن بين العرض والطلب في أسواق العملات المشفرة في جميع أنحاء العالم.
                                <br>
                                نحن صانع سوق للعملات المشفرة
                                <br>
                                أسسنا من قبل التجار والمطورين والمبتكرين الذين يؤمنون بشدة ويدعمون مستقبل اللامركزية والأصول الرقمية.
                            </p>
                        </div>
                    </div>
                    <div>
                        <i class="transition-transform duration-300 ease-in-out fa-solid fa-plus"></i>
                    </div>
                </div>
                <div class="accor cursor-pointer flex justify-center items-center ">
                    <div class="min flex justify-center gap-[45px] items-center">
                        <div class="image transition-all duration-300 ease-in-out max-w-[100px]">
                            <img class="rounded-[18px] " src="{{asset('frontend/images/accordion5.png')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <div class="tit font-[600] text-[28px]">تصميم الويب والهواتف المحمولة</div>
                            <p class="pl-[100px] transition-all duration-300 ease-in-out overflow-hidden opacity-0 max-h-0">
                                في Gravity Team، نحن في مهمة
                                <br>
                                لتحقيق التوازن بين العرض والطلب في أسواق العملات المشفرة في جميع أنحاء العالم.
                                <br>
                                نحن صانع سوق للعملات المشفرة
                                <br>
                                أسسنا من قبل التجار والمطورين والمبتكرين الذين يؤمنون بشدة ويدعمون مستقبل اللامركزية والأصول الرقمية.
                            </p>
                        </div>
                    </div>
                    <div>
                        <i class="transition-transform duration-300 ease-in-out fa-solid fa-plus"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="previous-work bg-[#0b2131] text-white p-[50px]">

                <div class="title flex items-center pb-[20px] px-[124px]">
                    <div class="font-[600] text-[22px]">اعمال سابقه</div>
                    <i class="fa-solid fa-turn-down"></i>
                </div>
                <div class="previous flex gap-[32px] flex-wrap justify-center">
                    <div class="cee  rounded-[24px] border-2 border-[#282828]">
                        <img class=" h-[300px] rounded-tl-[24px] rounded-tr-[24px]" src="{{ asset('frontend/images/work1.png') }}" alt="">
                        <div class="title font-[600] text-[28px] px-[15px] py-[10px]">العلامة التجارية جالاكسيا</div>
                    </div>
                    <div class="cee  rounded-[24px] border-2 border-[#282828]">
                        <img class=" h-[300px] rounded-tl-[24px] rounded-tr-[24px]" src="{{ asset('frontend/images/work2.png') }}" alt="">
                        <div class="title font-[600] text-[28px] px-[15px] py-[10px]">جون ماير نيويورك</div>
                    </div>
                    <div class="cee rounded-[24px] border-2 border-[#282828]">
                        <img class=" h-[300px] rounded-tl-[24px] rounded-tr-[24px]" src="{{ asset('frontend/images/work3.png') }}" alt="">
                        <div class="title font-[600] text-[28px] px-[15px] py-[10px]">أنماط نايزاك</div>
                    </div>
                    <div class="cee rounded-[24px] border-2 border-[#282828]">
                        <img class=" h-[300px] rounded-tl-[24px] rounded-tr-[24px]" src="{{ asset('frontend/images/work4.png') }}" alt="">
                        <div class="title font-[600] text-[28px] px-[15px] py-[10px]">رقائق كريف</div>
                    </div>
                    <div class="cee rounded-[24px] border-2 border-[#282828]">
                        <img class=" h-[300px] rounded-tl-[24px] rounded-tr-[24px]" src="{{ asset('frontend/images/work2.png') }}" alt="">
                        <div class="title font-[600] text-[28px] px-[15px] py-[10px]">جون ماير نيويورك</div>
                    </div>
                    <div class="cee rounded-[24px] border-2 border-[#282828]">
                        <img class=" h-[300px] rounded-tl-[24px] rounded-tr-[24px]" src="{{ asset('frontend/images/work3.png') }}" alt="">
                        <div class="title font-[600] text-[28px] px-[15px] py-[10px]">أنماط نايزاك</div>
                    </div>
                </div>

        </div>
    </div>




    <script src="{{ asset('frontend/js/main.js') }}" ></script>

</body>



</html>
