@extends('masterlayout')
@section('title', 'Spire Technology Limited-Mobile App Development')

@push('css')
    <style>
        .circle-1 {
            animation: pulseRing 2s infinite;

        }

        .circle-1:nth-child(2) {
            animation-delay: 1s;
        }

        @keyframes pulseRing {
            0% {
                transform: scale(1);
                opacity: 0.8;
            }

            50% {
                transform: scale(1.5);
                opacity: 0.4;
            }

            100% {
                transform: scale(2);
                opacity: 0;
            }
        }
    </style>
@endpush

@section('content')

{{-- header section start --}}
    <section class="w-full bg-[#531954] py-6">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-white">POS Software</h2>
        </div>

    </section>
    {{-- header section end --}}

    {{-- benefit section start --}}
    <section class="w-full py-[2rem]">
        <div class="container mx-auto px-4">
            <div class="flex flex-col gap-2 justify-center items-center">
                <span class="text-base font-bold text-[#531954]">// business benefits</span>
                <h2 class="text-4xl font-bold mt-2">Mobile Apps Benefits</h2>

            </div>

            <div class="w-full grid lg:grid-cols-3 gap-4">
                {{-- left --}}
                <div class="lg:bg-[url('assets/bg-art-6.png')] bg-no-repeat flex flex-col items-end gap-[3rem]  pt-[2rem]">

                    <div class="flex gap-4">
                        <div class="flex flex-col gap-2 items-end">
                            <h2 class="text-xl font-bold">Software as a Service</h2>
                            <p class="text-end text-[#54595F]">51% of smartphone users have<br> discovered a new company or product.</p>

                        </div>
                        <span class="text-3xl text-[#531954]"><i class="fa-solid fa-laptop"></i></span>

                    </div>
                    <div class="flex gap-4">
                        <div class="flex flex-col gap-2 items-end">
                            <h2 class="text-xl font-bold">Internet of Things</h2>
                            <p class="text-end text-[#54595F]">Move your SaaS products to mobile,<br> Companies with a professional mobile.</p>

                        </div>
                        <span class="text-3xl text-[#531954]"><i class="fa-solid fa-mobile-retro"></i></span>

                    </div>
                    <div class="flex gap-4">
                        <div class="flex flex-col gap-2 items-end">
                            <h2 class="text-xl font-bold">Gambling & Betting</h2>
                            <p class="text-end text-[#54595F]">Develop a custom mobile app to thrive in<br> a mobile market worth over $100.</p>

                        </div>
                        <span class="text-3xl text-[#531954]"><i class="fa-solid fa-computer"></i></span>

                    </div>
                </div>
                {{-- middle --}}
                <div>
                    <img src="{{ asset('assets/app-watch-1.jpg') }}" alt="team" class="">
                </div>
                {{-- right --}}
                <div class="flex flex-col gap-[3rem]  pt-[2rem]">

                    <div class="flex gap-4">
                        <span class="text-3xl text-[#531954]"><i class="fa-solid fa-hashtag"></i></span>
                        <div class="flex flex-col gap-2 ">
                            <h2 class="text-xl font-bold">Social Media</h2>
                            <p class="text-[#54595F]">80% of time users spend in social<br> media from their mobile devices.</p>

                        </div>


                    </div>
                    <div class="flex gap-4">
                        <span class="text-3xl text-[#531954]"><i class="fa-solid fa-building"></i></span>
                        <div class="flex flex-col gap-2 ">
                            <h2 class="text-xl font-bold">Business Management</h2>
                            <p class="text-[#54595F]">65% of sales representatives have<br> achieved their quotas by adopting.</p>

                        </div>


                    </div>
                    <div class="flex gap-4">
                        <span class="text-3xl text-[#531954]"><i class="fa-solid fa-signal"></i></span>
                        <div class="flex flex-col gap-2 ">
                            <h2 class="text-xl font-bold">Trading Systems</h2>
                            <p class="text-[#54595F]">We provide top-tier mobile app<br>development services for brokers.</p>

                        </div>


                    </div>


                </div>

            </div>

        </div>

    </section>
    {{-- benefit section end --}}

    {{-- country start --}}
    <section class="w-full py-[2rem]">
        <div class="container mx-auto px-4 grid lg:grid-cols-4 sm:grid-cols-2 lg:h-[30rem]">
            <div class="w-full h-full order-1">
                <img src="{{ asset('assets/fun-fact1.jpg') }}" alt="team" class="w-full h-full">
            </div>
            <div class="w-full h-full bg-[#F8F8F8] flex flex-col gap-4 justify-center items-center p-4 order-2">
               <div class="w-[60%]">
                 <h1 class="text-5xl font-bold text-[#F26822]">15+</h1>
                <h3 class="text-3xl font-bold mt-2">Countries Worldwide</h3>
                <p class="mt-4 text-[#333] leading-8">To succeed, every software solution must be deeply integrated into the existing tech environment...</p>
               </div>

            </div>
            <div class="w-full h-full lg:order-3 sm:order-4 order-3">
                <img src="{{ asset('assets/fun-fact2.jpg') }}" alt="team" class="w-full h-full">
            </div>
             <div class="w-full h-full bg-[#F8F8F8] flex flex-col gap-4 justify-center items-center p-4 lg:order-4 sm:order-3 order-4">
               <div class="w-[60%]">
                 <h1 class="text-5xl font-bold text-[#F26822]">2.5k</h1>
                <h3 class="text-3xl font-bold mt-2">Happy Customers</h3>
                <p class="mt-4 text-[#333] leading-8">To succeed, every software solution must be deeply integrated into the existing tech environment...</p>
               </div>

            </div>

        </div>

    </section>
    {{-- country end --}}


    {{-- about section start --}}
    <section class="w-full py-[3rem]">
        <div class="container mx-auto px-4">
            <div class="flex md:flex-row flex-col gap-[3rem] items-center">

                <div class="md:w-1/2 w-full flex gap-4 md:mt-0 mt-[2rem]">
                   <img src="{{ asset('assets/apple-w.png') }}" alt="team" class="w-full h-full">



                </div>

                 <div class="md:w-1/2 w-full flex flex-col gap-4">
                    <span class="text-base font-bold text-[#531954]">// what we offer</span>
                    <h2 class="text-5xl font-bold"> Your Partner for Software Innovation</h2>
                    <p class="text-[#6d6d6d] leading-8">Engitech is the partner of choice for many of the world’s leading enterprises, SMEs and technology challengers. We help businesses elevate their value through custom software development, product design, QA and consultancy services.</p>
                    <p class="font-medium">We can help to maintain and modernize your IT infrastructure and solve various infrastructure-specific issues a business may face.</p>
                    <div class="mt-[3rem] flex gap-4 items-center">
                        <!-- Clickable Video Play Button -->
                        <div id="videoTrigger"
                            class="w-[4rem] h-[4rem] bg-[#F26822] rounded-full flex justify-center items-center relative cursor-pointer">
                            <i class="fa-solid fa-play text-white z-10"></i>
                            <span class="circle-1 absolute w-full h-full rounded-full border border-[#f26822] z-0"></span>
                            <span class="circle-1 absolute w-full h-full rounded-full border border-[#f26822] z-0"></span>
                        </div>
                        <span class="text-xl font-bold">video showcase</span>
                    </div>

                    <!-- Video Modal -->
                    <div id="videoModal"
                        class="fixed inset-0 bg-black bg-opacity-70 flex justify-center items-center z-50 hidden">
                        <div class="bg-white rounded-lg overflow-hidden relative max-w-2xl w-full">
                            <!-- Close Button -->
                            <button id="closeModal"
                                class="absolute top-2 right-2 text-black text-2xl font-bold">&times;</button>

                            <!-- Local Video Player -->
                            <div class="w-full h-96">
                                <video id="videoPlayer" class="w-full h-full" controls>
                                    <source src="{{ asset('assets/about_spire-technology.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>




                </div>

            </div>
        </div>

    </section>
    {{-- about section end --}}


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

@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const videoTrigger = document.getElementById("videoTrigger");
        const modal = document.getElementById("videoModal");
        const closeModal = document.getElementById("closeModal");
        const videoPlayer = document.getElementById("videoPlayer");

        videoTrigger.addEventListener("click", () => {
            modal.classList.remove("hidden");
            videoPlayer.currentTime = 0;
            videoPlayer.play();
        });

        closeModal.addEventListener("click", () => {
            modal.classList.add("hidden");
            videoPlayer.pause();
            videoPlayer.currentTime = 0;
        });

        // Optional: Click outside to close
        modal.addEventListener("click", (e) => {
            if (e.target === modal) {
                modal.classList.add("hidden");
                videoPlayer.pause();
                videoPlayer.currentTime = 0;
            }
        });
    });
</script>
