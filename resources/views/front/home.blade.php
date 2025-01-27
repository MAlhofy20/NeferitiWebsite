@extends('front.layout')

@section('head')
@include('meta::manager', [
    'title' => 'Nefertiti Solutions - حلول برمجية متكاملة لتطوير أعمالك',
    'description' =>
        'في Nefertiti Solutions نقدم حلول برمجية مبتكرة وتصميمات مخصصة لتلبية احتياجات عملك، من تطوير المواقع إلى التطبيقات الذكية.',
    'keywords' => 'برمجة, تطوير مواقع, تصميم تطبيقات, حلول برمجية, شركات البرمجة, تطوير برمجي',
    'image' => asset('dash/images/logo_with_bg.jpg'),
    'canonical' => url()->current(),
])
@endsection
@section('content')
    <div class="main bg-[#101828] pb-[50px] relative overflow-hidden">
        <div class="flex page justify-center items-center"></div>
        <div class="hero flex justify-center items-center flex-col pt-[140px] md:pt-[150px] text-center pb-[50px] px-[20px] "
            data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="700">
            <p class="wave text-[25px] font-bold  text-[#ffe9b7]"><span>نفرتيتي</span> <span>لحلول</span>
                <span>الاعمال</span>
            </p>
            <div class="title">
                <p class="text-[30px] md:text-[80px] text-white font-bold">نصمم مواقع تُحدث فرقًا</p>
                <p class="py-[20px] px-[20px] leading-[30px] md:leading-[37px] font-bold md:text-[20px] text-gray-500 ">
                    من خلال نظرة تجمع بين خبرة المبرمجين ودقة المصممين وبُعد نظر خبراء التسويق،
                    <br>
                    نصنع لك نافذة تنقل أعمالك إلى بُعد آخر
                </p>
            </div>
            <div>
                <a class="cursor-box not-allowed bg-gold-button rounded-[15px] text-white px-[50px] py-[10px] shadow-[0_0_3px_0_#0d0b0b]"
                    href="#contact-section">تواصل معنا</a>
            </div>
        </div>
        <div class="icons md:pt-[50px] overflow-hidden md:w-[80%] mx-auto pb-[54px] ">
            <div class="title flex justify-center items-center text-white pb-[30px]" data-aos="fade-up"
                data-aos-easing="ease-in-sine" data-aos-duration="1000">
                موثوق به من قبل أكثر من 50 شركة
            </div>
            <div class="main-icon overflow-hidden w-full">
                <div class="iconimg flex gap-[45px]">
                    @php
                        $partners = \App\Models\Partner::all();
                    @endphp
                    @foreach ($partners as $partner)
                        <img loading="lazy" class=" rounded-[8px] w-[150px] h-[50px]" src="{{ asset($partner->image) }}"
                            alt="">
                    @endforeach
                </div>
            </div>
        </div>
        <div class="color w-full absolute h-[10%] bg-white md:-bottom-[35px]"></div>
    </div>
    <div class="the-pahe bg-white relative md:pt-[50px] overflow-hidden">
        <div class="about-us relative">
            <div class="main flex-col justify-center items-center text-center px-[20px] mb-10">
                <div id="about" class="title font-bold text-[30px] md:text-[50px] text-[#0B2131] pb-[10px]">
                    عن اختيار فريق Nefirtiti
                </div>
                <p class="font-400 text-[#394B58] text-[20px] rounded-[30.24px] px-[20px]">
                    في
                    <span class="font-bold text-gold-gradient">
                        Nefertiti Solutions
                    </span>
                    نمتلك فريقًا متخصصًا يسخّر أحدث التقنيات لإدارة مشاريعك بكفاءة عالية.
                    <br>
                    مع خطط مدروسة للتخطيط والتنفيذ، وضمان عمليات تسليم واختبار دقيقة تعكس احترافية عملنا
                </p>
            </div>
            <div class="mb-12 mx-auto w-64">
                <a class="cursor-box font-bold cards-gold-gradient not-allowed text-nowrap rounded-[15px] text-white px-[50px] py-[10px] "
                    href="#contact-section">اطلب استشارتك المجانية</a>
            </div>

        </div>
        <div id="ideas" class="home relative overflow-hidden bg-[#101828] text-white p-[20px] md:p-[50px]">
            <div class="main text-center flex gap-[10px] flex-col justify-center items-center" data-aos="fade-down-right"
                data-aos-easing="linear" data-aos-easing="ease-in-sine" data-aos-duration="500">
                <div class="title font-bold md:font-500 leading-[40px] text-[30px] md:text-[56px]">
                    رؤيتنا تتجاوز تقديم حلول تقليدية
                </div>
                <p class="font-[400] text-[20px] leading-[30px] text-center ">
                    في Nefertiti Solutions نسعى لنكون شريكك الحقيقي في عالم الإنترنت.
                    <hr>
                    نلتزم ببناء علاقة مستدامة معك في رحلتك نحو النجاح الرقمي؛ من خلال تقديم
                    <span class="font-bold text-gold-gradient">
                        حلول برمجية مصممة خصيصًا
                    </span>
                    لتلبية احتياجات منظومتك
                    مع دعم مستمر لضمان التطوير والصيانة
                </p>
            </div>
            <div class="flex gap-[20px] justify-center z-[2] relative items-center p-[20px] flex-wrap">
                <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] md:h-[180px] h-[140px]"
                    data-aos="zoom-in" data-aos-easing="linear" data-aos-easing="ease-in-sine" data-aos-duration="500">
                    <i class="mb-2 fa-solid text-6xl fa-laptop-code"></i>

                    <div class="font-[400] text-center md:text-2xl">
                        تصميم وبرمجة مواقع احترافية
                    </div>
                </div>
                <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] md:h-[180px] h-[140px]"
                    data-aos="zoom-in" data-aos-easing="linear" data-aos-easing="ease-in-sine" data-aos-duration="500">
                    <i class="mb-2 fa-solid text-6xl fa-mobile-screen-button"></i>
                    <div class="font-[400] text-center md:text-2xl">
                        تطوير تطبيقات عصرية ومميزة
                    </div>
                </div>
                <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] md:h-[180px] h-[140px]"
                    data-aos="zoom-in" data-aos-easing="linear" data-aos-easing="ease-in-sine" data-aos-duration="500">
                    <i class="mb-2 fa-brands text-6xl  fa-google"></i>
                    <div class="font-[400] text-center md:text-2xl">
                        تحسين ظهورك عبر محركات البحث
                    </div>
                </div>
                <div class="boxColor flex flex-col text-center justify-center p-[15px]  rounded-[20px] items-center w-[264px] md:h-[180px] h-[140px]"
                    data-aos="zoom-in" data-aos-easing="linear" data-aos-easing="ease-in-sine" data-aos-duration="500">
                    <i class="mb-2 fa-solid text-6xl fa-database"></i>
                    <div class="font-[400] text-center md:text-2xl">
                        إدارة استضافاتك باحترافية وأمان
                    </div>
                </div>
            </div>
            <div class="mb-12 mt-[35px] mx-auto w-64">
                <a class="cursor-box not-allowed bg-gold-button text-nowrap rounded-[15px] text-white px-[50px] py-[10px] shadow-[0_0_3px_0_#0d0b0b]"
                    href="#contact-section">ابدأ معنا الان</a>
            </div>

            <div class="colr absolute top-0 z-[1] opacity-[0.1] w-[300px] right-0"> <img
                    src="{{ asset('frontend/images/menu_logo.webp') }}" alt=""></div>
        </div>
        <div id="products" class="products p-[20px] md:p-[50px] bg-black text-white">
            <div class="main flex flex-col justify-center items-center text-center" data-aos="zoom-in-up"
                data-aos-easing="ease-in-sine" data-aos-duration="400">
                <div class="title font-bold md:font-500 text-[35px] md:text-[56px] pb-[20px]"> منتجات فريق Nefertiti
                </div>
                <p class="font-[400] text-[20px] leading-[30px] px[4px]">
                    في Nefertiti Solutions قمنا بصناعة وتقديم
                    منتجات متطورة صنعت خصيصًا لترك بصمة فريدة في احتياجات السوق .
                    <hr>
                    سعيًا منا في دعم توجهات المسئولين
                    نحو بيئات عمل رقمية متطورة
                    <span class="pt-[10px] font-bold text-gold-gradient">
                        توافق رؤية 2030
                    </span>
                </p>
            </div>
            <div class="accordon py-[50px] gap-[25px] flex flex-col">
                @foreach ($products as $product)
                    <div class="accor flex justify-center items-center">
                        <div class="min flex justify-center gap-[15px] cursor-pointer">
                            <div class="image" data-aos="zoom-in" data-aos-easing="linear"
                                data-aos-easing="ease-in-sine" data-aos-duration="500">
                                <img loading="lazy" class="rounded-[18px] w-[140px] h-[40px] transition-all duration-300 ease-in-out"
                                    src="{{ asset($product->image) }}" alt="">
                            </div>
                            <div class="flex flex-col gap-[5px]">
                                <div class="tot gap-3 flex justify-between items-center">
                                    <div class="tit font-bold md:font-[600] text-[20px] md:text-[28px]" data-aos="fade-up"
                                        data-aos-easing="linear" data-aos-easing="ease-in-sine" data-aos-duration="500">
                                        {{ $product->name }}</div>
                                    <div class="icon" data-aos="fade-right" data-aos-easing="linear"
                                        data-aos-easing="ease-in-sine" data-aos-duration="500">
                                        <i class="duration-300 ease-in-out rotate-180 fa-solid fa-arrow-down"></i>
                                    </div>
                                </div>
                                <p
                                    class="pl-[40px] md:pl-[50px] transition-all text-[14px] md:text-[16px]  w-[272px] md:min-w-[700px] duration-300 ease-in-out overflow-hidden opacity-0 max-h-0">
                                    {!! breackableText($product->description) !!}
                                </p>
                                <div
                                    class="flex   all overflow-hidden transition-all duration-300 ease-in-out opacity-0 max-h-0 gap-[10px] pr-[10px]">
                                    <a class=" w-[125px] cards-gold-gradient cursor-box md:w-[160px] h-[30px] transition-all duration-300 ease-in-out not-allowed  rounded-[15px] text-white  shadow-[0_0_3px_0_#0d0b0b]"
                                        href="{{ route('front.product', $product->slug) }}">اعرف اكتر</a>
                                    <a class="cursor-box w-[125px] h-[30px] md:w-[160px] transition-all duration-300 ease-in-out not-allowed bg-gold-button rounded-[15px] text-white  shadow-[0_0_3px_0_#0d0b0b]"
                                        href="#">تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="projects" class="previous-work bg-[#101828] text-white p-[20px] md:p-[50px]">
            <div class="title flex items-center pb-[20px] pr-[20px] md:pr-[32px] gap-[10px]" data-aos="zoom-in"
                data-aos-easing="linear" data-aos-duration="400" data-aos-duration="500">
                <div class="font-[600] text-[22px]">أعمالنا السابقة</div>
                <i class="fa-solid fa-turn-down"></i>
            </div>
            <div class="previous flex gap-[32px] flex-wrap justify-center">
                @foreach ($projects as $project)
                    <div class="cee w-[400px]  rounded-[24px] border-2 border-[#282828]" data-aos="zoom-in"
                        data-aos-easing="linear" data-aos-duration="500">
                        <img loading="lazy" class=" h-[300px]  rounded-tl-[24px] rounded-tr-[24px] w-full"
                            src="{{ asset($project->image) }}" alt="">
                        <div class="title font-[600] text-[28px] px-[15px] py-[10px]">{{ $project->name }}</div>
                    </div>
                @endforeach
            </div>
            <div class="allVeow flex justify-center items-center pt-[50px]" data-aos="anim" data-aos-easing="linear"
                data-aos-duration="400">
                <div
                    class="link-3 gap-5 flex justify-center items-center  p-[10px_8px] w-[663px] rounded-2xl cursor-pointer bg-[#0000001c] border border-[rgba(255,255,255,0.3)] shadow-[0_4px_6px_rgb(0,0,0)]">
                    <a href="{{ route('front.projects') }}">جميع الأعمال السابقه </a>
                    <i class="fa-solid fa-arrow-trend-down"></i>


                </div>
            </div>
        </div>
        <div id="blogs" class="blogs p-[20px] ">
            <div
                class="title gap-[10px] flex justify-center flex-wrap md:flex-nowrap md:justify-between pb-[50px] pr-[50px] items-center">
                <div class="ti text-[35px] md:text-[42px] md:font-[800] font-bold">أحدث المقالات على مدونتنا                </div>
            </div>
            <div class="all flex justify-center flex-wrap gap-[30px]">
                <div class="one flex  gap-[30px] flex-wrap justify-center">
                    @foreach ($blogs->take(2) as $blog)
                        <div onclick="window.location.href='{{ route('front.blog.show', $blog->slug) }}'"
                            class="boxes cursor-pointer">
                            <div class="imageCard  md:w-[380px] md:h-[270px] w-[330px] h-[220px] transform perspective-[1000px] hover:rotate-x-[10deg] hover:rotate-y-[10deg] transition duration-300">
                                <img loading="lazy" class= "origin-center transform hover:scale-110 transition duration-300"
                                    src="{{ asset($blog->image) }}" alt="">
                            </div>
                            <div class="date text-[#64607D] pt-1.5">
                                <span>{{ $blog->created_at->format('d-m-Y') }}</span>
                                <span>{{ $blog->product?->name }}</span>
                            </div>
                            <div class="tit font-[800] w-fit max-w-[380px] text-[20px] md:leading-[36px] leading-[28px] py-[5px]">
                                <a href="{{ route('front.blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                            </div>
                            <div class="line-clamp-3 max-w-[380px]">
                                <p class="text-[#64607D]  font-[400]  md:leading-[30px] leading-[28px] mt-[5px]">
                                    {{ $blog->preview }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="two w-[390px] flex flex-col gap-5 ">
                    @foreach ($blogs->skip(2) as $blog)
                        <div onclick="window.location.href='{{ route('front.blog.show', $blog->slug) }}'"
                            class="boxes cursor-pointer flex gap-5 border-b-2 border-[#DEE1E6] pb-2.5">
                            <div
                                class="imageCard h-[80px] w-[167px] transform perspective-[1000px] hover:rotate-x-[10deg] hover:rotate-y-[10deg] transition duration-300">
                                <img loading="lazy" class= "origin-center transform hover:scale-110 transition duration-300"
                                    src="{{ asset($blog->image) }}" alt="">
                            </div>
                            <div>
                                <div class="date text-[#64607D] pt-1.5">
                                    <span>{{ $blog->created_at->format('d-m-Y') }}</span>
                                    <span>{{ $blog->product?->name }}</span>
                                </div>
                                <div class="tit w-fit font-[800] text-[18px] md:leading-[30px] leading-[25px] ">
                                    <a href="{{ route('front.blog.show', $blog->slug) }}">{{ $blog->title }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
            <div class="flex justify-center items-center pt-12">
                <div
                    class="link15 bg-[#097aa5] p-[15px] rounded-[10px] text-white no-underline transition duration-300 shadow-[rgba(0,0,0,0.5)_-5px_5px_5px] hover:shadow-none">
                    <a class=" " href="{{ route('front.blog') }}">شاهد جميع المقالات</a>
                </div>
            </div>
        </div>
        <div id="Here" class="Here-is-how bg-[#E3F8F8] p-[20px] md:px-[100px] md:py-[50px]">
            <div class="all">
                <div class="title text-[30px] md:text-[60px]   flex justify-center items-center text-center flex-col"
                    data-aos="anim" data-aos-easing="linear" data-aos-duration="300">
                    <div class="md:font-[700] font-bold wave2 pb-3 text-[#2E2F35]">
                        إطلاق سريع. نتائج مثالية.
                    </div>
                    <span class="font-[400] text-[#2E2F35]">إليك الطريقة.</span>
                </div>
                <div class="here ">
                    <div class="min activeTwo py-[15px]" data-aos="fade-right" data-aos-easing="linear"
                        data-aos-duration="300">
                        <div class="tit text-[30px] md:text-[36px] font-[700] text-[#2E2F3566] pr-[50px] cursor-pointer">
                            فهم وتحليل</div>
                        <p class="text-[20px] leading-[34px] font-[500] pr-[50px] max-w-[400px]">
                            إجابتك تبدأ هنا. نجتمع لفهم فكرتك بدقة ونتعمق في احتياجات مشروعك، لنساعدك في تطوير رؤية مبتكرة
                            تخدم أهدافك وتحقق طموحاتك.

                        </p>
                    </div>
                    <div class="min py-[15px]" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400">
                        <div class="tit text-[30px] md:text-[36px] text-[#2E2F3566] font-[700] pr-[50px] cursor-pointer">
                            التخطيط والتنفيذ</div>
                        <p class="text-[20px] leading-[34px] font-[500] pr-[50px] max-w-[400px]">
                            نقسم المشروع إلى مراحل واضحة. نتفق على ما سيتم إنجازه في كل خطوة، مع ضمان الالتزام بالجودة
                            والمواعيد المحددة.
                        </p>
                    </div>
                    <div class="min  py-[15px]" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                        <div class="tit text-[30px] md:text-[36px] font-[700] text-[#2E2F3566] pr-[50px] cursor-pointer">
                            تسليم واختبار</div>
                        <p class="text-[20px] leading-[34px] font-[500] pr-[50px] max-w-[400px]">
                            في نهاية كل مرحلة، نقوم بالتسليم التدريجي مع اختبار شامل لكل جزء. نعمل معك لضمان أن كل شيء يعمل
                            كما ينبغي قبل الانتقال للخطوة التالية.
                        </p>
                    </div>
                    <div class="min py-[15px]" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                        <div class="tit text-[30px] md:text-[36px] font-[700] text-[#2E2F3566] pr-[50px] cursor-pointer">
                            دعم مستمر</div>
                        <p class="text-[20px] leading-[34px] font-[500] pr-[50px] max-w-[400px] ">
                            رحلتك معنا لا تنتهي بالتسليم. نحن هنا دائمًا للتواصل السريع، لحل أي مشكلات أو تنفيذ أي تطويرات
                            تضيف قيمة إلى مشروعك.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="clients" class="clients bg-[#101828] text-white">
            <div class="title flex flex-col justify-center gap-[20px] items-center pt-[50px]">
                <div class="tit font-bold max-w-[600px] text-[22px] md:text-[33px] px-[20px] text-center" data-aos="anim"
                    data-aos-easing="linear" data-aos-duration="400">
                    انضم إلى مجتمعنا واستفد من حلول مبتكرة تدعم نجاح أعمالك
                </div>
                <div class="link-2 flex gap-[10px] items-center" data-aos="anim" data-aos-easing="linear"
                    data-aos-duration="400">
                    <a class="text-[22px] font-bold font-sans" href="#">قصص نجاح مع عملائنا</a>
                    <i class="fa-solid fa-turn-down"></i>
                </div>
            </div>
            <div class="Opinions overflow-hidden transition-translate duration-500 pr-[20px] ">
                <div class="all md:py-[65px] py-[40px] bg-[#101828] flex gap-[24px] transition-translate duration-500 ">

                    @foreach ($testimonials as $testimonial)
                        <div
                            class="boxOpinions flex-shrink-0 bg-[#1C1C1E] p-[22px] max-h-[350px] max-w-[1500px] flex  w-[390px] rounded-[20px] justify-center gap-[30px]">
                            <i class="text-[#FDB931] text-[33px] fa-solid fa-quote-right"></i>
                            <div class="w-[290px] h-[280px] flex flex-col justify-between items-stretch">
                                <div class="prag max-w-[370px] text-[28px] leading-[32.44px] font-[400]">
                                    {!! breackableText($testimonial->description) !!}
                                </div>
                                <div class="prerson flex items-center gap-[20px] pt-[30px]">
                                    <span class="h-[3px] w-[60px] bg-white block"></span>
                                    <span class="font-[700]">{{ $testimonial->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
