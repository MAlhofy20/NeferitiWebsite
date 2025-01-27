@extends('front.layout')
@section('head')
    @include('meta::manager', [
        'title' => $product->meta_title,
        'description' => Str::limit($product->meta_description, 160),
        'keywords' => $product->meta_keywords,
        'image' => asset($product->image),
        'canonical' => route('front.product', $product->slug),
    ])
@endsection

@section('content')
    <div class="main bg-[#101828] relative overflow-hidden">
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
        <div class="hero flex justify-center items-center flex-col pt-[140px] md:pt-[150px] text-center pb-[50px] px-[20px] "
            data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="300">
            <p class="wave2  text-[25px] font-bold  text-[#ffe9b7]"><span>نفرتيتي</span> <span>لحلول</span>
                <span>الاعمال</span>
            </p>
            <div class="title flex pt-3 justify-center items-center flex-col">
                <p class="text-[22px] md:text-[80px] text-white font-bold">{{ $product->name }}</p>
                <p
                    class="py-[20px] px-[20px] leading-[30px] max-w-[1000px]  md:leading-[37px] font-bold md:text-[20px] text-gray-500 ">
                    {!! breackableText($product->description) !!}
                </p>
            </div>
            <div>
                <a class="cursor-box not-allowed bg-gold-button rounded-[15px] text-white px-[50px] py-[10px] shadow-[0_0_3px_0_#0d0b0b]"
                    href="#contact-section">اطلبه الان</a>
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
                            class=" text-[20px] ms-1 font-medium text-white md:ms-2 dark:text-white">منتجاتنا</a>
                    </div>
                </li>

            </ol>
        </nav>
    </div>
    <div class="the-pahe bg-white relative overflow-hidden">
        @foreach ($product->productDetails as $detail)
            <div class="MissionTwo rounded-tl-[20px] w-[90%] my-[40px] mx-auto bg-black pb-[20px] rounded-[20px] flex  flex-wrap-reverse items-center justify-evenly"
                data-aos="fade-up" data-aos-easing="linear" data-aos-duration="300">
                <div class="for-you  text-white px-[40px] lg:py-[70px] rounded-[20px]" data-aos="zoom-in"
                    data-aos-easing="linear" data-aos-duration="300">
                    <div
                        class="font-[600] text-[19px] lg:text-[28px] py-[21px] leading-[25px] lg:leading-[44.8px] max-w-[500px] ">
                        {{ $detail->title }}</div>
                    <div class=" leading-[21px] lg:leading-[25.6px] max-w-[500px] ">{!! breackableText($detail->description) !!}</div>
                </div>
                <div class="w-[580px] p-[24px]">
                    <img data-aos="zoom-in" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="300"
                        src="{{ asset($detail->image) }}" class="w-full h-full rounded-[20px]" alt="">
                </div>
            </div>
    </div>
    @endforeach
    <div class="LASTMissionTwo h-[500px] rounded-tl-[20px] w-[90%] my-[40px] gap-[50px] mx-auto bg-black py-[20px] rounded-[20px] flex flex-col  items-center justify-center"
        data-aos="fade-up" data-aos-easing="linear" data-aos-duration="300">
        <div class="main flex-col justify-center items-center text-center px-[20px]">
            <div class="title font-bold text-[26px] md:text-[50px] text-[papayawhip] pb-[10px]">
                لماذا Nefertiti Solutions؟
            </div>
            <p class="font-400 text-white md:text-[20px] text-[17px] rounded-[30.24px] px-[35px] text-start">
                في
                <span class="font-bold text-gold-gradient">
                    Nefertiti Solutions
                </span>
                <br>
                <br>
                ⚡ نقدم حلولاً مرنة وتصاميم استثنائية تلبي احتياجاتك وتحول الزوار إلى عملاء فعليين.
                ابدأ مع Nefertiti Solutions وحقق نجاح مشروعك من خلال تخطيط مدروس وتسليم دقيق! 🚀
            </p>
        </div>
        <div class="chevrons  rounded-[50%] bg-white">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </div>
    </div>
@endsection

{{-- bg-[#1f1f1f] --}}
