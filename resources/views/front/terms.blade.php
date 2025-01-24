@extends('front.layout')
@section('content')
    <div class="main bg-[#07182F] pb-[50px] relative overflow-hidden">
        <div class="absolute left-[7%] top-0 z-1 opacity-50 3xl:left-[19%]">
            <!-- SVG أو أي عنصر تصميمي آخر -->
        </div>
        <div class="hero flex justify-center items-center flex-col pt-[100px] md:pt-[150px] text-center px-[20px]"
            data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700">
            <p class="wave text-[25px] font-bold text-[#ffe9b7]">
                <span>نفرتيتي</span> <span>لحلول</span> <span>الأعمال</span>
            </p>
            <div class="title flex justify-center items-center flex-col">
                <p class="text-[30px] md:text-[80px] text-white font-bold">الشروط والأحكام</p>
            </div>
        </div>
    </div>

    <div class="w-[90%] md:w-3/4 mx-auto py-10">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">مقدمة</h2>
            <p class="mb-4">
                مرحبًا بكم في موقع "نفرتيتي لحلول الأعمال". باستخدامك لهذا الموقع، فإنك توافق على الالتزام بالشروط والأحكام التالية. إذا كنت لا توافق على أي من هذه الشروط، يُرجى عدم استخدام الموقع.
            </p>

            <h2 class="text-2xl font-bold mb-4">استخدام الموقع</h2>
            <p class="mb-4">
                يُسمح لك باستخدام هذا الموقع لأغراض قانونية فقط وبطريقة لا تنتهك حقوق أو تقيد استخدام الآخرين للموقع. يُحظر استخدام الموقع لنقل أو نشر أي مواد ضارة أو غير قانونية أو تهديدية أو تشهيرية أو مسيئة بأي شكل من الأشكال.
            </p>

            <h2 class="text-2xl font-bold mb-4">حقوق الملكية الفكرية</h2>
            <p class="mb-4">
                جميع المحتويات والمواد المتاحة على هذا الموقع، بما في ذلك النصوص والصور والشعارات والرسومات، هي ملك لـ"نفرتيتي لحلول الأعمال" ومحميّة بموجب قوانين حقوق النشر والعلامات التجارية المعمول بها. لا يجوز إعادة إنتاج أو توزيع أي جزء من المحتوى دون إذن كتابي مسبق.
            </p>

            <h2 class="text-2xl font-bold mb-4">الروابط الخارجية</h2>
            <p class="mb-4">
                قد يحتوي موقعنا على روابط لمواقع خارجية لا نتحكم فيها. نحن غير مسؤولين عن محتوى أو سياسات الخصوصية لتلك المواقع. يُنصح بمراجعة سياسات الخصوصية والشروط والأحكام الخاصة بأي موقع خارجي تزوره عبر روابط من موقعنا.
            </p>

            <h2 class="text-2xl font-bold mb-4">تعديلات على الشروط والأحكام</h2>
            <p class="mb-4">
                نحتفظ بالحق في تعديل هذه الشروط والأحكام في أي وقت دون إشعار مسبق. يُنصح بمراجعة هذه الصفحة دوريًا للتأكد من معرفتك بأي تغييرات. استمرار استخدامك للموقع بعد نشر التعديلات يعني قبولك للشروط المعدلة.
            </p>

            <h2 class="text-2xl font-bold mb-4">القانون الحاكم</h2>
            <p class="mb-4">
                تخضع هذه الشروط والأحكام وتُفسر وفقًا لقوانين جمهورية مصر العربية. أي نزاع ينشأ عن استخدام هذا الموقع يكون من اختصاص المحاكم المصرية.
            </p>

            <h2 class="text-2xl font-bold mb-4">اتصل بنا</h2>
            <p>
                إذا كانت لديك أي استفسارات أو تعليقات حول هذه الشروط والأحكام، يُرجى التواصل معنا عبر [معلومات الاتصال].
            </p>
        </div>
    </div>

@endsection
