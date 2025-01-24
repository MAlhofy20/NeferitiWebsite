@extends('front.layout')
@include('meta::manager', [
    'title' => 'أعمالنا البرمجية - مشاريع ناجحة وحلول تقنية مبتكرة',
    'description' => 'استعرض أمثلة من مشاريعنا البرمجية التي تضم تصميم المواقع، تطوير التطبيقات، وأنظمة متقدمة صنعت فرقًا حقيقيًا لعملائنا.',
    'keywords' => 'أعمال برمجية, تطوير مواقع, تصميم تطبيقات, حلول تقنية, مشاريع ناجحة, تطوير أنظمة',
    'image' => asset('dash/images/logo_with_bg.jpg'),
    'canonical' => url()->current()
])

@section('content')
    <div class="main bg-[#0f1521] pb-[50px] relative overflow-hidden">
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
        <div class="hero flex justify-center items-center flex-col pt-[100px] md:pt-[150px] text-center px-[20px] "
            data-aos="fade-down"  data-aos-easing="linear" data-aos-duration="400">
            <p class="wave  text-[25px] font-bold  text-[#ffe9b7]"><span>نفرتيتي</span> <span>لحلول</span>
                <span>الاعمال</span>
            </p>
            <div class="title flex justify-center items-center flex-col">
                <p class="text-[30px] md:text-[80px] text-white font-bold">أعمالنا السابقة - تنوع يُلهم الإبداع</p>
                <p class="py-[20px] max-w-[1000px] px-[50px] leading-[30px] md:leading-[37px] font-bold md:text-[20px] text-gray-500 ">
                    نفخر بتقديم تشكيلة متنوعة من الأعمال السابقة التي ساهمت في تطوير خبراتنا، مما يمكننا من تحقيق رؤيتك
                    بأفضل صورة. بفضل مشاريعنا الناجحة، نقدم حلولًا مبتكرة مصممة خصيصًا لتلبية احتياجاتك وتجاوز توقعاتك.
                </p>
            </div>
            <div>
                <a class="cursor-box not-allowed bg-gold-button rounded-[15px] text-white px-[50px] py-[10px] shadow-[0_0_3px_0_#0d0b0b]"
                    href="#contact-section">تواصل معنا الان</a>
            </div>
        </div>
    </div>
    <div  class="previous-work bg-[#0f1521] text-white p-[20px] md:p-[50px]">

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
