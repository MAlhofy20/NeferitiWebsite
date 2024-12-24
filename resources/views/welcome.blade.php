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
    <div class="main bg-[#041527] pb-[50px]">
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
        <div class="icons pt-[50px] overflow-hidden w-[80%] mx-auto">
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
    </div>
    <div class="the-pahe bg-white relative pt-[50px] h-[600px]">
        <div class="color w-full absolute h-[50%]"></div>
        <div class="about-us">
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
            <div class="cards flex justify-center gap-[60px] items-center px-[50px] py-[80px] flex-wrap">
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
        <div class="services"></div>
    </div>















    <script src="{{ asset('frontend/js/main.js') }}" ></script>

</body>



</html>
