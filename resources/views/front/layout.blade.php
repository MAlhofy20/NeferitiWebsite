<!DOCTYPE html >
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('head')
    <link rel="icon" type="image/jpg" href="{{ asset('dash/images/logo_with_bg.jpg') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">


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
            'country' => 'الاسكندرية - مصر',
            'phone' => '+201148394372',
            'whatsapp' => '+201148394372',
            'email' => 'contact@nefertitisolutions.com',
            'facebook_link' => 'https://www.facebook.com/Nefertitisolutions0',
            'twitter_link' => 'https://x.com/NefertitiSo',
            'instagram_link' => 'https://www.instagram.com/?hl=en',
        ]);
    @endphp
    <div class="stiky fixed bottom-0 z-[9999] w-auto pr-[10px] py-[50px]">
        <div class="st flex flex-col gap-[10px] " data-network="facebook ">
            <div class="icons flex gap-1 flex-col">
                <!-- زر الهاتف -->
                <a href="tel:{{ $setting['phone'] }}"
                    class="sa phone w-[35px] h-[35px] cursor-pointer flex items-center justify-center" target="_blank"
                    onclick="trackAction('زر الهاتف - ايقون معلقة')" aria-label="اتصل بنا" title="اتصل بنا">
                    <i class="fa-solid fa-phone-volume text-white text-[20px] text-2xl"></i>
                </a>

                <!-- زر الواتساب -->
                <a href="https://wa.me/{{ $setting['whatsapp'] }}" target="_blank"
                    class="sb whatsapp w-[35px] h-[35px] cursor-pointer flex items-center justify-center"
                    onclick="trackAction('زر الواتساب - ايقون معلقة')" aria-label="مراسلتنا عبر الواتساب"
                    title="مراسلتنا عبر الواتساب">
                    <i class="fa-brands fa-whatsapp text-white text-[20px] text-2xl"></i>
                </a>
            </div>

        </div>
    </div>

    <div class="the-pahe bg-white relative overflow-hidden">
        <div style="background: linear-gradient(180deg, #f5f5f500, #f5f5f5), linear-gradient(84deg, #3bb3ff33, #ffffff 70.83%, #b1bb2f33 100%, #ffffff);" id="contact" class="section-info md:p-[50px]  flex flex-wrap justify-center">
            <div
                class="all flex flex-wrap  justify-center flex-row md:rounded-[10px] w-full md:max-w-[964px]  overflow-hidden ">
                <!-- Contact Form -->
                <div id="contact-section" class="contact-form  p-8  bg-[#272a34] lg:w-[482px] w-full">
                    <h3 class="mb-5 text-[30px] font-bold text-white">راسلنا</h3>
                    <div class="form">
                        <div class="form-group mb-[20px]">
                            <input type="text"
                                class="form-control  w-full p-3  bg-[#272a34] text-white text-sm
                            br"
                                name="name" id="name" placeholder="الاسم">
                        </div>
                        <div class="form-group mb-[20px]">
                            <input type="text"
                                class="form-control  w-full p-3  bg-[#272a34] text-white text-sm
                            br"
                                name="phone_email" id="phone_email" placeholder="رقم الهاتف للتواصل او البريد الالكتروني">
                        </div>
                        <div class="form-group mb-[20px]">
                            <textarea name="message"
                                class="form-control w-full p-3 br bg-transparent text-white text-sm "
                                id="message" rows="5" placeholder="رسالتك هنا"></textarea>
                        </div>
                        <div class="form-group mb-[20px]  cursor-pointer  ">
                            <button type="button" onclick="sendMessage(this)"
                                class="btn  link5 w-fit rounded-[10px] px-[50px] py-[15px]
                                    bg-[#3256a9] text-white text-lg font-bold cursor-pointer  transition-colors-transform duration-300 ">
                                ارسال
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Contact Information -->
                <div class="contact-info p-4 md:p-8 lg:w-[482px] w-full  bg-[#1c1e25] text-[#dcdcdc]">
                    <h3 class="mb-[20px] text-[30px] font-bold text-gold-gradient">تواصل معنا بسهولة</h3>
                    <p class="mb-[20px] md:leading-9 leading-[25px] text-[20px] text-[#666666]">
                        سواء كان لديك استفسار، فكرة، أو تحتاج إلى دعم – نحن هنا لأجلك.
                    </p>
                    <div class="info-item  flex cursor-pointer justify-start items-center mb-[25px]">
                        <div
                            class=" w-[50px]  ml-[10px] h-[50px] rounded-full bg-[rgba(255,255,255,0.02)] flex justify-center items-center">
                            <i class="te1 text-[#fff] fa-solid fa-phone-volume"></i>
                        </div>
                        <p>
                            <span class="text-[#fff] pl-[10px] font-bold md:text-[20px] text-[18px]"> الهاتف:</span>
                        <div class="link8 flex flex-col gap-[5px] text-right"
                            onclick="trackAction('زر الاتصال - تواصل معنا')">
                            <a dir="ltr"
                                class="text-[#666666] font-bold md:text-[20px] text-[18px] no-underline "
                                aria-label="اتصل بنا" title="اتصل بنا" href="tel:{{ $setting['phone'] }}">اضغط
                                للتواصل</a>
                            <a dir="ltr" class="no-underline text-[20px] " aria-label="اتصل بنا" title="اتصل بنا"
                                href="tel:{{ $setting['phone'] }}">{{ $setting['phone'] }}</a>
                        </div>
                        </p>
                    </div>

                    <div class="info-item flex cursor-pointer justify-start items-center mb-[15px]">
                        <div
                            class=" w-[50px]  ml-[10px] h-[50px] rounded-full bg-[rgba(255,255,255,0.02)] flex justify-center items-center">
                            <i class="te1 text-[#fff] fa-solid fa-envelope"></i>
                        </div>
                        <p>
                            <span class="text-[#fff] pl-[10px] font-bold md:text-[20px] text-[18px]"> الايميل:</span>
                        <div class="link8 flex flex-col gap-[5px] text-right"
                            onclick="trackAction('زر الايميل - تواصل معنا')">
                            <a class="font-bold md:text-[20px] text-[18px] text-[#666666] no-underline "
                                aria-label="اتصل بنا" title="اتصل بنا" target="_blank"
                                href="mailto:{{ $setting['email'] }}">اضغط للتواصل</a>
                            <a class="no-underline  text-[20px] " target="_blank" aria-label="اتصل بنا" title="اتصل بنا"
                                href="mailto:{{ $setting['email'] }}">{{ $setting['email'] }}</a>
                        </div>
                        </p>
                    </div>

                    <div class="info-item flex cursor-pointer justify-start items-center mb-[15px]">
                        <div
                            class="w-[50px] ml-[10px] h-[50px] rounded-full bg-[rgba(255,255,255,0.02)] flex justify-center items-center">
                            <i class="te1 text-[#fff] fa-brands fa-whatsapp text-[20px]"></i>
                        </div>
                        <p>
                            <span class="text-[#fff] pl-[10px] font-bold md:text-[20px] text-[18px]"> واتساب:</span>
                        <div class="link8 flex flex-col gap-[5px] text-right"
                            onclick="trackAction('زر الواتساب - تواصل معنا')">
                            <a dir="ltr"
                                class="text-[#666666] font-bold md:text-[20px] text-[18px] no-underline "
                                aria-label="اتصل بنا" title="اتصل بنا"
                                href="https://wa.me/{{ $setting['whatsapp'] }}">اضغط للتواصل</a>
                            <a dir="ltr" class="no-underline text-[20px] " aria-label="اتصل بنا" title="اتصل بنا"
                                href="https://wa.me/{{ $setting['whatsapp'] }}">{{ $setting['phone'] }}</a>
                        </div>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div
            class="footer relative px-[20px] lg:text-start text-center lg:px-[100px] pt-[50px] lg:pt-[80px]  bg-[#1a43a1] text-white">
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
                        <source srcset="image.webp" type="image/webp">
                        <img loading="lazy" class="rounded-[8px] w-[200px] h-[100px] mx-auto md:mx-0"
                            onclick="window.location.href='{{ route('front.home') }}'"
                            src="{{ asset('frontend/images/LOGO (2).png') }}" alt="">
                    </div>
                    <p class="max-w-[414px] text-[#FFFFFF] leading-[26px] pt-[24px] t">من خلال نظرة تجمع بين خبرة
                        المبرمجين ودقة المصممين وبُعد نظر خبراء التسويق،
                        نصنع لك نافذة تنقل أعمالك إلى بُعد آخر

                    </p>
                </div>
                <div class="overview max-w-[275px] leading-[26px]">
                    <div class="font-[700] text-[24px]">اختصارات</div>
                    <div class="list">
                        <ul class="flex flex-wrap text-white gap-y-4 pt-[24px] leading-[16px]">
                            <li class="w-1/2 hover:font-bold"><a class="link9"
                                    href="{{ route('front.home') }}">الرئيسية</a></li>
                            <li class="w-1/2 hover:font-bold"><a class="link9" role="button"
                                    onclick="goToSection('about')">من نحن</a></li>
                            <li class="w-1/2 hover:font-bold"><a class="link9" role="button"
                                    onclick="goToSection('products')">منتجاتنا</a></li>
                            <li class="w-1/2 hover:font-bold"><a class="link9" role="button"
                                    onclick="goToSection('projects')">مشاريعنا</a></li>
                            <li class="w-1/2 hover:font-bold"><a class="link9" role="button"
                                    onclick="goToSection('blogs')">المدونة</a></li>
                        </ul>
                    </div>
                </div>
                <div class="contact-Us leading-[24px]">
                    <div class="font-[700] text-[24px]">للتواصل</div>
                    <div class="forYou pt-[24px]">
                        <p><span class="text-[#fff] pl-[10px]"> الهاتف : </span>
                            <a dir="ltr" class="no-underline link9 py-2 px-4"
                                onclick="trackAction('زر الهاتف - الفوتر')" aria-label="اتصل بنا" title="اتصل بنا"
                                href="tel:{{ $setting['phone'] }}">{{ $setting['phone'] }}</a>
                        </p>
                        <p class="py-[10px]">
                            <span class="text-[#fff] pl-[10px]"> الايميل : </span>
                            <a class="no-underline link9 py-2 px-4" onclick="trackAction('زر الايميل - الفوتر')"
                                aria-label="اتصل بنا" title="اتصل بنا" href="mailto:{{ $setting['email'] }}"
                                target="_blank">{{ $setting['email'] }}</a>
                        </p>
                        <p>
                            <span class="text-[#fff] pl-[10px]"> الواتساب : </span>
                            <a class="no-underline link9 py-2 px-4" target="_blank" aria-label="اتصل بنا"
                                title="اتصل بنا" onclick="trackAction('زر الواتساب - الفوتر')"
                                href="https://wa.me/{{ $setting['whatsapp'] }}">اضغط لبدأ التواصل</a>
                        </p>
                    </div>
                    <div class="iconeweb py-[18px] text-[40px] flex gap-[16px] lg:justify-start justify-center">
                        <div class="start2">
                            <a href="{{ $setting['facebook_link'] }}" aria-label="Facebook" title="انتقل إلى فيسبوك"
                                target="_blank" class="facebook">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </div>
                        <div class="start2">
                            <a href="{{ $setting['twitter_link'] }}" aria-label="Twitter" title="انتقل إلى تويتر"
                                target="_blank" class="x">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                        <div class="start2">
                            <a href="{{ $setting['instagram_link'] }}" aria-label="Instagram"
                                title="انتقل إلى إنستغرام" target="_blank" class="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                        <div class="start2">
                            <a href="https://wa.me/{{ $setting['whatsapp'] }}" aria-label="WhatsApp"
                                title="انتقل إلى واتساب" target="_blank" class="whatsapp"
                                onclick="trackAction('زر الواتساب - الفوتر')">
                                <i class="fa-brands fa-whatsapp"></i>
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
                    <a href="{{ route('front.terms') }}" target="_blank" class="text-white no-underline link9">الشروط
                        والاحكام</a>
                    <a href="{{ route('front.privacy') }}" target="_blank" class="text-white no-underline link9">سياسة
                        الخصوصية</a>
                </div>
            </div>
        </div>
    </div>
    <div id="overlay"></div>
    <div class="sowpopup">
        <div class="x relative"><i
                class="fa-solid fa-circle-xmark shadow-[0_0_5px_0_rgb(0,0,0)] rounded-full absolute right-0 text-[20px] cursor-pointer transition-transform duration-300 ease "></i>
        </div>
        <div class="show gap-[20px] flex justify-center items-center max-w-full max-h-full flex-wrap">
            <i
                class="fa-solid fa-circle-check right text-[100px] text-green-500 shadow-[0_0_10px_0_rgb(0,0,0)] rounded-full"></i>
            <i
                class="fa-solid fa-circle-xmark mistake text-[100px] text-red-500 shadow-[0_0_10px_0_rgb(0,0,0)] rounded-full"></i>
            <P class="text-[24px] font-normal w-full text-center"></P>
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

        function sendMessage(element) {
            element.disabled = true;
            element.classList.add('opacity-50', 'pointer-events-none');
            //disabled btn
            const name = document.getElementById('name');
            const phone_email = document.getElementById('phone_email');
            const message = document.getElementById('message');
            const sowPopup = document.querySelector(".sowpopup");
            const overlay = document.querySelector("#overlay");
            const messageParagraph = document.querySelector(".sowpopup .show p");
            const right = document.querySelector(".sowpopup .show .right");
            const mistake = document.querySelector(".sowpopup .show .mistake");
            const icon = document.querySelector(".sowpopup .x i");

            // التحقق من المدخلات
            if (!name.value.trim() || !phone_email.value.trim() || !message.value.trim()) {
                element.disabled = false;
                    element.classList.remove('opacity-50', 'pointer-events-none');

                return showPopup(false, "من فضلك، املأ جميع الحقول.");

            }
            if (name.value.length > 250) {
                element.disabled = false;
                    element.classList.remove('opacity-50', 'pointer-events-none');

                return showPopup(false, "تحقق من الاسم.");

            }
            if (message.value.length > 1000) {
                element.disabled = false;
                    element.classList.remove('opacity-50', 'pointer-events-none');

                return showPopup(false, "يمكنك أن تقلل في حجم الرسالة.");

            }

            // إرسال البيانات
            fetch("{{ route('front.message.store') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        name: name.value.trim(),
                        phone_email: phone_email.value.trim(),
                        message: message.value.trim(),
                        url: window.location.pathname,
                    })
                })
                .then(response => response.json())
                .then(data => {
                    //enable btn
                    element.disabled = false;
                    element.classList.remove('opacity-50', 'pointer-events-none');
                    showPopup(data.success, data.message);
                    if (data.success) {
                        name.value = "";
                        phone_email.value = "";
                        message.value = "";
                    }
                })
                .catch(() => showPopup(false, "حدث خطأ أثناء إرسال الرسالة."));

            // عرض الإشعار
            function showPopup(success, message) {

                messageParagraph.textContent = message;
                right.classList.toggle("hidden", !success);
                mistake.classList.toggle("hidden", success);
                sowPopup.classList.add("open");
                overlay.classList.add("now");

                icon.addEventListener("click", () => {
                    sowPopup.classList.remove("open");
                    overlay.classList.remove("now");
                });
            }
        }

        function goToSection(section) {
            // التحقق من الصفحة الحالية
            const isHomePage = window.location.pathname === "{{ route('front.home') }}";
            console.log(isHomePage);

            if (isHomePage) {
                // إذا كانت الصفحة الرئيسية، انتقل مباشرة إلى القسم
                window.location.hash = section;
            } else {
                // إذا لم تكن الصفحة الرئيسية، انتقل إلى الصفحة الرئيسية مع الهاش
                window.location.href = "{{ route('front.home') }}#" + section;
            }
        }
    </script>
</body>

</html>
