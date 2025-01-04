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
    <div class="main bg-[#041527] pb-[50px] relative overflow-hidden">
        <div class = "flex justify-center">
            <div id="menu" class="active">
                <div class="logo ml-[10px]">
                    <img class="rounded-[8px] w-[40px] h-[50px]" src="{{asset('frontend/images/logo trans.png')}}" alt="">
                </div>
                <div class="content-menu px-[30px]">
                    <ul class="px-[10px] gap-[50px] flex justify-center items-center cursor-pointer">

                        <li class="font-[300] text-[13px] leading-[18.2px] text-[#FFFFFF]"><a href="#"><span>الاراء</span></a></li>
                        <li class="font-[300] text-[13px] leading-[18.2px] text-[#FFFFFF]"><a href="#"><span>المدونه</span></a></li>
                        <li class="font-[300] text-[13px] leading-[18.2px] text-[#FFFFFF]"><a href="#"><span>المحتوي</span></a></li>
                        <li class="font-[300] text-[13px] leading-[18.2px] text-[#FFFFFF]"><a href="#"><span>خدمات</span></a></li>
                        <li class="font-[300] text-[13px] leading-[18.2px] text-[#FFFFFF]"><a href="#"><span>الاراء</span></a></li>
                    </ul>
                </div>
                <div class="start bg-[#FFFFFF] rounded-[12px] w-[116px] max-h-[36px] h-[36px] flex justify-center items-center">
                    <a class="text-[13px] font-[500]" href="#">ابدأ من هنا</a>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <img class="rounded-[8px]  absolute w-[250px] h-[148px] top-[80px] opacity-10"src="{{asset('frontend/images/logo trans.png')}}" alt="">
        </div>
        <div class="hero flex justify-center items-center flex-col pt-[150px] text-center pb-[50px] px-[20px]">
            <div class="title">
                <p class="text-[80px] text-white font-bold">نصمم مواقع تُحدث فرقًا</p>
                <p class="py-[20px] leading-[37px] font-bold text-[20px] text-gray-500">
                    من خلال نظرة تجمع بين خبرة المبرمجين ودقة المصممين وبُعد نظر خبراء التسويق،
                    <br>
                    نصنع لك نافذة تنقل أعمالك إلى بُعد آخر
                </p>
            </div>
            <div>
                <a class="cursor-box not-allowed bg-gray-800 rounded-[15px] text-white px-[50px] py-[10px] shadow-[0_0_3px_0_#0d0b0b]" href="#">تواصل معنا</a>
            </div>
        </div>
        <div class="flex justify-start items-center">
            <img class="rounded-[8px]  absolute w-[250px] h-[148px] top-[50%] opacity-10"src="{{asset('frontend/images/logo trans.png')}}" alt="">
        </div>
        <div class="flex justify-end items-center">
            <img class="rounded-[8px]  absolute w-[250px] scale-x-[-1] h-[148px] top-[50%] opacity-10"src="{{asset('frontend/images/logo trans2.png')}}" alt="">
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
    <div class="the-pahe bg-white relative pt-[50px]">
        <div class="about-us relative">

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
                <div class="aa flex flex-col justify-center items-center gap-[30px]">
                    <div class="flex justify-center items-center bg-white  rounded-[32px] ">
                        <img src="{{asset('frontend/images/Group1.png')}}" alt="">
                    </div>
                    <p class="font-[500] text-[30px] px-[20px] text-center text-[#0B2131]">تصميم التخطيط</p>
                </div>
                <div class="bb flex flex-col justify-center items-center gap-[30px]">
                    <div class="flex justify-center items-center bg-white  rounded-[32px] ">
                        <img src="{{asset('frontend/images/Group2.png')}}" alt="">
                    </div>
                    <p class="font-[500] text-[30px] px-[20px] text-center text-[#0B2131]">تصميم جرافك</p>
                </div>
                <div class="cc flex flex-col justify-center items-center gap-[30px]">
                    <div class="flex justify-center items-center bg-white rounded-[32px] ">
                        <img src="{{asset('frontend/images/Group3.png')}}" alt="">
                    </div>
                    <p class="font-[500] text-[30px] px-[20px] text-center text-[#0B2131]">تصميم الهاتف </p>
                </div>
                <div class="dd flex flex-col justify-center items-center gap-[30px]">
                    <div class="flex justify-center items-center bg-white rounded-[32px] ">
                        <img src="{{asset('frontend/images/Group4.png')}}" alt="">
                    </div>
                    <p class="font-[500] text-[30px] px-[20px] text-center text-[#0B2131]">تصميم الويب</p>
                </div>
            </div>
        </div>
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
            <div class="flex gap-[20px] justify-center z-[2] relative items-center p-[25px] flex-wrap">
                    <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">~$100 billion</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            حجم التداول التراكمي
                            <br>
                            حتى تاريخه
                        </div>
                    </div>
                    <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">0.8%</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            من حجم تداول العملات
                            <br>
                            المشفرة العالمية
                        </div>
                    </div>
                    <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] transition-all duration-500 items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">~30</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            زملاء فريق الجاذبية
                            <br>
                            (& ينمون)
                        </div>
                    </div>
                    <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">25+</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            البورصات العالمية والمحلية الرائدة
                            <br>
                            في مجال العملات المشفرة
                        </div>
                    </div>
                    <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">2017</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            البداية، مواطنو التشفير
                        </div>
                    </div>
                    <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">1,200+</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            أزواج الأصول المشفرة
                        </div>
                    </div>
                    <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">24/7</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            السيولة
                        </div>
                    </div>
                    <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] h-[180px]">
                        <div class="font-[500] text-[32px]">50+الف</div>
                        <div class="font-[400] leading-[30px] text-center text-[20px]">
                            الصفقات التي تمت حتى الآن
                        </div>
                    </div>
            </div>
            <div class="colr absolute top-0 z-[1] opacity-[0.1] w-[300px] right-0"> <img src="{{asset('frontend/images/logo trans.png')}}" alt=""></div>
        </div>
        <div class="products p-[50px] bg-black text-white">
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
                    <div class="min flex justify-center gap-[45px] ">
                        <div class="image">
                            <img class="rounded-[18px] w-[140px] h-[40px] transition-all duration-300 ease-in-out" src="{{asset('frontend/images/accordion1.png')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <div class="tot flex justify-between items-center">
                                <div class="tit font-[600] text-[28px]">تصميم الويب والهواتف المحمولة</div>
                                <div class="icon">
                                    <i class="fa-solid fa-arrow-down"></i>                                </div>
                            </div>
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

                </div>
                <div class="accor cursor-pointer flex justify-center items-center ">
                    <div class="min flex justify-center gap-[45px] ">
                        <div class="image">
                            <img class="rounded-[18px] w-[140px] h-[40px] transition-all duration-300 ease-in-out  " src="{{asset('frontend/images/accordion2.png')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <div class="tot flex justify-between items-center">
                                <div class="tit font-[600] text-[28px]">تصميم الويب والهواتف المحمولة</div>
                                <div class="icon">
                                    <i class="fa-solid fa-arrow-down"></i>                                </div>
                            </div>
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
                </div>
                <div class="accor cursor-pointer flex justify-center items-center ">
                    <div class="min flex justify-center gap-[45px] ">
                        <div class="image ">
                            <img class="rounded-[18px] w-[140px] h-[40px] transition-all duration-300 ease-in-out" src="{{asset('frontend/images/accordion3.png')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <div class="tot flex justify-between items-center">
                                <div class="tit font-[600] text-[28px]">تصميم الويب والهواتف المحمولة</div>
                                <div class="icon">
                                    <i class="fa-solid fa-arrow-down"></i>                                </div>
                            </div>
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

                </div>
                <div class="accor cursor-pointer flex justify-center items-center ">
                    <div class="min flex justify-center gap-[45px] ">
                        <div class="image ">
                            <img class="rounded-[18px] w-[140px] h-[40px] transition-all duration-300 ease-in-out" src="{{asset('frontend/images/accordion4.png')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <div class="tot flex justify-between items-center">
                                <div class="tit font-[600] text-[28px]">تصميم الويب والهواتف المحمولة</div>
                                <i class="fa-solid fa-arrow-down"></i>
                            </div>
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
                </div>
                <div class="accor cursor-pointer flex justify-center items-center ">
                    <div class="min flex justify-center gap-[45px]">
                        <div class="image ">
                            <img class="rounded-[18px] w-[140px] h-[40px] transition-all duration-300 ease-in-out" src="{{asset('frontend/images/accordion5.png')}}" alt="">
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <div class="tot flex justify-between items-center">
                                <div class="tit font-[600] text-[28px]">تصميم الويب والهواتف المحمولة</div>
                                <div class="icon">
                                    <i class="fa-solid fa-arrow-down"></i>                                </div>
                            </div>
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
            <div class="allVeow flex justify-center items-center pt-[50px]">
                <div class="gap-5 flex justify-center items-center  p-[10px_8px] w-[663px] rounded-2xl cursor-pointer bg-[#0000001c] border border-[rgba(255,255,255,0.3)] shadow-[0_4px_6px_rgb(0,0,0)]">
                    <a href="#">جميع الالعمال السابقه</a>
                    <i class="fa-solid fa-arrow-trend-down"></i>
                </div>
            </div>
        </div>
        <div class="previousTwo">
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
        </div>
        <div class="blogs p-[100px]">
            <div class="title flex justify-between pb-[50px] items-center">
                <div class="tit text-[42px] font-[800]">أحدث منشورات مدونتنا</div>
                <div class="bg-[#171313] p-[15px] rounded-[10px] text-white">
                    <a class="font-[600] " href="#">شاهد جميع منشورات المدونة</a>
                </div>
            </div>
            <div class="tow-colmn flex gap-[20px] justify-start flex-wrap">
                <div class="one flex gap-[20px] flex-wrap">
                    <div class="gap-[45px]">
                        <div class="image pb-[15px]">
                            <img src="{{ asset('frontend/images/blog1.png') }}" alt="">
                        </div>
                        <div class="date text-[#64607D]">
                            <span>08-11-2021</span>
                            <span>Category</span>
                        </div>
                        <div class="tit max-w-[375px] font-[800] text-[20px] leading-[36px] py-[5px]">
                            الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.
                        </div>
                        <p class="text-[#64607D] max-w-[375px] text-[400] leading-[30px]">
                            رحبت السيدة بالبركة التي التقت بها، ورحبت بالسيد الذي قام بتربيتها. ستة أيام من الفضول لضمان السرير ضروري.
                        </p>
                    </div>
                    <div>
                        <div class="image pb-[15px]">
                            <img src="{{ asset('frontend/images/blog3.png') }}" alt="">
                        </div>
                        <div class="date text-[#64607D]">
                            <span>08-11-2021</span>
                            <span>Category</span>
                        </div>
                        <div class="tit font-[800]  text-[20px] leading-[36px] py-[5px]">
                            الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.
                        </div>
                        <p class="text-[#64607D] max-w-[375px] text-[400] leading-[30px]">
                            رحبت السيدة بالبركة التي التقت بها، ورحبت بالسيد الذي قام بتربيتها. ستة أيام من الفضول لضمان السرير ضروري.
                        </p>
                    </div>
                </div>
                <div class="two max-w-[375px]">
                    <div class="flex items-center gap-[19px] pb-[15px] border-b border-[#DEE1E6]">
                        <div class="image min-w-[110px]">
                            <img src="{{ asset('frontend/images/blog2.png') }}" alt="">
                        </div>
                        <div>
                            <div class="date text-[#64607D]">
                                <span>08-11-2021</span>
                                <span>Category</span>
                            </div>
                            <div class="tit font-[800] leading-[27px]">
                                التحيز أو الاستمرار في مبادئ معينة                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-[19px] py-[15px]  border-b border-[#DEE1E6]">
                        <div class="image min-w-[110px]">
                            <img src="{{ asset('frontend/images/blog4.png') }}" alt="">
                        </div>
                        <div>
                            <div class="date text-[#64607D]">
                                <span>08-11-2021</span>
                                <span>Category</span>
                            </div>
                            <div class="tit font-[800] leading-[27px]">
                                هل نؤمن بالتصرف في المخصصات المدعومة؟
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-[19px] py-[15px]  border-b border-[#DEE1E6]">
                        <div class="image min-w-[110px]">
                            <img src="{{ asset('frontend/images/blog5.png') }}" alt="">
                        </div>
                        <div>
                            <div class="date text-[#64607D]">
                                <span>08-11-2021</span>
                                <span>Category</span>
                            </div>
                            <div class="tit font-[800] leading-[27px]">
                                الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-[19px] py-[15px] border-b border-[#DEE1E6]">
                        <div class="image min-w-[110px]">
                            <img src="{{ asset('frontend/images/blog6.png') }}" alt="">
                        </div>
                        <div>
                            <div class="date text-[#64607D]">
                                <span>08-11-2021</span>
                                <span>Category</span>
                            </div>
                            <div class="tit font-[800] leading-[27px]">
                                القرية لم تتم إزالتها استمتعت بشرحها ولا رأى لحم الخنزير.                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Here-is-how bg-[#E3F8F8] px-[100px] py-[50px]">
            <div class="all ">
                <div class="title text-[60px] flex justify-center items-center text-center flex-col">
                    <div class="font-[700]  text-[#2E2F35]">
                        إطلاق سريع. نتائج سريعة.
                    </div>
                    <span class="font-[400] text-[#2E2F35]">إليك الطريقة.</span>
                </div>
                <div class="here">
                    <div class="min py-[15px]">
                        <div class="tit text-[36px] font-[700] text-[#2E2F3566] pr-[50px] cursor-pointer"> شريحة</div>
                        <p class="text-[20px] leading-[34px] font-[500] pr-[50px] max-w-[400px]">
                            إعلانات لمرة واحدة أو تدفقات يتم تشغيلها تلقائيًا. يتلقى العملاء بطاقاتهم الشخصية في غضون أسبوع.
                        </p>
                    </div>
                    <div class="min py-[15px]">
                        <div class="tit text-[36px] text-[#2E2F3566] font-[700] pr-[50px] cursor-pointer"> تصميم</div>
                        <p class="text-[20px] leading-[34px] font-[500] pr-[50px] max-w-[400px]">
                            إعلانات لمرة واحدة أو تدفقات يتم تشغيلها تلقائيًا. يتلقى العملاء بطاقاتهم الشخصية في غضون أسبوع.
                        </p>
                    </div>
                    <div class="min activeTwo py-[15px]">
                        <div class="tit text-[36px] font-[700] text-[#2E2F3566] pr-[50px] cursor-pointer"> ارسال</div>
                        <p class="text-[20px] leading-[34px] font-[500] pr-[50px] max-w-[400px]">
                            إعلانات لمرة واحدة أو تدفقات يتم تشغيلها تلقائيًا. يتلقى العملاء بطاقاتهم الشخصية في غضون أسبوع.
                        </p>
                    </div>
                    <div class="min py-[15px]">
                        <div class="tit text-[36px] font-[700] text-[#2E2F3566] pr-[50px] cursor-pointer"> يتحول</div>
                        <p class="text-[20px] leading-[34px] font-[500] pr-[50px] max-w-[400px] ">
                            إعلانات لمرة واحدة أو تدفقات يتم تشغيلها تلقائيًا. يتلقى العملاء بطاقاتهم الشخصية في غضون أسبوع.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients bg-[#282f4b] text-white">
            <div class="title flex flex-col justify-center gap-[20px] items-center pt-[50px]">
                <div class="tit font-bold max-w-[600px] text-[33px] px-[20px] text-center">
                    يحب الكثير من الأشخاص الآخرين
                    بناء وشحن
                    المواقع باستخدام Framer.
                </div>
                <div class="flex gap-[10px] items-center">
                    <a class="text-[22px] font-bold font-sans" href="#">انضم إلى المجتمع</a>
                    <i class="fa-solid fa-turn-down"></i>
                </div>
            </div>
            <div class="Opinions py-[65px] bg-[#282f4b] flex gap-[24px] overflow-hidden">

                <div class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[50px] max-h-[350px] flex w-[500px] rounded-[20px] justify-center gap-[30px]">
                    <i class="text-[#10ACA2] text-[45px] fa-solid fa-quote-right"></i>
                    <div>
                        <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                            خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                        </div>
                        <div class="prerson flex items-center gap-[20px] pt-[30px]">
                            <span class="h-[3px] w-[60px] bg-white block"></span>
                            <span class="font-[700]">K Oiwake</span>
                        </div>
                    </div>
                </div>
                <div class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[50px] max-h-[350px] flex w-[500px] rounded-[20px] justify-center gap-[30px]">
                    <i class="text-[#10ACA2] text-[45px] fa-solid fa-quote-right"></i>
                    <div>
                        <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                            خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                        </div>
                        <div class="prerson flex items-center gap-[20px] pt-[30px]">
                            <span class="h-[3px] w-[60px] bg-white block"></span>
                            <span class="font-[700]">K Oiwake</span>
                        </div>
                    </div>
                </div>
                <div class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[50px] max-h-[350px] flex w-[500px] rounded-[20px] justify-center gap-[30px]">
                    <i class="text-[#10ACA2] text-[45px] fa-solid fa-quote-right"></i>
                    <div>
                        <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                            خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                        </div>
                        <div class="prerson flex items-center gap-[20px] pt-[30px]">
                            <span class="h-[3px] w-[60px] bg-white block"></span>
                            <span class="font-[700]">K Oiwake</span>
                        </div>
                    </div>
                </div>
                <div class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[50px] max-h-[350px] flex w-[500px] rounded-[20px] justify-center gap-[30px]">
                    <i class="text-[#10ACA2] text-[45px] fa-solid fa-quote-right"></i>
                    <div>
                        <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                            خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                        </div>
                        <div class="prerson flex items-center gap-[20px] pt-[30px]">
                            <span class="h-[3px] w-[60px] bg-white block"></span>
                            <span class="font-[700]">K Oiwake</span>
                        </div>
                    </div>
                </div>
                <div class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[50px] max-h-[350px] flex w-[500px] rounded-[20px] justify-center gap-[30px]">
                    <i class="text-[#10ACA2] text-[45px] fa-solid fa-quote-right"></i>
                    <div>
                        <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                            خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                        </div>
                        <div class="prerson flex items-center gap-[20px] pt-[30px]">
                            <span class="h-[3px] w-[60px] bg-white block"></span>
                            <span class="font-[700]">K Oiwake</span>
                        </div>
                    </div>
                </div>
                <div class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[50px] max-h-[350px] flex w-[500px] rounded-[20px] justify-center gap-[30px]">
                    <i class="text-[#10ACA2] text-[45px] fa-solid fa-quote-right"></i>
                    <div>
                        <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                            خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                        </div>
                        <div class="prerson flex items-center gap-[20px] pt-[30px]">
                            <span class="h-[3px] w-[60px] bg-white block"></span>
                            <span class="font-[700]">K Oiwake</span>
                        </div>
                    </div>
                </div>
                <div class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[50px] max-h-[350px] flex w-[500px] rounded-[20px] justify-center gap-[30px]">
                    <i class="text-[#10ACA2] text-[45px] fa-solid fa-quote-right"></i>
                    <div>
                        <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                            خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
                        </div>
                        <div class="prerson flex items-center gap-[20px] pt-[30px]">
                            <span class="h-[3px] w-[60px] bg-white block"></span>
                            <span class="font-[700]">K Oiwake</span>
                        </div>
                    </div>
                </div>
                <div class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[50px] max-h-[350px] flex w-[500px] rounded-[20px] justify-center gap-[30px]">
                    <i class="text-[#10ACA2] text-[45px] fa-solid fa-quote-right"></i>
                    <div>
                        <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                            خدمة عملاء رائعة. انتقلت من بنك تقليدي إلى بنك Sable و ساعدتني خدمة العملاء في بنك Sable في الإجابة على جميع الأسئلة التي احتجت إلى تغيير البنك.
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
    <script src="{{ asset('frontend/js/main.js') }}" ></script>

</body>



</html>
