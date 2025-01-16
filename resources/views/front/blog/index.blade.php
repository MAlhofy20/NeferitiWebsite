@extends('front.layout')
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
                <div style="box-shadow: 0px 0px 20px 13px #00000033;" class="the-pahe bg-white relative rounded-[20px]">
                    <div  id="blogs" class="blogs p-[20px] ">
                        <div class="title gap-[10px] flex justify-center flex-wrap md:flex-nowrap md:justify-between pb-[50px] items-center">
                            <div class="ti text-[35px] md:text-[42px] md:font-[800] font-bold" data-aos="anim"
                                data-aos-easing="linear" data-aos-duration="500">أحدث منشورات مدونتنا</div>

                        </div>
                        <div class="tow-colmn flex ">
                            <div class="all flex flex-wrap md:flex-nowrap justify-center gap-[20px]">
                                <div class="one gap-[40px]  flex flex-col flex-wrap justify-center">
                                    <div class="flex flex-wrap  justify-center gap-[20px]">
                                        <div class="md:w-[270px] gap-[45px]">
                                            <div class="imageCard  transform perspective-[1000px] hover:rotate-x-[10deg] hover:rotate-y-[10deg] transition duration-500">
                                                <img class= "origin-center transform hover:scale-110 transition duration-300" src="{{ asset('frontend/images/blog1.png') }}" alt="">
                                            </div>
                                            <div class="date text-[#64607D]">
                                                <span>08-11-2021</span>
                                                <span>Category</span>
                                            </div>
                                            <div class="tit max-w-[375px] font-[800] text-[20px] leading-[36px] py-[5px]">
                                                <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                                            </div>
                                            <p class="text-[#64607D] max-w-[375px] text-[400] leading-[30px]">
                                                رحبت السيدة بالبركة التي التقت بها، ورحبت بالسيد الذي قام بتربيتها. ستة أيام من الفضول
                                                لضمان السرير ضروري.
                                            </p>
                                        </div>
                                        <div class="md:w-[270px] gap-[45px]">
                                            <div class="imageCard  transform perspective-[1000px] hover:rotate-x-[10deg] hover:rotate-y-[10deg] transition duration-500">
                                                <img class= "origin-center transform hover:scale-110 transition duration-300" src="{{ asset('frontend/images/blog1.png') }}" alt="">
                                            </div>
                                            <div class="date text-[#64607D]">
                                                <span>08-11-2021</span>
                                                <span>Category</span>
                                            </div>
                                            <div class="tit max-w-[375px] font-[800] text-[20px] leading-[36px] py-[5px]">
                                                <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                                            </div>
                                            <p class="text-[#64607D] max-w-[375px] text-[400] leading-[30px]">
                                                رحبت السيدة بالبركة التي التقت بها، ورحبت بالسيد الذي قام بتربيتها. ستة أيام من الفضول
                                                لضمان السرير ضروري.
                                            </p>
                                        </div>
                                        <div class="md:w-[270px] gap-[45px]">
                                            <div class="imageCard  transform perspective-[1000px] hover:rotate-x-[10deg] hover:rotate-y-[10deg] transition duration-500">
                                                <img class= "origin-center transform hover:scale-110 transition duration-300" src="{{ asset('frontend/images/blog1.png') }}" alt="">
                                            </div>
                                            <div class="date text-[#64607D]">
                                                <span>08-11-2021</span>
                                                <span>Category</span>
                                            </div>
                                            <div class="tit max-w-[375px] font-[800] text-[20px] leading-[36px] py-[5px]">
                                                <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                                            </div>
                                            <p class="text-[#64607D] max-w-[375px] text-[400] leading-[30px]">
                                                رحبت السيدة بالبركة التي التقت بها، ورحبت بالسيد الذي قام بتربيتها. ستة أيام من الفضول
                                                لضمان السرير ضروري.
                                            </p>
                                        </div>
                                        <div class="md:w-[270px] gap-[45px]">
                                            <div class="imageCard  transform perspective-[1000px] hover:rotate-x-[10deg] hover:rotate-y-[10deg] transition duration-500">
                                                <img class= "origin-center transform hover:scale-110 transition duration-300" src="{{ asset('frontend/images/blog1.png') }}" alt="">
                                            </div>
                                            <div class="date text-[#64607D]">
                                                <span>08-11-2021</span>
                                                <span>Category</span>
                                            </div>
                                            <div class="tit max-w-[375px] font-[800] text-[20px] leading-[36px] py-[5px]">
                                                <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                                            </div>
                                            <p class="text-[#64607D] max-w-[375px] text-[400] leading-[30px]">
                                                رحبت السيدة بالبركة التي التقت بها، ورحبت بالسيد الذي قام بتربيتها. ستة أيام من الفضول
                                                لضمان السرير ضروري.
                                            </p>
                                        </div>
                                        <div class="md:w-[270px] gap-[45px]">
                                            <div class="imageCard  transform perspective-[1000px] hover:rotate-x-[10deg] hover:rotate-y-[10deg] transition duration-500">
                                                <img class= "origin-center transform hover:scale-110 transition duration-300" src="{{ asset('frontend/images/blog1.png') }}" alt="">
                                            </div>
                                            <div class="date text-[#64607D]">
                                                <span>08-11-2021</span>
                                                <span>Category</span>
                                            </div>
                                            <div class="tit max-w-[375px] font-[800] text-[20px] leading-[36px] py-[5px]">
                                                <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                                            </div>
                                            <p class="text-[#64607D] max-w-[375px] text-[400] leading-[30px]">
                                                رحبت السيدة بالبركة التي التقت بها، ورحبت بالسيد الذي قام بتربيتها. ستة أيام من الفضول
                                                لضمان السرير ضروري.
                                            </p>
                                        </div>
                                        <div class="md:w-[270px] gap-[45px]">
                                            <div class="imageCard  transform perspective-[1000px] hover:rotate-x-[10deg] hover:rotate-y-[10deg] transition duration-500">
                                                <img class= "origin-center transform hover:scale-110 transition duration-300" src="{{ asset('frontend/images/blog1.png') }}" alt="">
                                            </div>
                                            <div class="date text-[#64607D]">
                                                <span>08-11-2021</span>
                                                <span>Category</span>
                                            </div>
                                            <div class="tit max-w-[375px] font-[800] text-[20px] leading-[36px] py-[5px]">
                                                <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                                            </div>
                                            <p class="text-[#64607D] max-w-[375px] text-[400] leading-[30px]">
                                                رحبت السيدة بالبركة التي التقت بها، ورحبت بالسيد الذي قام بتربيتها. ستة أيام من الفضول
                                                لضمان السرير ضروري.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pagination">
                                        <nav aria-label="Page navigation example">
                                            <ul class="inline-flex -space-x-px text-sm">
                                              <li>
                                                <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                              </li>
                                              <li>
                                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                              </li>
                                              <li>
                                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                              </li>
                                              <li>
                                                <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                              </li>
                                              <li>
                                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                                              </li>
                                              <li>
                                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                                              </li>
                                              <li>
                                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                              </li>
                                            </ul>
                                          </nav>
                                    </div>
                                </div>
                                <div class="two min-w-[400px] flex flex-col">
                                    <div class=" flex items-center gap-[19px] pb-[15px] border-b border-[#DEE1E6]">
                                        <div class="imageCard min-w-[110px]">
                                            <img class= "origin-center transform hover:scale-110 transition duration-300" src="{{ asset('frontend/images/blog2.png') }}" alt="">
                                        </div>
                                        <div>
                                            <div class="date text-[14px] text-[#64607D]">
                                                <span>08-11-2021</span>
                                                <span>Category</span>
                                            </div>
                                            <div class="tit max-w-[375px] font-[800] leading-[25px] py-[5px]">
                                                <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="  flex items-center gap-[19px] py-[15px]  border-b border-[#DEE1E6]">
                                        <div class="imageCard min-w-[110px]">
                                            <img class= "origin-center transform hover:scale-110 transition duration-300" src="{{ asset('frontend/images/blog4.png') }}" alt="">
                                        </div>
                                        <div>
                                            <div class="date text-[14px] text-[#64607D]">
                                                <span>08-11-2021</span>
                                                <span>Category</span>
                                            </div>
                                            <div class="tit max-w-[375px] font-[800]  leading-[25px] py-[5px]">
                                                <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" flex items-center gap-[19px] py-[15px]  border-b border-[#DEE1E6]">
                                        <div class="imageCard min-w-[110px]">
                                            <img class= "origin-center transform hover:scale-110 transition duration-300" src="{{ asset('frontend/images/blog5.png') }}" alt="">
                                        </div>
                                        <div>
                                            <div class="date text-[14px] text-[#64607D]">
                                                <span>08-11-2021</span>
                                                <span>Category</span>
                                            </div>
                                            <div class="tit max-w-[375px] font-[800] leading-[25px] py-[5px]">
                                                <a href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-[19px] py-[15px] border-b border-[#DEE1E6]">
                                        <div class="imageCard min-w-[110px]">
                                            <img src="{{ asset('frontend/images/blog6.png') }}" alt="">
                                        </div>
                                        <div>
                                            <div class="date text-[#64607D] text-[14px]">
                                                <span>08-11-2021</span>
                                                <span>Category</span>
                                            </div>
                                            <div class="tit max-w-[375px] font-[800] leading-[25px] py-[5px]">
                                                <a class= "origin-center transform hover:scale-110 transition duration-300" href="#">الاعتقاد بأن الإهمال هو البدل لوجود الرحيل.</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            <div>

            </div>
        </div>
    </div>
    </div>

@endsection
