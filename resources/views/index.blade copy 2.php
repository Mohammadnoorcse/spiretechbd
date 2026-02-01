@extends('masterlayout')
@section('title', 'home')
@push('seo')
    <!-- Meta SEO -->
    <meta name="description"
        content="Explore Spire Technology Limited's latest projects in design, development, and technology. Innovative solutions tailored for your business needs.">
    <meta name="keywords"
        content="Spire Technology, IT projects, software development, technology solutions, web design, app development">
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Projects | Spire Technology Limited">
    <meta property="og:description"
        content="Explore Spire Technology Limited's latest projects in design, development, and technology.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/image-box1.jpg') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Projects | Spire Technology Limited">
    <meta name="twitter:description"
        content="Explore Spire Technology Limited's latest projects in design, development, and technology.">
    <meta name="twitter:image" content="{{ asset('assets/image-box1.jpg') }}">
@endpush
@push('css')
    @push('css')
        <style>
            @keyframes gradientRightToLeft {
                0% {
                    background-position: 100% 50%;
                }

                100% {
                    background-position: 0% 50%;
                }
            }

            .animate-rtl {
                background-size: 200% 200%;
                animation: gradientRightToLeft 4s ease-in-out infinite;
            }
        </style>
    @endpush
@endpush


@section('content')


    <section class="w-full bg-gradient-to-r from-[#841A6A] via-[#9A2B7A] to-[#B13C8A]">
        <div class="container mx-auto px-4 py-[4rem] flex lg:flex-row flex-col gap-6">

            <div class="lg:w-1/2 w-full flex flex-col gap-4">
                <h2 class="text-3xl md:text-4xl font-extrabold text-white leading-tight">
                    Elevating Brands through High-Performance Digital Solutions
                    <span
                        class="block mt-2 bg-gradient-to-l from-[#531954] via-purple-500 to-pink-500
          bg-clip-text text-transparent animate-rtl">
                        Spire Technology
                    </span>
                </h2>

                <p class="text-white/90 text-lg">
                    We combine cutting-edge web development with data-driven marketing to scale your business in the digital
                    landscape.
                </p>

                <button
                    class="group relative overflow-hidden w-fit py-3 px-8 text-xl font-bold
    bg-white text-[#902373] shadow-lg shadow-amber-500 rounded-lg
    transition-all duration-500
    hover:text-white
    hover:bg-gradient-to-r hover:from-[#531954] hover:via-purple-500 hover:to-pink-500">

                    <!-- Text container with fixed height -->
                    <span class="relative block h-6 overflow-hidden">

                        <!-- Original text -->
                        <span
                            class="block transition-transform duration-500 ease-in-out transform group-hover:-translate-y-full">
                            Request a Quote
                        </span>

                        <!-- Rolling in text -->
                        <span
                            class="absolute top-full left-0 w-full block transition-transform duration-500 ease-in-out transform group-hover:-translate-y-full">
                            Request a Quote
                        </span>
                    </span>
                </button>




            </div>

            <div class="lg:w-1/2 w-full flex items-center justify-center relative">
                <video class="w-full max-w-lg rounded-xl shadow-lg" autoplay muted loop playsinline>
                    <source src="{{ asset('assets/video.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <div class="p-2 bg-[#531954] absolute bottom-0 left-0 rounded-md">
                    <h2 class="text-base font-bold text-white text-center"><strong class="text-3xl">12+</strong><br />Years
                        of <br /> Experience</h2>

                </div>


            </div>

        </div>
    </section>



    <section class="w-full bg-[#F8F8F8]">
        <div class="container mx-auto px-4 py-8">
            <div class="owl-carousel logo-carousel">
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
                <div class="flex justify-center items-center">
                    <img src="{{ asset('assets/bussiness-1.png') }}" alt="Logo"
                        class="opacity-50 hover:opacity-100 h-16 cursor-pointer">
                </div>
                <div class="flex justify-center items-center">
                    <img src="{{ asset('assets/bussiness-2.png') }}" alt="Logo"
                        class="opacity-50 hover:opacity-100 h-16 cursor-pointer">
                </div>


            </div>
        </div>
    </section>




    <section class="w-full bg-gradient-to-br from-[#f8f4f9] to-white py-16">
        <div class="container mx-auto px-4 flex flex-col lg:flex-row items-center gap-12">

            <!-- Left Content -->
            <div class="lg:w-1/2 w-full flex flex-col gap-6">

                <!-- Badge -->
                <span
                    class="inline-block w-fit px-4 py-1 text-sm font-semibold uppercase rounded-full
                         bg-[#531954]/10 text-[#531954]">
                    About Us
                </span>

                <!-- Heading -->
                <h2 class="text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900">
                    A Full-Service Digital Agency Delivering
                    <span class="text-[#531954]">Custom Solutions</span>
                </h2>

                <!-- Features -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                        <i class="fa-solid fa-check text-[#531954] mt-1"></i>
                        <p class="text-sm text-gray-700">
                            Custom websites optimized for user experience & conversions
                        </p>
                    </div>

                    <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                        <i class="fa-solid fa-check text-[#531954] mt-1"></i>
                        <p class="text-sm text-gray-700">
                            Performance marketing campaigns with measurable results
                        </p>
                    </div>

                    <div class="flex items-start gap-3 p-4 bg-white rounded-xl shadow-sm">
                        <i class="fa-solid fa-check text-[#531954] mt-1"></i>
                        <p class="text-sm text-gray-700">
                            Branding strategies tailored for long-term engagement
                        </p>
                    </div>
                </div>

                <!-- Description -->
                <p class="text-gray-600 leading-relaxed text-justify">
                    Spire Technology is a global digital solutions agency helping brands grow in the digital space.
                    We deliver strategic digital marketing, custom websites, e-commerce platforms, software development,
                    and mobile app solutions designed to increase visibility, engagement, and conversions.
                </p>

                <p class="text-gray-600 leading-relaxed text-justify">
                    We collaborate closely with our clients to understand their business goals, brand identity,
                    and target audience. Our combined technical expertise and marketing-driven approach ensure
                    every solution is scalable, performance-focused, and aligned with long-term growth.
                </p>

                <!-- Button -->
                <div>
                    <a href="#"
                        class="inline-flex items-center gap-2 px-6 py-3 rounded-xl
                          bg-[#531954] text-white font-semibold
                          hover:bg-[#421342] transition">
                        Learn More
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Right Image -->
            <div class="lg:w-1/2 w-full relative">
                <div class="absolute -top-6 -left-6 w-full h-full bg-[#531954]/10 rounded-3xl"></div>
                <img src="{{ asset('assets/thirdsection.jpg') }}" alt="About Spire Technology"
                    class="relative rounded-3xl shadow-xl w-full object-cover">
            </div>

        </div>
    </section>


    <section id="counterSection" class="w-full lg:h-[53rem] bg-[#531954] py-8 lg:pb-0 pb-[5rem] relative">
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
                        <h1 class="text-5xl font-bold text-[#F26822] counter" data-count="15">0</h1>
                        <h3 class="text-3xl font-bold text-white">Countries Worldwide</h3>
                        <p class="pr-2 text-white">To succeed, every software solution must be deeply integrated into the
                            existing tech environment..</p>

                    </div>
                </div>
                <div class="lg:w-1/2 w-full lg:h-auto h-[15rem] relative">
                    <img src="{{ asset('assets/count-bg-2.jpg') }}" alt="bg" class="w-full h-full">
                    <div class="absolute top-7 left-5 flex flex-col">
                        <h1 class="text-5xl font-bold text-[#F26822] counter" data-count="2500">0</h1>
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

    <!-- Premium Client-Focused Projects Section -->
    <section class="w-full bg-[#841A6A] py-28 overflow-x-hidden">
        <div class="container mx-auto px-4">

            <!-- Section Header -->
            <div class="text-center mb-20">
                <h2 class="text-5xl font-extrabold text-white mb-4" data-aos="fade-down">Our Amazing Projects</h2>
                <p class="text-gray-300 max-w-2xl mx-auto" data-aos="fade-down" data-aos-delay="100">
                    Explore our latest projects crafted with creativity, innovation, and technology. Each one demonstrates
                    our expertise in delivering client success.
                </p>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">

                <!-- Project Card Template -->
                <div class="project-card relative group rounded-3xl overflow-hidden shadow-2xl transform transition duration-500 hover:scale-105 hover:-translate-y-3 hover:shadow-purple-600/50 will-change-transform"
                    data-aos="zoom-in" data-aos-offset="200">

                    <!-- Project Image -->
                    <img src="https://www.bdtask.com/blog/uploads/ecommerce_business_in_bangladesh.jpg" alt="Project 1"
                        class="w-full h-64 object-cover">

                    <!-- Hover Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-end p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">E-Commerce Website</h3>
                        <p class="text-white/80 mb-4 text-sm">Responsive online store with seamless payment & inventory
                            management.</p>
                        <a href="#"
                            class="inline-block text-center bg-purple-600 hover:bg-purple-700 text-white px-5 py-2 rounded-full font-medium text-sm animate-pulse transition">View
                            Project</a>
                    </div>

                </div>

                <!-- Project Card 2 -->
                <div class="project-card relative group rounded-3xl overflow-hidden shadow-2xl transform transition duration-500 hover:scale-105 hover:-translate-y-3 hover:shadow-purple-600/50 will-change-transform"
                    data-aos="zoom-in" data-aos-offset="200" data-aos-delay="100">
                    <img src="https://6valley.app/wp-content/uploads/2024/03/best-ecommerce-cms-platforms-to-build-your-online-store.png"
                        alt="Project 2" class="w-full h-64 object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-end p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Mobile App Design</h3>
                        <p class="text-white/80 mb-4 text-sm">Intuitive iOS & Android app design with smooth UX
                            interactions.</p>
                        <a href="#"
                            class="inline-block text-center bg-purple-600 hover:bg-purple-700 text-white px-5 py-2 rounded-full font-medium text-sm animate-pulse transition">View
                            Project</a>
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div class="project-card relative group rounded-3xl overflow-hidden shadow-2xl transform transition duration-500 hover:scale-105 hover:-translate-y-3 hover:shadow-purple-600/50 will-change-transform"
                    data-aos="zoom-in" data-aos-offset="200" data-aos-delay="200">
                    <img src="https://cdn.amasty.com/media/amasty/blog/cache/b/e/915/433/best_e-commerce_platforms_1_.png"
                        alt="Project 3" class="w-full h-64 object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-end p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Corporate Portal</h3>
                        <p class="text-white/80 mb-4 text-sm">Custom portal for internal workflows and collaboration.</p>
                        <a href="#"
                            class="inline-block text-center bg-purple-600 hover:bg-purple-700 text-white px-5 py-2 rounded-full font-medium text-sm animate-pulse transition">View
                            Project</a>
                    </div>
                </div>

                <!-- Project Card 4 -->
                <div class="project-card relative group rounded-3xl overflow-hidden shadow-2xl transform transition duration-500 hover:scale-105 hover:-translate-y-3 hover:shadow-purple-600/50 will-change-transform"
                    data-aos="zoom-in" data-aos-offset="200" data-aos-delay="300">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfIJhwWdB75zoqGC35cywlLGiFhaaJW8eOvQ&s"
                        alt="Project 4" class="w-full h-64 object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-end p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Digital Marketing Campaign</h3>
                        <p class="text-white/80 mb-4 text-sm">Creative social media and PPC campaigns delivering measurable
                            ROI.</p>
                        <a href="#"
                            class="inline-block text-center bg-purple-600 hover:bg-purple-700 text-white px-5 py-2 rounded-full font-medium text-sm animate-pulse transition">View
                            Project</a>
                    </div>
                </div>

                <!-- Project Card 5 -->
                <div class="project-card relative group rounded-3xl overflow-hidden shadow-2xl transform transition duration-500 hover:scale-105 hover:-translate-y-3 hover:shadow-purple-600/50 will-change-transform"
                    data-aos="zoom-in" data-aos-offset="200" data-aos-delay="400">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7YLDQPZsQ6Q9UCeTqwlXhPR-I1qE-l-q5ag&s"
                        alt="Project 5" class="w-full h-64 object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-end p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">SEO Optimization</h3>
                        <p class="text-white/80 mb-4 text-sm">Boost organic traffic and improve search engine ranking.</p>
                        <a href="#"
                            class="inline-block text-center bg-purple-600 hover:bg-purple-700 text-white px-5 py-2 rounded-full font-medium text-sm animate-pulse transition">View
                            Project</a>
                    </div>
                </div>

                <!-- Project Card 6 -->
                <div class="project-card relative group rounded-3xl overflow-hidden shadow-2xl transform transition duration-500 hover:scale-105 hover:-translate-y-3 hover:shadow-purple-600/50 will-change-transform"
                    data-aos="zoom-in" data-aos-offset="200" data-aos-delay="500">
                    <img src="https://upthrust.eu/wp-content/uploads/2023/08/ecommerce-mcommerce-featured-image-5fd09a3a5ff2a.png"
                        alt="Project 6" class="w-full h-64 object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-end p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Custom Software</h3>
                        <p class="text-white/80 mb-4 text-sm">Scalable software solutions to streamline business processes.
                        </p>
                        <a href="#"
                            class="inline-block text-center bg-purple-600 hover:bg-purple-700 text-white px-5 py-2 rounded-full font-medium text-sm animate-pulse transition">View
                            Project</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- AOS Library -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- VanillaTilt Library -->
    <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.2/dist/vanilla-tilt.min.js"></script>

    <script>
        const isMobile = window.innerWidth < 768;

        // Scroll animations
        AOS.init({
            duration: isMobile ? 1200 : 800,
            once: true,
            easing: 'ease-in-out'
        });

        // Stagger delay for cards
        const projectCards = document.querySelectorAll('.project-card');
        projectCards.forEach((card, index) => {
            card.setAttribute('data-aos-delay', isMobile ? index * 50 : index * 100);
        });

        // 3D tilt hover effect
        const tiltSpeed = isMobile ? 300 : 400;
        VanillaTilt.init(document.querySelectorAll(".project-card"), {
            max: 15,
            speed: tiltSpeed,
            glare: true,
            "max-glare": 0.2,
        });
    </script>




    <!-- Services Section -->
    <section class="w-full bg-[#531954] py-20">
        <div class="container mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- LEFT (Sticky Content) -->
            <div class="lg:sticky lg:top-24 h-fit flex flex-col gap-6">
                <h2 class="text-5xl font-bold text-white">
                    Our Services
                </h2>

                <p class="text-white/80 leading-relaxed">
                    We handle all your technology needs under one roof. Our comprehensive
                    services include research, planning, custom development solutions and
                    digital strategies designed to accelerate growth and maximize ROI.
                </p>

                <img src="https://www.digitalsilk.com/wp-content/uploads/2024/09/Explore-Our-Web-Design-Services-1.png.webp"
                    alt="Services" class="rounded-2xl shadow-xl max-w-md" />
            </div>

            <!-- RIGHT (Cards) -->
            <div class="flex flex-col gap-10">

                <!-- CARD 1 -->
                <div class="service-card w-[95%] bg-white rounded-2xl p-8 shadow-lg transform transition duration-500 hover:-translate-y-4 hover:scale-105 hover:shadow-2xl hover:rotate-1"
                    data-aos="zoom-in">
                    <div
                        class="w-[3rem] h-[3rem] p-2 border-2 border-[#531954] rounded-full flex items-center justify-center">
                        <span class="text-2xl text-[#531954]"><i class="fa-solid fa-city"></i></span>
                    </div>

                    <h3 class="text-2xl font-bold text-[#531954] mb-2 mt-4">Web Development</h3>
                    <p class="text-gray-600">
                        We build high-performance, scalable websites that merge sophisticated design with flawless
                        functionality. From landing pages to complex corporate portals, we create digital experiences that
                        captivate your audience and maximize conversions.
                    </p>
                </div>

                <!-- CARD 2 -->
                <div class="service-card w-[95%] bg-white rounded-2xl p-8 shadow-lg transform transition duration-500 hover:-translate-y-4 hover:scale-105 hover:shadow-2xl hover:rotate-1"
                    data-aos="zoom-in">
                    <div
                        class="w-[3rem] h-[3rem] p-2 border-2 border-[#531954] rounded-full flex items-center justify-center">
                        <span class="text-2xl text-[#531954]"><i class="fa-solid fa-cart-shopping"></i></span>
                    </div>

                    <h3 class="text-2xl font-bold text-[#531954] mb-2 mt-4">E-Commerce Solutions</h3>
                    <p class="text-gray-600">
                        Empower your business with robust online stores. We develop secure, user-centric e-commerce
                        platforms integrated with seamless payment gateways and inventory management designed to turn
                        browsers into loyal customers.
                    </p>
                </div>

                <!-- CARD 3 -->
                <div class="service-card w-[95%] bg-white rounded-2xl p-8 shadow-lg transform transition duration-500 hover:-translate-y-4 hover:scale-105 hover:shadow-2xl hover:rotate-1"
                    data-aos="zoom-in">
                    <div
                        class="w-[3rem] h-[3rem] p-2 border-2 border-[#531954] rounded-full flex items-center justify-center">
                        <span class="text-2xl text-[#531954]"><i class="fa-solid fa-mobile-screen-button"></i></span>
                    </div>

                    <h3 class="text-2xl font-bold text-[#531954] mb-2 mt-4">Mobile App Development</h3>
                    <p class="text-gray-600">
                        Bring your vision to the fingertips of your users. We develop intuitive, high-performance iOS and
                        Android applications that provide seamless user experiences and solve real-world problems through
                        innovative mobile technology.
                    </p>
                </div>

                <!-- CARD 4 -->
                <div class="service-card w-[95%] bg-white rounded-2xl p-8 shadow-lg transform transition duration-500 hover:-translate-y-4 hover:scale-105 hover:shadow-2xl hover:rotate-1"
                    data-aos="zoom-in">
                    <div
                        class="w-[3rem] h-[3rem] p-2 border-2 border-[#531954] rounded-full flex items-center justify-center">
                        <span class="text-2xl text-[#531954]"><i class="fa-solid fa-computer"></i></span>
                    </div>

                    <h3 class="text-2xl font-bold text-[#531954] mb-2 mt-4">Software Development</h3>
                    <p class="text-gray-600">
                        Transform your complex business challenges into streamlined digital assets. Our custom software
                        solutions are engineered for reliability, scalability, and efficiency, helping you automate
                        workflows and lead your industry.
                    </p>
                </div>

                <!-- CARD 5 -->
                <div class="service-card w-[95%] bg-white rounded-2xl p-8 shadow-lg transform transition duration-500 hover:-translate-y-4 hover:scale-105 hover:shadow-2xl hover:rotate-1"
                    data-aos="zoom-in">
                    <div
                        class="w-[3rem] h-[3rem] p-2 border-2 border-[#531954] rounded-full flex items-center justify-center">
                        <span class="text-2xl text-[#531954]"><i class="fa-solid fa-chart-line"></i></span>
                    </div>

                    <h3 class="text-2xl font-bold text-[#531954] mb-2 mt-4">SEO (Search Engine Optimization)</h3>
                    <p class="text-gray-600">
                        Dominating the first page of search results isn’t an accident-it’s a strategy. Our data-driven SEO
                        approach enhances your visibility, drives organic traffic, and ensures your brand stays ahead of the
                        competition.
                    </p>
                </div>

                <!-- CARD 6 -->
                <div class="service-card w-[95%] bg-white rounded-2xl p-8 shadow-lg transform transition duration-500 hover:-translate-y-4 hover:scale-105 hover:shadow-2xl hover:rotate-1"
                    data-aos="zoom-in">
                    <div
                        class="w-[3rem] h-[3rem] p-2 border-2 border-[#531954] rounded-full flex items-center justify-center">
                        <span class="text-2xl text-[#531954]"><i class="fa-solid fa-bullhorn"></i></span>
                    </div>

                    <h3 class="text-2xl font-bold text-[#531954] mb-2 mt-4">Digital Marketing</h3>
                    <p class="text-gray-600">
                        We don't just run ads; we build growth engines. Through a strategic mix of social media, content
                        marketing, and targeted PPC campaigns, we connect your brand with the right audience to deliver
                        measurable ROI.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- AOS Library -->

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- VanillaTilt Library -->
    <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.2/dist/vanilla-tilt.min.js"></script>

    <script>
        // Responsive animation
        const isMobile = window.innerWidth < 768;

        // Initialize AOS
        AOS.init({
            duration: isMobile ? 1200 : 20000,
            once: true,
            easing: 'ease-in-out'
        });

        // Set responsive stagger delay
        const cards = document.querySelectorAll('.service-card');
        cards.forEach((card, index) => {
            card.setAttribute('data-aos-delay', isMobile ? index * 50 : index * 100);
        });

        // Initialize VanillaTilt with responsive speed
        const tiltSpeed = isMobile ? 300 : 400;
        VanillaTilt.init(document.querySelectorAll(".service-card"), {
            max: 15,
            speed: tiltSpeed,
            glare: true,
            "max-glare": 0.2,
        });
    </script>





    {{-- our touch --}}
    <section class="w-full py-[2rem]">
        <div class="container mx-auto px-4 relative ">
            <div class="w-full relative">
                <img src="{{ asset('assets/bg-tech-home1.jpg') }}" alt="Logo" class="">

                <div class="w-[90%] absolute sm:top-[5rem] top-5 sm:left-[5rem] left-5 ">
                    <span class="text-[20px] font-medium text-white">Get in Touch</span>

                    <div class="w-full flex lg:flex-row flex-col justify-between lg:items-center ">
                        <h2 class="sm:text-5xl text-2xl font-bold text-white">Let’s Build Your Website</h2>
                        <a href="{{ route('contact') }}"
                            class="px-4 py-2 border-2  border-white text-white font-bold lg:block hidden ">Contact Us</a>
                    </div>

                </div>
            </div>




        </div>

    </section>





    {{-- Team Section --}}

    <section class="relative w-full bg-[url('/assets/bg-tech-home1.jpg')] bg-cover bg-center py-28 overflow-hidden">
        <!-- Floating particles / subtle background animation -->
        <div class="absolute inset-0">
            <canvas id="particles-canvas" class="w-full h-full"></canvas>
        </div>

        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-[#473354] opacity-70"></div>

        <div class="w-full relative z-10 container mx-auto px-4 flex flex-col gap-4 justify-center items-center">
            <span class="text-base text-white font-medium tracking-widest" data-aos="fade-down">Our Team</span>
            <h2 class="text-center text-5xl font-extrabold text-white" data-aos="fade-down" data-aos-delay="100">
                Meet the Experts Driving <br /> Your Online Success
            </h2>

            <!-- Team Grid -->
            <div class="mt-16 w-full grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-8">

                <!-- Team Member -->
                <div class="team-card relative group rounded-3xl overflow-hidden p-8 bg-white/10 border border-white backdrop-blur-md transform transition duration-500 hover:scale-105 hover:-translate-y-4 hover:shadow-2xl will-change-transform cursor-pointer"
                    data-aos="fade-up" data-aos-delay="0">
                    <img src="{{ asset('assets/team-1.png') }}" alt="CEO"
                        class="w-24 mx-auto rounded-full border-4 border-gradient-to-r from-purple-400 via-pink-500 to-orange-400 p-1">
                    <span
                        class="block mt-4 text-xl font-bold text-white uppercase transition group-hover:text-[#BE532F] text-center">CEO</span>
                    <!-- Hidden social icons -->
                    <div
                        class="flex justify-center gap-4 mt-3 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <a href="#" class="text-white hover:text-[#BE532F] text-lg"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-white hover:text-[#BE532F] text-lg"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white hover:text-[#BE532F] text-lg"><i
                                class="fab fa-facebook"></i></a>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="team-card relative group rounded-3xl overflow-hidden p-8 bg-white/10 border border-white backdrop-blur-md transform transition duration-500 hover:scale-105 hover:-translate-y-4 hover:shadow-2xl will-change-transform cursor-pointer"
                    data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/team-4.png') }}" alt="Web Developer"
                        class="w-24 mx-auto rounded-full border-4 border-gradient-to-r from-purple-400 via-pink-500 to-orange-400 p-1">
                    <span
                        class="block mt-4 text-xl font-bold text-white uppercase transition group-hover:text-[#BE532F] text-center">Web
                        Developer</span>
                    <div
                        class="flex justify-center gap-4 mt-3 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <a href="#" class="text-white hover:text-[#BE532F] text-lg"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-white hover:text-[#BE532F] text-lg"><i
                                class="fab fa-github"></i></a>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="team-card relative group rounded-3xl overflow-hidden p-8 bg-white/10 border border-white backdrop-blur-md transform transition duration-500 hover:scale-105 hover:-translate-y-4 hover:shadow-2xl will-change-transform cursor-pointer"
                    data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/team-3.png') }}" alt="App Developer"
                        class="w-24 mx-auto rounded-full border-4 border-gradient-to-r from-purple-400 via-pink-500 to-orange-400 p-1">
                    <span
                        class="block mt-4 text-xl font-bold text-white uppercase transition group-hover:text-[#BE532F] text-center">App
                        Developer</span>
                    <div
                        class="flex justify-center gap-4 mt-3 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <a href="#" class="text-white hover:text-[#BE532F] text-lg"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-white hover:text-[#BE532F] text-lg"><i
                                class="fab fa-dribbble"></i></a>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="team-card relative group rounded-3xl overflow-hidden p-8 bg-white/10 border border-white backdrop-blur-md transform transition duration-500 hover:scale-105 hover:-translate-y-4 hover:shadow-2xl will-change-transform cursor-pointer"
                    data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('assets/team-2.png') }}" alt="Digital Marketer"
                        class="w-24 mx-auto rounded-full border-4 border-gradient-to-r from-purple-400 via-pink-500 to-orange-400 p-1">
                    <span
                        class="block mt-4 text-xl font-bold text-white uppercase transition group-hover:text-[#BE532F] text-center">Digital
                        Marketer</span>
                    <div
                        class="flex justify-center gap-4 mt-3 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <a href="#" class="text-white hover:text-[#BE532F] text-lg"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-white hover:text-[#BE532F] text-lg"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- VanillaTilt -->
    <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.2/dist/vanilla-tilt.min.js"></script>

    <script>
        // Scroll animations
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out'
        });

        // VanillaTilt hover effect
        VanillaTilt.init(document.querySelectorAll(".team-card"), {
            max: 15,
            speed: 400,
            glare: true,
            "max-glare": 0.3,
        });

        // OPTIONAL: Simple particle background animation (can replace with tsParticles or particles.js)
        const canvas = document.getElementById('particles-canvas');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        const particles = Array.from({
            length: 60
        }, () => ({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            radius: Math.random() * 2 + 1,
            dx: (Math.random() - 0.5) * 0.5,
            dy: (Math.random() - 0.5) * 0.5,
            color: 'rgba(255,255,255,0.2)'
        }));

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(p => {
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
                ctx.fillStyle = p.color;
                ctx.fill();
                p.x += p.dx;
                p.y += p.dy;
                if (p.x < 0 || p.x > canvas.width) p.dx *= -1;
                if (p.y < 0 || p.y > canvas.height) p.dy *= -1;
            });
            requestAnimationFrame(animateParticles);
        }
        animateParticles();
    </script>






    <!-- Our Clients Section -->
    <section class="w-full py-12 bg-gray-50">
        <div class="container mx-auto px-4 flex flex-col gap-4 items-center">
            <span class="text-base text-[#531954] font-medium uppercase">Our Clients</span>
            <h2 class="text-center text-4xl md:text-5xl font-bold">
                We are Trusted <br />
                in 15+ Countries Worldwide
            </h2>

            <!-- Carousel -->
            <div class="mt-12 w-full flex overflow-x-auto space-x-6 scrollbar-hide">
                <!-- Card Example -->
                <div class="flex-shrink-0 w-80 bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center gap-4">
                        <img src="assets/client-1.png" alt="Client Logo" class="w-14 h-14 object-contain">
                        <div>
                            <h3 class="text-lg font-bold">Buzfi</h3>
                            <p class="text-gray-400 text-sm">COO of Buzfi.com</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-500 text-base leading-7">
                        "Very well thought out and articulate communication. Clear milestones, deadlines and fast work.
                        Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best
                        part...always solving problems with great original ideas!"
                    </p>
                </div>

                <!-- Duplicate Cards -->
                <div class="flex-shrink-0 w-80 bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center gap-4">
                        <img src="assets/client-2.png" alt="Client Logo" class="w-14 h-14 object-contain">
                        <div>
                            <h3 class="text-lg font-bold">Buzfi Wholesale</h3>
                            <p class="text-gray-400 text-sm">CEO of Company</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-500 text-base leading-7">
                        "Very well thought out and articulate communication. Clear milestones, deadlines and fast work.
                        Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best
                        part...always solving problems with great original ideas!"
                    </p>
                </div>

                <!-- Add more cards as needed -->
                <div class="flex-shrink-0 w-80 bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center gap-4">
                        <img src="assets/client-3.png" alt="Client Logo" class="w-14 h-14 object-contain">
                        <div>
                            <h3 class="text-lg font-bold">Anwar Travels & Tours</h3>
                            <p class="text-gray-400 text-sm">Client of Company</p>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-500 text-base leading-7">
                        "Very well thought out and articulate communication. Clear milestones, deadlines and fast work.
                        Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best
                        part...always solving problems with great original ideas!"
                    </p>
                </div>
            </div>
        </div>
    </section>















@endsection



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script>
    $(document).ready(function() {
        $(".logo-carousel").owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            autoplayTimeout: 3000,
            dots: false,
            nav: false,
            responsive: {
                0: {
                    items: 2
                }, // mobile
                640: {
                    items: 3
                }, // tablet
                1024: {
                    items: 4
                }, // desktop
                1280: {
                    items: 5
                } // large screens
            }
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        const section = document.getElementById("counterSection");
        const counters = document.querySelectorAll(".counter");

        let hasRun = false;

        const startCount = () => {
            counters.forEach(counter => {
                const target = Number(counter.dataset.count);
                let count = 0;
                const speed = target / 80;

                const update = () => {
                    count += speed;
                    if (count < target) {
                        counter.innerText = Math.floor(count);
                        requestAnimationFrame(update);
                    } else {
                        counter.innerText = target + "+";
                    }
                };

                update();
            });
        };

        const observer = new IntersectionObserver(
            entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !hasRun) {
                        hasRun = true;
                        startCount();
                        observer.disconnect(); // stop observing
                    }
                });
            }, {
                threshold: 0.3
            }
        );

        observer.observe(section);

    });
</script>
