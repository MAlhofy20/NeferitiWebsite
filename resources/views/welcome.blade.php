<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />



    <!-- Google Fonts -->
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

    </head>


    <body dir="rtl" class="bg">
    <div class="main ">
        <div class="the-pag shadow-[0px_0px_5px_0px_#e3e2e2] visible relative h-[5000px] rounded-[16px] w-[90%] mt-[20px] mx-auto bg-white custum">
            <div id="menu" class="minu menu-fixed pl-[10px] pr-[10px] rounded-tl-[16px] rounded-tr-[16px] bg-[#303030] flex justify-evenly items-center">
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
            <div class="hero flex justify-center items-center flex-col pt-[70px] text-center ">
                <div class="title">
                    <p class="text-[80px] font-bold">نصمم مواقع تُحدث فرقًا</p>
                    <p class="py-[20px] leading-[37px] font-bold text-[20px] text-gray-500">
                        نحن لا نصمم مجرد مواقع ويب. نحن نخلق جسورًا تربطك بعالمك الجديد.
                        <br>
                        من خلال نظرة تجمع بين خبرة المبرمجين ودقة المصممين وبُعد نظر خبراء التسويق،
                        <br>
                        نصنع لك نافذة تنقل أعمالك إلى بُعد آخر
                    </p>
                </div>
                <div>
                    <a class="bg-gray-800 rounded-[15px] text-white px-[50px] py-[10px] shadow-[0_0_3px_0_#0d0b0b]" href="#">تواصل معنا</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('frontend/js/main.js') }}" ></script>

</body>



</html>
