@extends('front.layout')
@section('head')

@include('meta::manager', [
    'title' => $blog->meta_title,
    'description' => Str::limit($blog->meta_description, 160),
    'keywords' => $blog->meta_keywords,
    'image' => asset($blog->image),
    'canonical' => route('front.blog.show', $blog->slug),
])
    @endsection

@section('content')
    <div class="main bg-[#07182F] pb-[50px] relative overflow-hidden">
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
        <div class="hero flex justify-center items-center flex-col pt-[100px] md:pt-[150px] text-center  px-[20px] "
            data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700">
            <p class="wave  text-[25px] font-bold  text-[#ffe9b7]"><span>نفرتيتي</span> <span>لحلول</span>
                <span>الاعمال</span>
            </p>
            <div class="title flex justify-center items-center flex-col">
                <p class="text-[30px] md:text-[80px] text-white font-bold">أحدث منشورات مدونتنا
                </p>
            </div>
        </div>
    </div>
    <div class="w-[90%] md:w-1/2 mx-auto py-10">
        <h1 class="text-4xl">{{ $blog->title }}</h1>
        <p>{{ $blog->preview }}</p>
        <img class="w-400 py-10" src="{{ asset($blog->image) }}" />

        {!! $blog->content !!}
    </div>

    <div class="LASTMissionTwo h-[500px] rounded-tl-[20px] w-[90%] my-[40px] gap-[50px] mx-auto bg-black py-[20px] rounded-[20px] flex flex-col  items-center justify-center"
        data-aos="fade-up" data-aos-easing="linear" data-aos-duration="300">
        <div class="main flex-col justify-center items-center text-center px-[20px]">
            <div class="title font-bold text-[30px] md:text-[50px] text-[papayawhip] pb-[10px]">
                جاهزون لتحويل رؤيتك إلى واقع
            </div>
            <p class="font-400 text-white text-[20px] rounded-[30.24px] px-[35px] text-center">
                ✨ لقد صممنا<span class="font-bold text-gold-gradient">
                    {{ $blog->product->name }}</span> خصيصًا لتلبية احتياجاتك وتحقيق أهدافك بأعلى معايير الجودة والإبداع.

                <br>
                <a class="underline" href="{{ route('front.product', $blog->product->slug) }}">
                    👉 اضغط هنا لاكتشاف التفاصيل!
                    </span>
                </a>
                <br>
                <br>
        </div>
        <div class="chevrons  rounded-[50%] bg-white">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </div>
    </div>
@endsection
