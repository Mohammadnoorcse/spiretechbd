@extends('masterlayout')
@section('title', 'home')


@section('content')

    <section class="w-full">
        <div class="relative">
            <img src="{{ asset('assets/SP-1.jpg') }}" alt="" class="w-full ">
            <div class="container mx-auto px-4 absolute sm:top-[10rem] top-[5rem]  flex flex-col sm:gap-4 gap-2">
                <p class="sm:text-base text-[12px] font-medium text-white animate__animated animate__backInDown">Simplifying
                    Complexity, One Solution at a Time</p>
                <h2 class="sm:text-5xl text-base font-bold text-white animate__animated animate__fadeInDown">Spire Technology
                </h2>
                <p class="sm:text-base text-[12px] font-medium text-white animate__animated animate__fadeInDown">We offer
                    high quality technical services & It Products, digital<br>
                    transformation for business excellence, driving innovation in business <br>
                    development and give the best solution.</p>
                <button class="w-[8rem] px-2 py-1 bg-[#BF552E] text-white rounded animate__animated animate__flipInX">Learn
                    More</button>

            </div>
        </div>

    </section>

    <section class="w-full bg-[#F8F8F8]">
        <div class="container mx-auto px-4 grid md:grid-cols-4 grid-cols-2 gap-4 py-8">
            <div class="flex justify-center items-center">
                <img src="{{ asset('assets/bussiness.png') }}" alt="Logo"
                    class="opacity-50 hover:opacity-100 h-16 cursor-pointer">
            </div>
            <div class="flex justify-center items-center">
                <img src="{{ asset('assets/bussiness-1.png') }}" alt="Logo"
                    class="opacity-50 hover:opacity-100 h-16 cursor-pointer">
            </div>
            <div class="flex justify-center items-center">
                <img src="{{ asset('assets/bussiness-2.png') }}" alt="Logo"
                    class="opacity-50 hover:opacity-100 h-16 cursor-pointer">
            </div>
            <div class="flex justify-center items-center">
                <img src="{{ asset('assets/bussiness-3.png') }}" alt="Logo"
                    class="opacity-50 hover:opacity-100 h-16 cursor-pointer">
            </div>



        </div>

    </section>

    <section class="w-full">
        <div class="container mx-auto px-4 flex lg:flex-row flex-col gap-4 py-8">
            {{-- left side --}}
            <div class="lg:w-1/2 w-full flex flex-col gap-2">
                <span class="font-bold text-[#531954] uppercase mt-4">About US</span>
                <h2 class="text-4xl font-bold">Spire Technology: Works for your business Growth</h2>
                <p class="text-[#6d6d6d] text-justify">We are  Spire Technology, a complete team based on Bangladesh working
                    together as a Tech & IT Solution online platform. We are building tech bridge with Web Development,
                    Software Development, Mobile App Development, E-Commerce Solution, Graphics Design, SEO & Digital
                    Marketing Area for everyone, everywhere with honesty, innovation, and high quality as the core of our
                    operations.</p>

            </div>
            {{-- right side --}}
            <div class="lg:w-1/2 w-full">

                <img src="{{ asset('assets/thirdsection.jpg') }}" alt="Logo" class="">

            </div>

        </div>

    </section>

    <section class="w-full bg-[#531954] py-8">
        <div class="container mx-auto px-4 ">
            <div class="flex flex-col gap-2 justify-center items-center">
                <span class="text-white">Why Choose Us</span>
                <h2 class="text-white text-4xl font-bold">For Your Digital Growth</h2>
                <h2 class="text-white text-4xl font-bold">Why We’re the Right Choice</h2>

            </div>

            <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-4 mt-[5rem]">
                <div
                    class="group flex flex-col h-[25rem] gap-4 p-8 bg-[#841A6A] relative transition-colors duration-300 hover:bg-white">

                    <!-- Main Heading -->
                    <span class="text-xl font-bold text-white transition-colors duration-300 group-hover:text-black">
                        Comprehensive Services
                    </span>

                    <!-- Paragraph -->
                    <p class="text-[#aeaacb] leading-7">
                        We provide a full range of web development, software development, app development,
                        e-commerce solutions, SEO, and digital marketing services as per your request
                    </p>

                     <span class="mt-4 flex gap-1 items-center text-[#f26822] text-base font-medium"><i class="fa-solid fa-arrow-right"></i>LEARN MORE</span>

                    <!-- Number -->
                    <span class="text-[#812D834D] absolute top-[-2.5rem] left-0 text-[100px] font-bold">
                        01
                    </span>

                    <!-- Icon Box -->
                    <div
                        class="w-[4.5rem] h-[4.5rem] absolute right-0 bottom-0 rounded-tl-full bg-[#332d5f] transition-colors duration-300 group-hover:bg-[#F26822] flex items-center justify-center">
                        <i class="fa-solid fa-gear text-2xl text-white"></i>

                    </div>

                </div>
                <div
                    class="group flex flex-col h-[25rem] gap-4 p-8 bg-[#332d5f] relative transition-colors duration-300 hover:bg-white">

                    <!-- Main Heading -->
                    <span class="text-xl font-bold text-white transition-colors duration-300 group-hover:text-black">
                        Expert Team
                    </span>

                    <!-- Paragraph -->
                    <p class="text-[#aeaacb] leading-7">
                       Dealwith experts,: Experience and creativity complement each other in every project we undertake, resulting in a solution that is not only creative but also sturdy, reliable, and effective.
                    </p>

                    <span class="mt-4 flex gap-1 items-center text-[#f26822] text-base font-medium"><i class="fa-solid fa-arrow-right"></i>LEARN MORE</span>

                    <!-- Number -->
                    <span class="text-[#812D834D] absolute top-[-2.5rem] left-0 text-[100px] font-bold">
                        02
                    </span>

                    <!-- Icon Box -->
                    <div
                        class="w-[4.5rem] h-[4.5rem] absolute right-0 bottom-0 rounded-tl-full bg-[#262051] transition-colors duration-300 group-hover:bg-[#F26822] flex items-center justify-center">
                        <i class="fa-solid fa-pen-nib text-2xl text-white"></i>
                       

                    </div>

                </div>
                <div
                    class="group flex flex-col h-[25rem] gap-4 p-8 bg-[#332d5f] relative transition-colors duration-300 hover:bg-white">

                    <!-- Main Heading -->
                    <span class="text-xl font-bold text-white transition-colors duration-300 group-hover:text-black">
                        Customer Oriented Approach
                    </span>

                    <!-- Paragraph -->
                    <p class="text-[#aeaacb] leading-7">
                        End-to-End Support :We pri  oritize understanding your goals to deliver personalized solutions that align with your business objectives and drive measurable success.
                    </p>

                     <span class="mt-4 flex gap-1 items-center text-[#f26822] text-base font-medium"><i class="fa-solid fa-arrow-right"></i>LEARN MORE</span>

                    <!-- Number -->
                    <span class="text-[#812D834D] absolute top-[-2.5rem] left-0 text-[100px] font-bold">
                        03
                    </span>

                    <!-- Icon Box -->
                    <div
                        class="w-[4.5rem] h-[4.5rem] absolute right-0 bottom-0 rounded-tl-full bg-[#262051] transition-colors duration-300 group-hover:bg-[#F26822] flex items-center justify-center">
                        <i class="fa-solid fa-book-atlas text-2xl text-white"></i>
                        

                    </div>

                </div>
                <div
                    class="group flex flex-col h-[25rem] gap-4 p-8 bg-[#332d5f] relative transition-colors duration-300 hover:bg-white">

                    <!-- Main Heading -->
                    <span class="text-xl font-bold text-white transition-colors duration-300 group-hover:text-black">
                        Cost Effecetive Approach
                    </span>

                    <!-- Paragraph -->
                    <p class="text-[#aeaacb] leading-7">
                        We understand the importance of balancing quality and affordability. Our cost-effective approach ensures that you receive top-notch solutions without exceeding your budget.
                    </p>

                     <span class="mt-4 flex gap-1 items-center text-[#f26822] text-base font-medium"><i class="fa-solid fa-arrow-right"></i>LEARN MORE</span>

                    <!-- Number -->
                    <span class="text-[#812D834D] absolute top-[-2.5rem] left-0 text-[100px] font-bold">
                        04
                    </span>

                    <!-- Icon Box -->
                    <div
                        class="w-[4.5rem] h-[4.5rem] absolute right-0 bottom-0 rounded-tl-full bg-[#262051] transition-colors duration-300 group-hover:bg-[#F26822] flex items-center justify-center">
                       
                        <i class="fa-solid fa-atom text-2xl text-white"></i>

                    </div>

                </div>


            </div>

        </div>

    </section>





@endsection
