@extends('front.layout')
@section('head')

@include('meta::manager', [
    'title' => 'مدونة نيفرتيتي - رؤى برمجية وأحدث التقنيات',
    'description' => 'تابع أحدث المقالات والنصائح حول البرمجة، تطوير التطبيقات، وتحسين أداء المشاريع التقنية.',
    'keywords' => 'مدونة برمجية, تطوير برمجيات, تصميم مواقع, تحسين الأداء, تقنيات حديثة',
    'image' => asset('dash/images/logo_with_bg.jpg'),
    'canonical' => url()->current()
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
        <div class="hero flex justify-center items-center flex-col pt-[140px] md:pt-[150px] text-center  px-[20px] "
            data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700">
            <p class="wave  text-[25px] font-bold  text-[#ffe9b7]"><span>نفرتيتي</span> <span>لحلول</span>
                <span>الاعمال</span>
            </p>
            <div class="title flex justify-center items-center flex-col">
                <p class="text-[30px] md:text-[80px] text-white font-bold">أحدث منشورات مدونتنا
                </p>
            </div>
            <div>


            </div>
        </div>
        <div style="box-shadow: 0px 0px 20px 13px #00000033;" class="the-pahe bg-white relative rounded-[20px] mx-[33px]">
            <div id="blogs" class="blogs p-[20px] ">
                <div class="tow-colmn flex mt-[50px]">
                    <div class="all w-full flex flex-wrap md:flex-nowrap justify-center gap-[20px]">
                        <div class="one gap-[20px] w-full justify-center flex flex-wrap">
                            @foreach ($blogs as $blog)
                            <div onclick="window.location.href='{{ route('front.blog.show', $blog->slug) }}'" class="boxes cursor-pointer md:w-[270px] w-full gap-[45px]">
                                <div
                                    class="imageCard  h-[192px] transform perspective-[1000px] hover:rotate-x-[10deg] hover:rotate-y-[10deg] transition duration-500">
                                    <img class= "origin-center transform hover:scale-110 transition duration-300"
                                        src="{{ asset($blog->image) }}" alt="">
                                </div>
                                <div class="date text-[#64607D]">
                                    <span>{{ $blog->created_at->format('d-m-Y') }}</span>
                                    <span>{{ $blog->product?->name }}</span>
                                </div>
                                <div class="tit max-w-[375px] font-[800] text-[20px] leading-[36px] py-[5px]">
                                    <a href="{{ route('front.blog', $blog->slug) }}">{{ $blog->title }}</a>
                                </div>
                                <div class="line-clamp-3">
                                    <p class="text-[#64607D] max-w-[375px] text-[400]  leading-[30px] mt-[10px]">
                                        {!! breackableText($blog->content) !!}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
