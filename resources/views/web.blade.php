@extends('masterlayout')
@section('title', 'Web Development')

@section('content')

    {{-- header section start --}}
    <section class="w-full bg-[#531954] py-6">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-white">Web Development</h2>
        </div>

    </section>
    {{-- header section end --}}

    {{-- about section start --}}
    <section class="w-full py-[2rem]">
        <div class="container mx-auto px-4 flex lg:flex-row flex-col gap-[5rem]">
            <div class="lg:w-1/2 w-full">
                <img src="{{ asset('assets/pic1-service1.png') }}" alt="Logo" class="w-full h-full">
            </div>
            <div class="lg:w-1/2 w-full flex flex-col gap-2">

                <span class="text-sm font-bold text-[#531954]">// about service</span>
                <h2 class="text-3xl font-bold">We Provide Best</h2>
                <h2 class="text-3xl font-bold">Web Development</h2>

                <div class="w-full grid grid-cols-2 gap-4 mt-8">
                    <div class="flex flex-col gap-3">
                        <span class="text-sm font-bold text-[#7141B1]">01.</span>
                        <h3 class="text-xl font-bold">Java Development</h3>
                        <p class="text-base text-[#3D3D3D] leading-6">We’re committed to building sustainable and
                            high-quality Java solutions.</p>

                    </div>
                    <div class="flex flex-col gap-3">
                        <span class="text-sm font-bold text-[#7141B1]">02.</span>
                        <h3 class="text-xl font-bold">PHP Development</h3>
                        <p class="text-base text-[#3D3D3D] leading-6">We’re committed to building sustainable and
                            high-quality PHP solutions.</p>

                    </div>
                    <div class="flex flex-col gap-3">
                        <span class="text-sm font-bold text-[#7141B1]">03.</span>
                        <h3 class="text-xl font-bold">C++ Development</h3>
                        <p class="text-base text-[#3D3D3D] leading-6">We’re committed to building sustainable and
                            high-quality C++ solutions.</p>

                    </div>
                    <div class="flex flex-col gap-3">
                        <span class="text-sm font-bold text-[#7141B1]">04.</span>
                        <h3 class="text-xl font-bold">.NET Development</h3>
                        <p class="text-base text-[#3D3D3D] leading-6">We’re committed to building sustainable and
                            high-quality Qt solutions.</p>

                    </div>

                </div>


            </div>

        </div>

    </section>
    {{-- about section end --}}

    <section class="w-full py-[2rem]">
        <div class="container mx-auto px-4 flex lg:flex-row flex-col">
            <div class="lg:w-1/2 w-full bg-[#211E3B] py-[2rem] flex justify-center items-center flex-col">
                <div class="w-[70%]">
                    <span class="text-base font-bold text-[#8E88B8]">// technology index</span>
                    <h2 class="my-2 text-2xl font-bold text-white">We Organize Our Production Process</h2>
                    <div class="flex gap-4 items-center mt-8">
                        <span
                            class="text-base text-white px-4 py-2 bg-[#F26822] hover:bg-[#531954] font-medium rounded-md">Analysis</span>
                        <span
                            class="text-base text-white px-4 py-2 bg-[#F26822] hover:bg-[#531954] font-medium rounded-md">Design</span>
                        <span
                            class="text-base text-white px-4 py-2 bg-[#F26822] hover:bg-[#531954] font-medium rounded-md">Testing</span>

                    </div>

                    <p class="text-white mt-4 leading-8">Engitech is the partner of choice for many of the world’s leading
                        enterprises, SMEs and technology challengers. We help businesses elevate their value through custom
                        software development, product design, QA and consultancy services. Our product design service lets
                        you prototype, test and validate your ideas.</p>
                </div>


            </div>
            <div class="lg:w-1/2 w-full ">
                <img src="{{ asset('assets/bg1-service1.jpg') }}" alt="Logo" class="w-full h-full">
            </div>


        </div>
    </section>


    {{-- plane start  --}}
    <section class="w-full my-[2rem]">
        <div class="container mx-auto px-4 ">
            <div class="flex flex-col gap-2 justify-center items-center">
                <span class="text-[#531954] font-bold">// choose your plan</span>
                <h2 class="text-4xl font-bold">Flexible Pricing Plans</h2>
                <p class="text-base text-[#7a7a7a] text-center">We help businesses elevate their value through custom
                    software development,<br>product design, QA and consultancy services.</p>

            </div>

            <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-4 mt-[5rem]">
                <div
                    class="group flex flex-col gap-4 p-8 bg-[#841A6A] relative transition-colors duration-300 hover:bg-white">

                    <!-- Main Heading -->
                    <span class="text-xl font-bold text-white transition-colors duration-300 group-hover:text-black">
                        Basic Plan
                    </span>
                    <h3 class="text-5xl font-bold text-[#F26822]">$129.99</h3>
                    <span class="text-[#ababab] mb-[30px] border-b border-[#aeaacb] pb-4 ">Monthly Package</span>

                    <ul class="flex flex-col gap-4">
                        <li class="flex items-center gap-2">
                            <span class="text-[#f26822]"><i class="fa-solid fa-check"></i></span>
                            <p class="font-medium">Web Counsulting</p>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-[#f26822]"><i class="fa-solid fa-check"></i></span>
                            <p class=" font-medium">24/7 System Monitoring</p>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-[#f26822]"><i class="fa-solid fa-check"></i></span>
                            <p class=" font-medium">Machine and Deep Learning</p>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-[#aeaacb]"><i class="fa-solid fa-check"></i></span>
                            <p class="text-[#aeaacb] font-medium">Data Quality Management</p>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-[#aeaacb]"><i class="fa-solid fa-check"></i></span>
                            <p class="text-[#aeaacb] font-medium">Security Management</p>
                        </li>
                    </ul>

                    <span class="mt-4 flex gap-1 items-center text-[#f26822] text-base font-medium"><i
                            class="fa-solid fa-arrow-right"></i>Choose Plane</span>

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
                    class="group flex flex-col  gap-4 p-8 bg-[#332d5f] relative transition-colors duration-300 hover:bg-white">

                    <!-- Main Heading -->
                    <span class="text-xl font-bold text-white transition-colors duration-300 group-hover:text-black">
                        Economy Plan
                    </span>
                    <h3 class="text-5xl font-bold text-[#F26822]">$159.99</h3>
                    <span class="text-[#ababab] mb-[30px] border-b border-[#aeaacb] pb-4 ">Monthly Package</span>

                    <ul class="flex flex-col gap-4">
                        <li class="flex items-center gap-2">
                            <span class="text-[#f26822]"><i class="fa-solid fa-check"></i></span>
                            <p class="font-medium">Web Counsulting</p>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-[#f26822]"><i class="fa-solid fa-check"></i></span>
                            <p class=" font-medium">24/7 System Monitoring</p>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-[#f26822]"><i class="fa-solid fa-check"></i></span>
                            <p class=" font-medium">Machine and Deep Learning</p>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-[#f26822]"><i class="fa-solid fa-check"></i></span>
                            <p class=" font-medium">Data Quality Management</p>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-[#aeaacb]"><i class="fa-solid fa-check"></i></span>
                            <p class="text-[#aeaacb] font-medium">Security Management</p>
                        </li>
                    </ul>

                    <span class="mt-4 flex gap-1 items-center text-[#f26822] text-base font-medium"><i
                            class="fa-solid fa-arrow-right"></i>Choose Plane</span>

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
                    class="group flex flex-col  gap-4 p-8 bg-[#332d5f] relative transition-colors duration-300 hover:bg-white">

                    <!-- Main Heading -->
                    <span class="text-xl font-bold text-white transition-colors duration-300 group-hover:text-black">
                        Premium Plan
                    </span>
                    <h3 class="text-5xl font-bold text-[#F26822]">$189.99</h3>
                    <span class="text-[#ababab] mb-[30px] border-b border-[#aeaacb] pb-4 ">Monthly Package</span>

                    <ul class="flex flex-col gap-4">
                        <li class="flex items-center gap-2">
                            <span class="text-[#f26822]"><i class="fa-solid fa-check"></i></span>
                            <p class="font-medium">Web Counsulting</p>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-[#f26822]"><i class="fa-solid fa-check"></i></span>
                            <p class=" font-medium">24/7 System Monitoring</p>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-[#f26822]"><i class="fa-solid fa-check"></i></span>
                            <p class=" font-medium">Machine and Deep Learning</p>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-[#f26822]"><i class="fa-solid fa-check"></i></span>
                            <p class=" font-medium">Data Quality Management</p>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="text-[#f26822]"><i class="fa-solid fa-check"></i></span>
                            <p class=" font-medium">Security Management</p>
                        </li>
                    </ul>

                    <span class="mt-4 flex gap-1 items-center text-[#f26822] text-base font-medium"><i
                            class="fa-solid fa-arrow-right"></i>Choose Plane</span>

                    <!-- Number -->
                    <span class="text-[#812D834D] absolute top-[-2.5rem] left-0 text-[100px] font-bold">
                        03
                    </span>

                    <!-- Icon Box -->
                    <div class="w-[4.5rem] h-[4.5rem] absolute right-0 bottom-0 rounded-tl-full bg-[#262051] transition-colors duration-300 group-hover:bg-[#F26822] flex items-center justify-center">
                        <i class="fa-solid fa-book-atlas text-2xl text-white"></i>


                    </div>

                </div>



            </div>

        </div>

    </section>
    {{-- plane end  --}}

     <section class="w-full py-[3rem] bg-[url('assets/bg-maps-dots-alt.jpg')]">
        <div class="container mx-auto px-4 flex flex-col gap-2 justify-center items-center">
            <span class="text-base text-[#531954] font-medium">our clients</span>
            <h2 class="text-center text-5xl font-bold ">We are Trusted<br />15+ Countries Worldwide</h2>

            <div class="mt-[3rem] w-full grid sm:grid-cols-2 gap-4">
                {{-- card --}}
                <div class="w-full p-[2rem] shadow-md rounded">
                    <div class="flex gap-4">
                        <img src="{{ asset('assets/client-2.png') }}" alt="team" class="w-[5rem]">
                        <div class="flex flex-col ">
                            <span class="text-[20px] font-bold mb-[2px]">Buzfi</span>
                            <p class="text-[#9f9f9f]">COO of Buzfi.com</p>

                        </div>

                    </div>

                    <p class="mt-[23px] text-[#9f9f9f] text-base leading-7">
                        "Very well thought out and articulate communication. Clear milestones, deadlines and fast work.
                        Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best
                        part...always solving problems with great original ideas!." </p>

                </div>
                {{-- card --}}
                <div class="w-full p-[2rem] shadow-md rounded">
                    <div class="flex gap-4">
                        <img src="{{ asset('assets/client-1.png') }}" alt="team" class="w-[5rem]">
                        <div class="flex flex-col ">
                            <span class="text-[20px] font-bold mb-[2px]">Buzfi Wholesale</span>
                            <p class="text-[#9f9f9f]">CEO of Company</p>

                        </div>

                    </div>

                    <p class="mt-[23px] text-[#9f9f9f] text-base leading-7">

                        "Very well thought out and articulate communication. Clear milestones, deadlines and fast work.
                        Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best
                        part...always solving problems with great original ideas!." </p>

                </div>

            </div>

        </div>

    </section>


@endsection
