<div class = "flex justify-center">
    <div id="menu" class="active hidden bg-white shadow-lg lg:flex fixed z-[999999] ">
        <div class="logo ml-[10px]">
            <source srcset="image.webp" type="image/webp">

            <img onclick="window.location.href='{{ route('front.home') }}'"
                class="w-[110px] h-[45px]"
                src="{{ asset('frontend/images/LOGO (2).png') }}" alt="">
        </div>
        <div class="content-menu lg:px-[30px]">
            <ul class="px-[10px] lg:gap-[50px] gap-[24px] flex justify-center items-center cursor-pointer">
                <li class="font-bold  leading-[18.2px] "><a
                        href="{{ route('front.home') }}"><span>الرئيسية</span></a></li>
                <li class="font-bold  leading-[18.2px] "><a role="button"
                        onclick="goToSection('about')"><span>
                            من نحن
                        </span></a></li>
                <li class="font-bold  leading-[18.2px] "><a role="button"
                        onclick="goToSection('products')"><span>منتجاتنا</span></a></li>
                <li class="font-bold  leading-[18.2px] "><a role="button"
                        onclick="goToSection('projects')"><span>مشاريعنا</span></a></li>
                <li class="font-bold  leading-[18.2px] "><a role="button"
                        onclick="goToSection('blogs')"><span>المدونة</span></a></li>
            </ul>
        </div>
        <div class="start bg-[#014efe] shadow-[0_1px_4px_rgba(9,39,83,0.12)] border border-[#7b8da3]  rounded-[12px] w-[116px] max-h-[36px] h-[36px] text-white flex justify-center items-center">
            <a class="text-[13px]  font-[500]" href="#contact" onclick="trackAction('زر تواصل معنا - منيو')">
                تواصل معنا
            </a>
        </div>
    </div>
</div>
<div
    class="icon-small fixed z-[999999]  top-[30px] text-white text-center lg:hidden bg-transparent w-[90%] justify-between

    flex items-center mx-auto translate-x-[5%] left-0 backdrop-brightness-75 backdrop-blur-lg px-[20px] py-[10px] rounded-lg">
    <div class="logo ml-[10px]">
        <source srcset="image.webp" type="image/webp">
        <img loading="lazy" onclick="window.location.href='{{ route('front.home') }}'"
            class="rounded-[8px] w-[150px] h-[60px] "
            src="{{ asset('frontend/images/LOGO (2).png') }}" alt="">
    </div>
    <i class="text-[#fde755] text-[20px] relative fa-solid fa-bars cursor-pointer"></i>
    <ul
        class=" absolute left-[125px] top-[62px] opacity-0 invisible transition-opacity duration-300  transform -translate-x-1/2 translate-y-3
            text-center flex gap-y-[10px] flex-wrap p-[15px] gap-0 bg-black w-[250px] justify-center  items-center font-semibold rounded-[24px] ">
        <li  class="sparkle u-hover--sparkle w-1/2">
            <a class="rounded-[8px]  transition-colors  py-[6px] px-[12px]"
                href="{{ route('front.home') }}">الرئيسية</a>
        </li>
        <li onclick="goToSection('about')" class="sparkle u-hover--sparkle w-1/2"><a class="rounded-[8px]  transition-colors  py-[6px] px-[12px]"
        >تعريف بنا</a></li>
        <li onclick="goToSection('products')" class="sparkle u-hover--sparkle w-1/2"><a class="rounded-[8px]  transition-colors  py-[6px] px-[12px]"
                >المنتجات</a></li>
        <li onclick="goToSection('projects')" class="sparkle u-hover--sparkle w-1/2"><a class="rounded-[8px]  transition-colors  py-[6px] px-[12px]"
                >المشاريع</a></li>
        <li onclick="goToSection('blogs')" class="sparkle u-hover--sparkle w-1/2"><a class="rounded-[8px]  transition-colors  py-[6px] px-[12px]"
                >المدونة</a></li>
    </ul>

</div>
