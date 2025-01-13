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
                <span>الاعمال</span>
            </p>
            <div class="title">
                <p class="text-[30px] md:text-[80px] text-white font-bold">أعمالنا السابقة - تنوع يُلهم الإبداع</p>
                <p class="py-[20px] px-[50px] leading-[30px] md:leading-[37px] font-bold md:text-[20px] text-gray-500 ">
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
    <div class="previous-work bg-[#101828] text-white p-[20px] md:p-[50px]">

        <div class="previous flex gap-[32px] flex-wrap justify-center">
            @foreach ($projects as $project)
                <div class="cee  rounded-[24px] border-2 border-[#282828]" data-aos="zoom-in"
                    data-aos-easing="linear" data-aos-duration="500">
                <img class=" h-[300px] rounded-tl-[24px] rounded-tr-[24px]"
                        src="{{ asset($project->image) }}" alt="">
                    <div class="title font-[600] text-[28px] px-[15px] py-[10px]">{{ $project->name }}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
