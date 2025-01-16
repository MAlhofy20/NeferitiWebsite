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
    @include('front.inc.header')

    @yield('content')


    @php
        $setting = collect([
            'country' => 'Alexandria - EG',
            'phone' => '+2001070019220',
            'whatsapp' => '+201070019220',
            'email' => 'contact@nefertitisolutions.com',
            'facebook_link' => 'https://www.facebook.com/',
            'twitter_link' => 'https://x.com/?lang=en',
            'instagram_link' => 'https://www.instagram.com/?hl=en',
        ]);
    @endphp
    <div class="stiky fixed bottom-0 z-[9999] w-auto pr-[10px] py-[50px]">
        <div class="st flex flex-col gap-[10px] " data-network="facebook ">
            <div class="icons flex gap-1 flex-col">
                <a href="tel:{{ $setting['phone'] }}" class="sa" onclick="trackAction('زر الهاتف - ايقون معلقة')">
                    <div class="phone w-[35px] h-[35px] cursor-pointer  flex items-center justify-center ">
                        <i class="fa-solid fa-phone-volume text-white text-2xl"></i>
                    </div>
                </a>
                <a href="https://wa.me/{{ $setting['whatsapp'] }}" target="_blank" class="sb"
                    onclick="trackAction('زر الواتساب - ايقون معلقة')">
                    <div class=" whatsapp w-[35px] h-[35px]  cursor-pointer  flex items-center justify-center ">
                        <i class="fa-brands fa-whatsapp text-white text-2xl"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="the-pahe bg-white relative overflow-hidden">
        <div class="section-info md:p-[50px] bg-[#000000] flex flex-wrap justify-center">
            <div
                class="all flex flex-wrap justify-center flex-row-reverse rounded-[20px] w-[1000px] overflow-hidden shadow-[0px_0px_9px_0px_#377287]">
                <!-- Contact Form -->
                <div id="contact-section" class="contact-form bg-[#2a2a2a] flex-[1_1_300px] p-8" data-aos="zoom-in-left"
                    data-aos-easing="linear" data-aos-duration="400">
                    <h3 class="mb-5 text-[30px] font-bold text-[cyan]">تواصل معنا</h3>
                    <div class="form">
                        <div class="form-group mb-[20px]">
                            <input type="text"
                                class="form-control placeholder-[#bbb] w-full p-3 shadow-[3px_4px_1px_0px_#1e1e1e] border border-[#444] rounded-md bg-[#333] text-white text-sm"
                                name="name" id="name" placeholder="الاسم">
                        </div>
                        <div class="form-group mb-[20px]">
                            <input type="phone"
                                class="form-control placeholder-[#bbb] w-full p-3 shadow-[3px_4px_1px_0px_#1e1e1e] border border-[#444] rounded-md bg-[#333] text-white text-sm"
                                name="phone" id="phone" placeholder="رقم الهاتف للتواصل">
                        </div>
                        <div class="form-group mb-[20px]">
                            <textarea name="message"
                                class="form-control w-full p-3 shadow-[3px_4px_1px_0px_#1e1e1e]  border border-[#444] rounded-sm bg-[#333] text-white text-sm placeholder-[#bbb]"
                                id="message" rows="5" placeholder="رسالتك هنا"></textarea>
                        </div>
                        <div class="form-group mb-[20px]  cursor-pointer  ">
                            <button type="button" value="ارسال" onclick="sendMessage()"
                                class="btn link5 w-full rounded-2xl p-3 border border-[rgba(255,255,255,0.3)] shadow-[0_4px_6px_rgb(0,0,0)]  bg-[#186766] text-white text-lg font-bold cursor-pointer  transition-colors-transform duration-300 ">
                        </div>
                    </div>
                </div>
                <!-- Contact Information -->
                <div class="contact-info flex-[1_1_300px] bg-[#1c1e25] p-8 text-[#dcdcdc]" data-aos="zoom-in-right"
                    data-aos-easing="linear" data-aos-duration="500">
                    <h3 class="mb-[20px] text-[30px] font-bold text-[cyan]">معلومات للتواصل معنا</h3>
                    <p class="mb-[20px] leading-9 text-[20px] text-[#666666]">نحن منفتحون على أي اقتراح <br> أو مجرد
                        الدردشة</p>

                    <div class="info-item flex gap-[20px] justify-start items-center mb-[25px] ">
                        <div
                            class=" w-[60px] h-[60px] rounded-full bg-[rgba(255,255,255,0.02)] flex justify-center items-center">
                            <i class="te1 text-[#fff] fa-solid fa-phone-volume"></i>
                        </div>
                        <p>
                            <span class="text-[#fff] pl-[10px] font-bold text-[20px] "> الهاتف:</span>
                            <div class="link8 flex flex-col gap-[5px]" onclick="trackAction('زر الاتصال - تواصل معنا')">
                                <a dir="ltr" class="text-[#666666] font-bold text-[20px]  no-underline "
                                href="tel:{{ $setting['phone'] }}" >اضغط للتواصل</a>
                                <a dir="ltr" class=" no-underline "
                                href="tel:{{ $setting['phone'] }}">{{ $setting['phone'] }}</a>
                            </div>
                        </p>
                    </div>
                    <div class="info-item  flex gap-[20px] justify-start items-center mb-[15px]">
                        <div class="w-[60px] h-[60px] rounded-full bg-[rgba(255,255,255,0.02)] flex justify-center items-center">
                            <i class="te1 text-[#fff] fa-solid fa-envelope"></i>
                        </div>
                        <p>
                            <span class="text-[#fff] pl-[10px] font-bold text-[20px] "> الايميل: </span>
                            <div class="link8 flex flex-col gap-[5px]" onclick="trackAction('زر الايميل - تواصل معنا')">
                                <a class="font-bold text-[20px]  text-[#666666] no-underline "
                                target="_blank"
                                    href="mailto:{{ $setting['email'] }}">اضغط للتواصل
                                </a>
                                <a class=" no-underline " target="_blank"
                                href="mailto:{{ $setting['email'] }}">{{ $setting['email'] }}
                                </a>
                            </div>
                        </p>
                    </div>
                    <div class="info-item flex gap-[20px] justify-start items-center mb-[15px]">
                        <div
                            class="w-[60px] h-[60px] rounded-full bg-[rgba(255,255,255,0.02)] flex justify-center items-center">
                            <i class="te1 text-[#fff] fa-solid fa-earth-americas"></i>
                        </div>
                        <p><span class="text-[#fff] pl-[10px] font-bold text-[20px] "> الواتساب : </span><a
                            onclick="trackAction('زر الواتساب - تواصل معنا')"
                                target="_blank" class=" font-bold text-[20px]  text-[#666666] no-underline link8"
                                href="https://wa.me/{{ $setting['whatsapp'] }}">اضغط لبدأ التواصل</a></p>
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
                        <p><span class="text-[#fff] pl-[10px]"> الهاتف : </span>
                            <a dir="ltr" class=" no-underline link9"
                            onclick="trackAction('زر الهاتف - الفوتر')"
                                href="tel:{{ $setting['phone'] }}">{{ $setting['phone'] }}</a>
                        </p>
                        <p class="py-[10px]">
                            <span class="text-[#fff] pl-[10px]"> الاميل : </span>
                            <a class=" no-underline link9"
                            onclick="trackAction('زر الايميل - الفوتر')"
                                href="mailto:{{ $setting['email'] }}" target="_blank">{{ $setting['email'] }}
                            </a>
                        </p>
                        <p>
                            <span class="text-[#fff] pl-[10px]"> الواتساب : </span>
                                <a class=" no-underline link9" target="_blank"
                                onclick="trackAction('زر الواتساب - الفوتر')"
                                href="https://wa.me/{{ $setting['whatsapp'] }}">اضغط لبدأ التواصل</a>
                        </p>
                    </div>
                    <div class="iconeweb py-[18px]  text-[40px] flex gap-[16px] lg:justify-start justify-center ">
                        <div class="start2">
                            <a href="{{ $setting['facebook_link'] }}" target="_blank" class=" facebook">
                                <i class=" fa-brands fa-facebook"></i>
                            </a>
                        </div>
                        <div class="start2">
                            <a href="{{ $setting['twitter_link'] }}" target="_blank" class=" x ">
                                <i class=" fa-brands fa-twitter"></i>
                            </a>
                        </div>
                        <div class="start2">
                            <a href="{{ $setting['instagram_link'] }}" target="_blank" class=" instagram">
                                <i class="  fa-brands fa-instagram"></i>
                            </a>
                        </div>
                        <div class="start2">
                            <a href="https://wa.me/{{ $setting['whatsapp'] }}" target="_blank" class=" whatsapp"
                                onclick="trackAction('زر الواتساب - الفوتر')">
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
                    <div class="country">{{ $setting['country'] }}</div>
                </div>
                <div class="locati-sp flex flex-wrap gap-[10px]">
                    <a href="#" class="no-underline link9">الشروط والاحكام</a>
                    <a href="#" class="no-underline link9">سياسة الخصوصية</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init();
        //
        function trackAction(actionName) {
            fetch("{{ route('front.action') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    action_name: actionName,
                    url: window.location.pathname,
                }),
            })
        }

        function sendMessage() {
            fetch("{{ route('front.message.store') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    name: document.getElementById('name').value,
                    phone: document.getElementById('phone').value,
                    message: document.getElementById('message').value,
                    url: window.location.pathname,
                }).then(response => response.json()).then(data => {
                    if (data.success) {
                        alert(data.message);
                    }
                });
            })
        }
    </script>
</body>

</html>
