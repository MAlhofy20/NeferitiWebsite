@extends('front.layout')
@section('content')
<div class="main bg-[#101828] pb-[50px] relative overflow-hidden">
    <div class="flex justify-center items-center">
        <img class="rounded-[8px] w-full  absolute  right-0 top-0 opacity-10"
            src="{{ asset('frontend/images/dadad.jpg') }}" alt="">
    </div>
    <div class="hero flex justify-center items-center flex-col pt-[100px] md:pt-[150px] text-center pb-[50px] px-[20px] "
        data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700">
        <p class="wave  text-[25px] font-bold  text-[#ffe9b7]"><span>نفرتيتي</span> <span>لحلول</span>
            <span>الاعمال</span></p>
        <div class="title">
            <p class="text-[30px] md:text-[80px] text-white font-bold">{{ $product->name }}</p>
            <p class="py-[20px] px-[50px] leading-[30px] md:leading-[37px] font-bold md:text-[20px] text-gray-500 ">
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
        <div class="MissionTwo rounded-tl-[20px] bg-black py-[20px] rounded-bl-[20px] gap-[20px] rounded-tr-[20px] w-full flex  flex-wrap-reverse items-center justify-evenly" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000"> 
            <div class="for-you  text-white px-[40px] lg:py-[70px] rounded-tl-[20px] rounded-bl-[20px] rounded-tr-[20px]"
                data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="font-[600] text-[19px] lg:text-[28px] py-[21px] leading-[25px] lg:leading-[44.8px] max-w-[500px] ">{{ $detail->title }}</div>
                <div class=" leading-[21px] lg:leading-[25.6px] max-w-[500px] ">{!! breackableText($detail->description) !!}</div>
            </div>
            <div class="max-w-[580px]"><img data-aos="zoom-in" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" 
                src="{{ asset($detail->image) }}" class=" rounded-tl-[20px] rounded-bl-[20px] rounded-tr-[20px]" alt=""></div>
        </div>

        @endforeach
</div>
@endsection