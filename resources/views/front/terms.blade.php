@extends('front.layout')
@section('content')
    <div class="main bg-[#07182F] relative overflow-hidden">
        <div class="absolute left-[7%] top-0 z-1 opacity-50 3xl:left-[19%]">
            <!-- SVG أو أي عنصر تصميمي آخر -->
        </div>
        <div class="hero flex justify-center items-center flex-col pt-[140px] md:pt-[150px] text-center px-[20px]"
            data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700">
            <p class="wave2 text-[25px] font-bold text-[#ffe9b7]">
                <span>نفرتيتي</span> <span>لحلول</span> <span>الأعمال</span>
            </p>
            <div class="title flex justify-center items-center flex-col">
                <p class="text-[30px] md:text-[80px] text-white font-bold">الشروط والأحكام</p>
            </div>
        </div>
        <nav class="flex self-start pr-[20px]" aria-label="Breadcrumb">
            <ol class="inline-flex  items-start space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="{{ route('front.home') }}"
                        class="text-[20px] inline-flex items-center   font-medium  text-gray-400 hover:text-white">
                        <svg class="w-4 h-6 me-2.5 mb-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
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
                        <a class=" text-[20px] ms-1 font-medium text-white md:ms-2 dark:text-white">الشروط والأحكام</a>
                    </div>
                </li>

            </ol>
        </nav>
    </div>

    <div class="w-[90%] md:w-3/4 mx-auto py-10">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">مقدمة</h2>
            <p class="mb-4">
                مرحبًا بكم في موقع "نفرتيتي لحلول الأعمال". باستخدامك لهذا الموقع، فإنك توافق على الالتزام بالشروط والأحكام
                التالية. إذا كنت لا توافق على أي من هذه الشروط، يُرجى عدم استخدام الموقع.
            </p>

            <h2 class="text-2xl font-bold mb-4">استخدام الموقع</h2>
            <p class="mb-4">
                يُسمح لك باستخدام هذا الموقع لأغراض قانونية فقط وبطريقة لا تنتهك حقوق أو تقيد استخدام الآخرين للموقع. يُحظر
                استخدام الموقع لنقل أو نشر أي مواد ضارة أو غير قانونية أو تهديدية أو تشهيرية أو مسيئة بأي شكل من الأشكال.
            </p>

            <h2 class="text-2xl font-bold mb-4">حقوق الملكية الفكرية</h2>
            <p class="mb-4">
                جميع المحتويات والمواد المتاحة على هذا الموقع، بما في ذلك النصوص والصور والشعارات والرسومات، هي ملك
                لـ"نفرتيتي لحلول الأعمال" ومحميّة بموجب قوانين حقوق النشر والعلامات التجارية المعمول بها. لا يجوز إعادة
                إنتاج أو توزيع أي جزء من المحتوى دون إذن كتابي مسبق.
            </p>

            <h2 class="text-2xl font-bold mb-4">الروابط الخارجية</h2>
            <p class="mb-4">
                قد يحتوي موقعنا على روابط لمواقع خارجية لا نتحكم فيها. نحن غير مسؤولين عن محتوى أو سياسات الخصوصية لتلك
                المواقع. يُنصح بمراجعة سياسات الخصوصية والشروط والأحكام الخاصة بأي موقع خارجي تزوره عبر روابط من موقعنا.
            </p>

            <h2 class="text-2xl font-bold mb-4">تعديلات على الشروط والأحكام</h2>
            <p class="mb-4">
                نحتفظ بالحق في تعديل هذه الشروط والأحكام في أي وقت دون إشعار مسبق. يُنصح بمراجعة هذه الصفحة دوريًا للتأكد من
                معرفتك بأي تغييرات. استمرار استخدامك للموقع بعد نشر التعديلات يعني قبولك للشروط المعدلة.
            </p>

            <h2 class="text-2xl font-bold mb-4">القانون الحاكم</h2>
            <p class="mb-4">
                تخضع هذه الشروط والأحكام وتُفسر وفقًا لقوانين جمهورية مصر العربية. أي نزاع ينشأ عن استخدام هذا الموقع يكون
                من اختصاص المحاكم المصرية.
            </p>

            <h2 class="text-2xl font-bold mb-4">اتصل بنا</h2>
            <p>
                إذا كانت لديك أي استفسارات أو تعليقات حول هذه الشروط والأحكام، يُرجى التواصل معنا عبر [معلومات الاتصال].
            </p>
        </div>
    </div>
@endsection
