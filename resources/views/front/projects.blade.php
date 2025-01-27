@extends('front.layout')
@section('head')

@include('meta::manager', [
    'title' => 'أعمالنا البرمجية - مشاريع ناجحة وحلول تقنية مبتكرة',
    'description' => 'استعرض أمثلة من مشاريعنا البرمجية التي تضم تصميم المواقع، تطوير التطبيقات، وأنظمة متقدمة صنعت فرقًا حقيقيًا لعملائنا.',
    'keywords' => 'أعمال برمجية, تطوير مواقع, تصميم تطبيقات, حلول تقنية, مشاريع ناجحة, تطوير أنظمة',
    'image' => asset('dash/images/logo_with_bg.jpg'),
    'canonical' => url()->current()
])
    @endsection
@section('content')
    <div class="main bg-[#0f1521]  relative overflow-hidden">
        <div class="absolute left-[7%] top-0 z-1 opacity-50 3xl:left-[19%]"><svg width="1237" height="405" viewBox="0 0 1237 405" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_f_1833_4737)">
                <ellipse cx="618.5" cy="-213" rx="268.5" ry="268" fill="#48DCFF">
                </ellipse>
            </g>
            <defs>
                <filter id="filter0_f_1833_4737" x="0" y="-831" width="1237" height="1236" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                    </feBlend>
                    <feGaussianBlur stdDeviation="175" result="effect1_foregroundBlur_1833_4737">
                    </feGaussianBlur>
                </filter>
            </defs>
        </svg></div>
        <div class="hero flex justify-center items-center flex-col pt-[140px]  md:pt-[150px] text-center px-[20px] "
            data-aos="fade-down"  data-aos-easing="linear" data-aos-duration="400">
            <p class="wave2  text-[25px] font-bold  text-[#ffe9b7]"><span>نفرتيتي</span> <span>لحلول</span>
                <span>الاعمال</span>
            </p>
            <div class="title flex justify-center items-center flex-col">
                <p class="text-[28px] md:text-[80px] text-white font-bold">أعمالنا السابقة - تنوع يُلهم الإبداع</p>
                <p class="py-[20px] max-w-[1000px] px-[20px] leading-[30px] md:leading-[37px] font-bold md:text-[20px] text-gray-500 ">
                    نفخر بتقديم تشكيلة متنوعة من الأعمال السابقة التي ساهمت في تطوير خبراتنا، مما يمكننا من تحقيق رؤيتك
                    بأفضل صورة. بفضل مشاريعنا الناجحة، نقدم حلولًا مبتكرة مصممة خصيصًا لتلبية احتياجاتك وتجاوز توقعاتك.
                </p>
            </div>
            <div class="pt-[15px] pb-[40px]">
                <a class="cursor-box not-allowed bg-gold-button rounded-[15px] text-white px-[50px] py-[10px] shadow-[0_0_3px_0_#0d0b0b]"
                    href="#contact-section">تواصل معنا الان</a>
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
                                class=" text-[20px] ms-1 font-medium text-white md:ms-2 dark:text-white">أعمالنا السابقة</a>
                        </div>
                    </li>

                </ol>
            </nav>
            </div>
    </div>
    <div  class="previous-work bg-[#0f1521] text-white px-[20px] pb-[40px]  md:px-[50px]">

        <div id="myElement" class="previous  flex gap-[32px] flex-wrap bg-white rounded-[40px] py-[50px] justify-center">
            @foreach ($projects as $project)
                <div class="cee  rounded-[24px] w-[400px] text-black  border-2 " data-aos="zoom-in"
                    data-aos-easing="linear" data-aos-duration="400">
                <img class=" h-[300px] rounded-tl-[24px] rounded-tr-[24px] w-full "
                        src="{{ asset($project->image) }}" alt="">
                    <div class="title font-[600] text-[28px] px-[15px] py-[10px]">{{ $project->name }}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
