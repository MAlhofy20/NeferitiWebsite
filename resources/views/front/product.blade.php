@extends('front.layout')
@section('content')
<div class="main bg-[#101828] pb-[50px] relative overflow-hidden">
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
    <div class="hero flex justify-center items-center flex-col pt-[100px] md:pt-[150px] text-center pb-[50px] px-[20px] "
        data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700">
        <p class="wave  text-[25px] font-bold  text-[#ffe9b7]"><span>نفرتيتي</span> <span>لحلول</span>
            <span>الاعمال</span></p>
        <div class="title flex justify-center items-center flex-col">
            <p class="text-[30px] md:text-[80px] text-white font-bold">{{ $product->name }}</p>
            <p class="py-[20px] px-[50px] leading-[30px] max-w-[1000px]  md:leading-[37px] font-bold md:text-[20px] text-gray-500 ">
                {!! breackableText($product->description) !!}
            </p>
        </div>
        <div>
            <a class="cursor-box not-allowed bg-gold-button rounded-[15px] text-white px-[50px] py-[10px] shadow-[0_0_3px_0_#0d0b0b]"
                href="#contact-section">اطلبه الان</a>
        </div>
    </div>
</div>
</div>

    <div class="the-pahe bg-white relative overflow-hidden">
        @foreach ($product->productDetails as $detail)
        <div class="MissionTwo rounded-tl-[20px] w-[90%] my-[40px] mx-auto bg-black py-[20px] rounded-[20px] flex  flex-wrap-reverse items-center justify-evenly" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
            <div class="for-you  text-white px-[40px] lg:py-[70px] rounded-[20px]
                data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="font-[600] text-[19px] lg:text-[28px] py-[21px] leading-[25px] lg:leading-[44.8px] max-w-[500px] ">{{ $detail->title }}</div>
                <div class=" leading-[21px] lg:leading-[25.6px] max-w-[500px] ">{!! breackableText($detail->description) !!}</div>
            </div>
            <div class="max-w-[580px]"><img data-aos="zoom-in" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000"
                src="{{ asset($detail->image) }}" class="h-[450px] rounded-[20px]" alt=""></div>
        </div>

        @endforeach
</div>
@endsection
