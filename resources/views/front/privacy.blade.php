@extends('front.layout')
@section('content')
    <div class="main bg-[#07182F]  relative overflow-hidden">
        <div class="absolute left-[7%] top-0 z-1 opacity-50 3xl:left-[19%]">
            <!-- SVG أو أي عنصر تصميمي آخر -->
        </div>
        <div class="hero flex justify-center items-center flex-col pt-[140px] md:pt-[150px] text-center px-[20px]"
            data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700">
            <p class="wave2 text-[25px] font-bold text-[#ffe9b7]">
                <span>نفرتيتي</span> <span>لحلول</span> <span>الأعمال</span>
            </p>
            <div class="title flex justify-center items-center flex-col">
                <p class="text-[30px] md:text-[80px] text-white font-bold">سياسة الخصوصية</p>
            </div>
        </div>
        <nav class="flex self-start pr-[20px]" aria-label="Breadcrumb">
            <ol class="inline-flex  items-start space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="{{ route('front.home') }}"
                        class="text-[20px] inline-flex items-center   font-medium  text-gray-400 hover:text-white">
                        <svg class="w-4 h-6 me-2.5 mb-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        الصفحه الرئيسيه
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a
                            class=" text-[20px] ms-1 font-medium text-white md:ms-2 dark:text-white">سياسة الخصوصية</a>
                    </div>
                </li>

            </ol>
        </nav>
    </div>

    <div class="w-[90%] md:w-3/4 mx-auto py-10">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">مقدمة</h2>
            <p class="mb-4">
                نحن في **نفرتيتي لحلول الأعمال** نحترم خصوصيتك ونعمل جاهدين على حماية بياناتك الشخصية. توضح سياسة الخصوصية هذه كيفية جمع واستخدام وحماية المعلومات التي تقدمها لنا عند استخدامك لموقعنا.
            </p>

            <h2 class="text-2xl font-bold mb-4">المعلومات التي نجمعها</h2>
            <ul class="list-disc list-inside mb-4">
                <li>المعلومات التي تقدمها طواعية: مثل اسمك، بريدك الإلكتروني، ورقم هاتفك عند التسجيل أو تعبئة نموذج التواصل.</li>
                <li>المعلومات التقنية: مثل عنوان الـ IP الخاص بك، ونوع المتصفح، والصفحات التي تزورها.</li>
            </ul>

            <h2 class="text-2xl font-bold mb-4">كيفية استخدام المعلومات</h2>
            <p class="mb-4">
                نستخدم المعلومات التي نجمعها للأغراض التالية:
            </p>
            <ul class="list-disc list-inside mb-4">
                <li>تحسين تجربتك على الموقع وتقديم خدمات مخصصة.</li>
                <li>الرد على استفساراتك والتواصل معك بشأن خدماتنا.</li>
                <li>تحليل استخدام الموقع لتحسين أدائه.</li>
            </ul>

            <h2 class="text-2xl font-bold mb-4">مشاركة المعلومات</h2>
            <p class="mb-4">
                نحن لا نقوم ببيع أو مشاركة بياناتك الشخصية مع أطراف ثالثة إلا في الحالات التالية:
            </p>
            <ul class="list-disc list-inside mb-4">
                <li>إذا كانت المشاركة مطلوبة بموجب القانون.</li>
                <li>عند التعاون مع مزودي خدمات موثوقين يعملون نيابةً عنا لتحسين خدماتنا.</li>
            </ul>

            <h2 class="text-2xl font-bold mb-4">حماية البيانات</h2>
            <p class="mb-4">
                نحن نتخذ جميع التدابير الأمنية اللازمة لحماية بياناتك الشخصية من الوصول غير المصرح به أو التعديل أو الكشف أو الإتلاف.
            </p>

            <h2 class="text-2xl font-bold mb-4">التغييرات على سياسة الخصوصية</h2>
            <p class="mb-4">
                قد نقوم بتحديث سياسة الخصوصية من وقت لآخر. سنقوم بإعلامك بأي تغييرات هامة عبر نشر السياسة المحدثة على هذا الموقع.
            </p>

            <h2 class="text-2xl font-bold mb-4">التواصل معنا</h2>
            <p>
                إذا كان لديك أي استفسارات حول سياسة الخصوصية، يرجى التواصل معنا عبر:
                <a href="mailto:info@nefertitisolutions.com" class="text-blue-500 underline">info@nefertitisolutions.com</a>
            </p>
        </div>
    </div>
@endsection
