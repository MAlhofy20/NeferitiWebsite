<div class = "flex justify-center">
    <div id="menu" class="active hidden lg:flex fixed z-[999999] ">
            <div class="logo ml-[10px]">
                <img class="rounded-[8px] w-[40px] h-[50px]" src="{{ asset('frontend/images/logo trans.png') }}" alt="">
            </div>
            <div class="content-menu lg:px-[30px]">
                <ul class="px-[10px] lg:gap-[50px] gap-[24px] flex justify-center items-center cursor-pointer">
                    <li class="font-bold text-[16px] leading-[18.2px] text-[#FFFFFF]"><a
                            href="{{ route('front.home') }}"><span>الرئيسية</span></a></li>
                            <li class="font-bold text-[13px] leading-[18.2px] text-[#FFFFFF]"><a
                                href="#about"><span>تعريف بنا</span></a></li>

                    <li class="font-bold text-[13px] leading-[18.2px] text-[#FFFFFF]"><a
                            href="#products"><span>المنتجات</span></a></li>
                    <li class="font-bold text-[13px] leading-[18.2px] text-[#FFFFFF]"><a
                            href="#projects"><span>المشاريع</span></a></li>
                    <li class="font-bold text-[13px] leading-[18.2px] text-[#FFFFFF]"><a
                            href="#blog"><span>المدونة</span></a></li>
                </ul>
            </div>
            <div
                class="start bg-[#FFFFFF] rounded-[12px] w-[116px] max-h-[36px] h-[36px] flex justify-center items-center">
                <a class="text-[13px] font-[500]" href="#">ابدأ من هنا</a>
            </div>
    </div>
</div>
<div class="icon-small   fixed flex z-[999999] left-[10%] top-[30px] text-white text-center  lg:hidden cursor-pointer">
    <i class="text-[#FDB931] text-[20px] relative fa-solid fa-bars"></i>
    <div class="dis  lg:hidden absolute left-[5px] last:left-[120px] transform -translate-x-[50%]   p-4 rounded-lg ">
        <ul style="backdrop-filter: brightness(0.7) blur(10px);" class=" absolute opacity-0 invisible transition-opacity duration-300  left-1/2 transform -translate-x-1/2 translate-y-3 text-center flex gap-y-[10px] flex-wrap p-[15px] gap-0 w-[250px] justify-center  items-center font-semibold rounded-[24px] ">
            <li class=" sparkle u-hover--sparkle w-1/2"><a class="rounded-[8px]  transition-colors  py-[6px] px-[12px]" href="{{ route('front.home') }}">الرئيسية</a></li>
            <li class="sparkle u-hover--sparkle w-1/2"><a class="rounded-[8px]  transition-colors  py-[6px] px-[12px]" href="#">تعريف بنا</a></li>
            <li class="sparkle u-hover--sparkle w-1/2"><a class="rounded-[8px]  transition-colors  py-[6px] px-[12px]" href="#">المنتجات</a></li>
            <li class="sparkle u-hover--sparkle w-1/2"><a class="rounded-[8px]  transition-colors  py-[6px] px-[12px]" href="#">المشاريع</a></li>
            <li class="sparkle u-hover--sparkle w-1/2"><a class="rounded-[8px]  transition-colors  py-[6px] px-[12px]" href="#">المدونة</a></li>
        </ul>
    </div>
</div>
