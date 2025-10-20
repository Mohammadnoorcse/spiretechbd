@extends('masterlayout')
@section('title', 'home')


@section('content')

    {{-- <section class="w-full">
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

    </section> --}}

    <section class="w-full">
        <div class="owl-carousel owl-theme">
            {{-- Slide 1 --}}
            <div class="relative">
                <img src="{{ asset('assets/SP-1.jpg') }}" alt="" class="w-full">
                <div class="container mx-auto px-4 absolute sm:top-[10rem] top-[5rem] flex flex-col sm:gap-4 gap-2">
                    <p class="sm:text-base text-[12px] font-medium text-white animate__animated animate__backInDown">
                        Simplifying Complexity, One Solution at a Time
                    </p>
                    <h2 class="sm:text-5xl text-base font-bold text-white animate__animated animate__fadeInDown">
                        Spire Technology
                    </h2>
                    <p class="sm:text-base text-[12px] font-medium text-white animate__animated animate__fadeInDown">
                        We offer high quality technical services & IT products, digital<br>
                        transformation for business excellence, driving innovation in business<br>
                        development and give the best solution.
                    </p>
                    <button class="w-[8rem] px-2 py-1 bg-[#BF552E] text-white rounded animate__animated animate__flipInX">
                        Learn More
                    </button>
                </div>
            </div>

            {{-- Slide 2 (Example) --}}
            <div class="relative">
                <img src="{{ asset('assets/SP-2.jpg') }}" alt="" class="w-full">
                <div class="container mx-auto px-4 absolute sm:top-[10rem] top-[5rem] flex flex-col sm:gap-4 gap-2">
                    <p class="sm:text-base text-[12px] font-medium text-white animate__animated animate__backInDown">
                        Empowering Progress Through Technology
                    </p>
                    <h2 class="sm:text-5xl text-base font-bold text-white animate__animated animate__fadeInDown">
                        Innovation Hub
                    </h2>
                    <p class="sm:text-base text-[12px] font-medium text-white animate__animated animate__fadeInDown">
                        From concept to execution, we deliver impactful solutions<br>
                        that transform businesses with cutting-edge technology.
                    </p>
                    <button class="w-[8rem] px-2 py-1 bg-[#BF552E] text-white rounded animate__animated animate__flipInX">
                        Get Started
                    </button>
                </div>
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

    <section class="w-full lg:h-[53rem] bg-[#531954] py-8 lg:pb-0 pb-[5rem] relative">
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

                    <span class="mt-4 flex gap-1 items-center text-[#f26822] text-base font-medium"><i
                            class="fa-solid fa-arrow-right"></i>LEARN MORE</span>

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
                        Dealwith experts,: Experience and creativity complement each other in every project we
                        undertake, resulting in a solution that is not only creative but also sturdy, reliable, and
                        effective.
                    </p>

                    <span class="mt-4 flex gap-1 items-center text-[#f26822] text-base font-medium"><i
                            class="fa-solid fa-arrow-right"></i>LEARN MORE</span>

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
                        End-to-End Support :We pri oritize understanding your goals to deliver personalized solutions that
                        align with your business objectives and drive measurable success.
                    </p>

                    <span class="mt-4 flex gap-1 items-center text-[#f26822] text-base font-medium"><i
                            class="fa-solid fa-arrow-right"></i>LEARN MORE</span>

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
                        We understand the importance of balancing quality and affordability. Our cost-effective approach
                        ensures that you receive top-notch solutions without exceeding your budget.
                    </p>

                    <span class="mt-4 flex gap-1 items-center text-[#f26822] text-base font-medium"><i
                            class="fa-solid fa-arrow-right"></i>LEARN MORE</span>

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


        {{-- counting section --}}
        <div class="absolute lg:bottom-[-8rem] bottom-[-28rem] w-full ">
            <div class="container mx-auto px-4 flex lg:flex-row flex-col gap-4">
                <div class="lg:w-1/2 w-full lg:h-auto h-[15rem] relative">
                    <img src="{{ asset('assets/count-bg-1.jpg') }}" alt="bg" class="w-full h-full">
                    <div class="absolute top-7 left-5 flex flex-col">
                        <h1 class="text-[4rem] font-bold text-white">15+</h1>
                        <h3 class="text-3xl font-bold text-white">Countries Worldwide</h3>
                        <p class="pr-2 text-white">To succeed, every software solution must be deeply integrated into the
                            existing tech environment..</p>

                    </div>
                </div>
                <div class="lg:w-1/2 w-full lg:h-auto h-[15rem] relative">
                    <img src="{{ asset('assets/count-bg-2.jpg') }}" alt="bg" class="w-full h-full">
                    <div class="absolute top-7 left-5 flex flex-col">
                        <h1 class="text-[4rem] font-bold text-white">23 k</h1>
                        <h3 class="text-3xl font-bold text-white">Happy Customers</h3>
                        <p class="pr-2 text-white">To succeed, every software solution must be deeply integrated into the
                            existing tech environment..</p>

                    </div>
                </div>


            </div>

        </div>

    </section>
    {{-- only responsive section --}}
    <section class="w-full lg:h-[10rem] h-[30rem]"></section>


    {{-- our service section --}}

    <section class="w-full py-[2rem]">
        <div class="container mx-auto px-4">
            <h2 class="text-xl font-medium text-[#531954]">Our Services</h2>

            <div class="flex md:items-center md:flex-row flex-col justify-between">
                <h2 class="text-4xl font-bold">We offer various <br />types of Digital Solutions</h2>
                <a href="#" class="w-[8rem] uppercase px-3 py-2 bg-[#F26822] text-white md:mt-0 mt-4">All
                    Services</a>

            </div>


            <div class="mt-[3rem] grid md:grid-cols-3 sm:grid-cols-2 gap-8">

                <div class="flex gap-[1.5rem]">
                    <span class="text-3xl text-[#531954]"><i class="fa-solid fa-city"></i></span>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-2xl font-semibold hover:text-[#C35834]">Web Development</h3>
                        <p class="text-[#7B7B7B]">Our web development services are expertly crafted to transform your
                            vision into a stunning reality that captivates visitors and drives engagement.</p>

                    </div>

                </div>
                <div class="flex gap-[1.5rem]">
                    <span class="text-3xl text-[#531954]"><i class="fa-solid fa-mobile-retro"></i></span>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-2xl font-semibold hover:text-[#C35834]">Mobile App Development</h3>
                        <p class="text-[#7B7B7B]">Our mobile app development service transforms your ideas into innovative,
                            user-friendly applications tailored to meet your specific needs.</p>

                    </div>

                </div>
                <div class="flex gap-[1.5rem]">
                    <span class="text-3xl text-[#531954]"><i class="fa-solid fa-desktop"></i></span>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-2xl font-semibold hover:text-[#C35834]">Software Development</h3>
                        <p class="text-[#7B7B7B]">Our software development services are designed to transform your unique
                            challenges into tailor-made applications that drive efficiency and innovation.</p>

                    </div>

                </div>
                <div class="flex gap-[1.5rem]">
                    <span class="text-3xl text-[#531954]"><i class="fa-solid fa-keyboard"></i></span>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-2xl font-semibold hover:text-[#C35834]">E-Commerce Services</h3>
                        <p class="text-[#7B7B7B]">Our extensive collection features everything from the latest tech gadgets
                            to unique handmade crafts, ensuring there’s something for everyone, no matter your taste or
                            budget</p>

                    </div>

                </div>
                <div class="flex gap-[1.5rem]">
                    <span class="text-3xl text-[#531954]"><i class="fa-solid fa-signal"></i></span>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-2xl font-semibold hover:text-[#C35834]">SEO</h3>
                        <p class="text-[#7B7B7B]">By employing a mix of SEO, content creation, social media management, and
                            targeted advertising campaigns, we ensure that your brand</p>

                    </div>

                </div>
                <div class="flex gap-[1.5rem]">
                    <span class="text-3xl text-[#531954]"><i class="fa-solid fa-earth-africa"></i></span>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-2xl font-semibold hover:text-[#C35834]">Web Development</h3>
                        <p class="text-[#7B7B7B]">Our comprehensive digital marketing services are designed to connect you
                            with your target audience where they spend their time—online.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- our touch --}}
    <section class="w-full py-[2rem]">
        <div class="container mx-auto px-4 relative ">
            <img src="{{ asset('assets/bg-tech-home1.jpg') }}" alt="Logo" class="">

            <div class="absolute sm:top-[5rem] top-5 sm:left-[5rem] left-5 ">
                <span class="text-[20px] font-medium text-white">Get in Touch</span>

                <div class="w-full flex justify-between items-center">
                    <h2 class="sm:text-5xl text-2xl font-bold text-white">Let’s Build Your Website</h2>
                    {{-- <div class="px-4 py-2 border border-white">Contact Us</div> --}}
                </div>

            </div>

        </div>

    </section>

    {{-- Projects --}}

    <section class="w-full py-[2rem]">
        <div class="container mx-auto px-4 relative ">
            <span class="text-[#531954] text-xl font-bold">// latest Updates</span>

            <div class="flex lg:flex-row flex-col gap-4 items-center">
                <div class="lg:w-1/2 w-full">
                    <h1 class="text-4xl font-bold">Introduce Our Projects</h1>


                </div>
                <div class="lg:w-1/2 w-full">
                    <p>Software development outsourcing is just a tool to achieve business goals. But there is no way to get
                        worthwhile results without cooperation and trust between a client company.</p>
                </div>

            </div>


            <div class="mt-8 grid lg:grid-cols-4 sm:grid-cols-2 gap-4">

                <div class="relative group">
                    <img src="{{ asset('assets/project-1.jpg') }}" alt="Logo" class="">

                    <div
                        class="absolute bottom-[2rem] w-[90%] bg-[#531954] p-4 left-1/2 transform -translate-x-1/2 relative">
                        <h2 class="text-xl text-white font-bold z-50">Buzfi Website</h2>
                        <span class="text-[#aeaacb]">Ideas / Technology</span>

                        <div
                            class="absolute top-0 right-0 w-[3rem] h-[3rem] rounded-bl-full bg-[#6B537C] z-5 flex justify-center items-center text-[#C55642] group-hover:bg-[#C55642] group-hover:text-white">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>

                    </div>
                </div>
                <div class="relative group">
                    <img src="{{ asset('assets/project-1.jpg') }}" alt="Logo" class="">

                    <div
                        class="absolute bottom-[2rem] w-[90%] bg-[#531954] p-4 left-1/2 transform -translate-x-1/2 relative">
                        <h2 class="text-xl text-white font-bold z-50">Buzfi Website</h2>
                        <span class="text-[#aeaacb]">Ideas / Technology</span>

                        <div
                            class="absolute top-0 right-0 w-[3rem] h-[3rem] rounded-bl-full bg-[#6B537C] z-5 flex justify-center items-center text-[#C55642] group-hover:bg-[#C55642] group-hover:text-white">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>

                    </div>
                </div>
                <div class="relative group">
                    <img src="{{ asset('assets/project-1.jpg') }}" alt="Logo" class="">

                    <div
                        class="absolute bottom-[2rem] w-[90%] bg-[#531954] p-4 left-1/2 transform -translate-x-1/2 relative">
                        <h2 class="text-xl text-white font-bold z-50">Buzfi Website</h2>
                        <span class="text-[#aeaacb]">Ideas / Technology</span>

                        <div
                            class="absolute top-0 right-0 w-[3rem] h-[3rem] rounded-bl-full bg-[#6B537C] z-5 flex justify-center items-center text-[#C55642] group-hover:bg-[#C55642] group-hover:text-white">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>

                    </div>
                </div>
                <div class="relative group">
                    <img src="{{ asset('assets/project-1.jpg') }}" alt="Logo" class="">

                    <div
                        class="absolute bottom-[2rem] w-[90%] bg-[#531954] p-4 left-1/2 transform -translate-x-1/2 relative">
                        <h2 class="text-xl text-white font-bold z-50">Buzfi Website</h2>
                        <span class="text-[#aeaacb]">Ideas / Technology</span>

                        <div
                            class="absolute top-0 right-0 w-[3rem] h-[3rem] rounded-bl-full bg-[#6B537C] z-5 flex justify-center items-center text-[#C55642] group-hover:bg-[#C55642] group-hover:text-white">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

    {{-- team --}}

    <section class="relative w-full  bg-[url('/assets/bg-tech-home1.jpg')] bg-cover bg-center py-[3rem]">
        <div class="absolute inset-0 bg-[#473354] opacity-70"></div>

        <div class="w-full h-full relative z-10 container mx-auto px-4 flex flex-col gap-2 justify-center items-center">
            <span class="text-base text-white font-medium">Our Team</span>
            <h2 class="text-center text-5xl font-bold text-white">We Provide Services for<br />Your Online Business Growth
            </h2>

            <div class="mt-[3rem] w-full grid md:grid-cols-4 grid-cols-2 gap-4">

                <div
                    class="w-full p-[2rem] border border-white rounded-md hover:bg-[#BE532F] flex flex-col gap-2 justify-center items-center">
                    <img src="{{ asset('assets/team-1.png') }}" alt="team" class="w-[5rem]">
                    <span class="text-xl font-bold text-white uppercase">CEO</span>


                </div>
                <div
                    class="w-full p-[2rem] border border-white rounded-md hover:bg-[#BE532F] flex flex-col gap-2 justify-center items-center">
                    <img src="{{ asset('assets/team-4.png') }}" alt="team" class="w-[5rem]">
                    <span class="text-xl font-bold text-white uppercase">Web developer</span>


                </div>
                <div
                    class="w-full p-[2rem] border border-white rounded-md hover:bg-[#BE532F] flex flex-col gap-2 justify-center items-center">
                    <img src="{{ asset('assets/team-3.png') }}" alt="team" class="w-[5rem]">
                    <span class="text-xl font-bold text-white uppercase">App Developer</span>


                </div>
                <div
                    class="w-full p-[2rem] border border-white rounded-md hover:bg-[#BE532F] flex flex-col gap-2 justify-center items-center">
                    <img src="{{ asset('assets/team-2.png') }}" alt="team" class="w-[5rem]">
                    <span class="text-xl font-bold text-white uppercase">Digital Marketer</span>


                </div>
            </div>

        </div>
    </section>

    {{-- our client --}}

    <section class="w-full py-[3rem]">
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



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            animateOut: 'fadeOut',
            dots: true,
            nav: false
        });
    });
</script>
