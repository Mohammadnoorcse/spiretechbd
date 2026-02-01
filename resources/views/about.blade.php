@extends('masterlayout')
@section('title', 'Spire Technology Limited-About')

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
            <h2 class="text-4xl font-bold text-white">About Us</h2>
        </div>

    </section>
    {{-- header section end --}}

    {{-- about section start --}}
    <section class="w-full py-6">
        <div class="container mx-auto px-4">
            <div class="flex md:flex-row flex-col gap-4 items-center">
                <div class="md:w-1/2 w-full flex flex-col gap-4">
                    <span class="text-base font-bold text-[#531954]">About Us</span>
                    <h2 class="text-4xl font-bold"> Spire Technology</h2>
                    <p class="text-[#6d6d6d]">We are  Spire Technology, a complete team based on Bangladesh working together
                        as a Tech & IT Solution online platform. We are building tech bridge with Web Development, Software
                        Development, Mobile App Development, E-Commerce Solution, Graphics Design, SEO & Digital Marketing
                        Area for everyone, everywhere with honesty, innovation, and high quality as the core of our
                        operations</p>

                    <div class="mt-4 flex gap-4 items-center">
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
                <div class="md:w-1/2 w-full flex gap-4 md:mt-0 mt-[2rem]">
                    <div class="flex flex-col gap-4">
                        <div class="relative">
                            <img src="{{ asset('assets/image-box1.jpg') }}" alt="Logo"
                                class="opacity-50 hover:opacity-100">
                            <span
                                class="absolute left-1/2 top-1/2 transform -translate-x-1/2 translate-y-1/2 text-xl font-bold text-white">ABOUT
                                US</span>
                        </div>
                        <div class="relative">
                            <img src="{{ asset('assets/image-box3.jpg') }}" alt="Logo"
                                class="opacity-50 hover:opacity-100">
                            <span
                                class="absolute left-1/2 top-1/2 transform -translate-x-1/2 translate-y-1/2 text-xl font-bold text-white">OUR
                                MISSION</span>
                        </div>



                    </div>
                    <div class="flex flex-col gap-4 mt-8">
                        <div class="relative">
                            <img src="{{ asset('assets/image-box2.jpg') }}" alt="Logo"
                                class="opacity-50 hover:opacity-100">
                            <span
                                class="absolute left-1/2 top-1/2 transform -translate-x-1/2 translate-y-1/2 text-xl font-bold text-white">OUR
                                VISION</span>
                        </div>
                        <div class="relative">
                            <img src="{{ asset('assets/image-box4.jpg') }}" alt="Logo"
                                class="opacity-50 hover:opacity-100">
                            <span
                                class="absolute left-1/2 top-1/2 transform -translate-x-1/2 translate-y-1/2 text-xl font-bold text-white">OUR
                                SERVICE</span>
                        </div>


                    </div>



                </div>

            </div>
        </div>

    </section>
    {{-- about section end --}}

    {{-- choose section start --}}
    <section class="w-full py-6">
        <div class="container mx-auto px-4 flex flex-col gap-3">
            <span class="text-base font-bold text-[#531954]">Why Choose us</span>
            <h2 class="text-4xl font-bold ">We Provide the Best Solution within Short time</h2>
            <p class="text-[#6d6d6d]">With Spire Technology, explore the tranquility, well-being, and health benefits of our premium quality services & products. Our natural formulations are crafted with care and precision to complement your daily grind, offering effective relief for stress, anxiety and discomfort, all while restoring balance to your day to day. Envision the calming comfort of our full-spectrum oils or the delectable flavors of our gummy supplements—each taste and droplet filled with nature’s vitality.</p>
            <p class="text-[#6d6d6d] my-4">With Spire Technology, explore the tranquility, well-being, and health benefits of our premium quality services & products. Our natural formulations are crafted with care and precision to complement your daily grind, offering effective relief for stress, anxiety and discomfort, all while restoring balance to your day to day. Envision the calming comfort of our full-spectrum oils or the delectable flavors of our gummy supplements—each taste and droplet filled with nature’s vitality.</p>
            <p class="text-[#6d6d6d]">With Spire Technology, explore the tranquility, well-being, and health benefits of our premium quality services & products. Our natural formulations are crafted with care and precision to complement your daily grind, offering effective relief for stress, anxiety and discomfort, all while restoring balance to your day to day. Envision the calming comfort of our full-spectrum oils or the delectable flavors of our gummy supplements—each taste and droplet filled with nature’s vitality.</p>

        </div>

    </section>
    {{-- choose section end --}}

    {{-- mission and vision start --}}
    <section class="w-full py-[5rem] bg-[#531954]">
        <div class="container mx-auto px-4 flex lg:flex-row flex-col gap-[2rem]">
            <div class="lg:w-1/2 w-full ">
                <img src="{{ asset('assets/image1-about.png') }}" alt="Logo" class="">
            </div>
            <div class="lg:w-1/2 w-full bg-[url('/assets/bg-art-6.png')] bg-no-repeat bg-cover bg-center ">
                <span class="text-base font-bold text-white">What We Want To DO</span>
                <h2 class="text-5xl font-bold text-white mt-1">Our Vision</h2>
                <p class="text-base text-white mt-[2rem]">Our organization is built on a vision of global impact, breaking down geographical barriers. Our goal is to establish ourselves as a reliable name in the tech world, known for providing innovative solutions to real-world problems.</p>

                <h2 class="text-5xl font-bold text-white my-[2rem]">Our Mission</h2>
                <p class="text-base text-white mt-[2rem]">We know our mission: to use our unique and flexible methods, we try to make people’s lives simpler, more productive and more fulfilling. Through our services, products, or platforms, we are committed to</p>

                <ul class="list-disc list-inside space-y-2 mt-4 text-white">
                    <li>Delivering seamless and reliable digital solutions.</li>
                    <li>Making it affordable and accessible for everyone</li>
                    <li>Developing trust with customers and partners and driving sustainable growth with them.</li>
                </ul>

            </div>


        </div>
    </section>
    {{-- mission and vision end --}}

    {{-- service section start --}}
    <section class="w-full py-[2rem]">
        <div class="container mx-auto px-4">
            <span class="text-base font-bold text-[#531954]">our service</span>
            <h2 class="text-4xl font-bold mt-4">Our Offer for your Business Growth</h2>
            <p class="mt-4 text-[#414141]">From unparalleled solutions to innovative products, our offering caters to the diverse needs of the industry. We believe that leveraging technology to solve complex problems is not enough— that we need to provide users with an unparalleled experience, be it through software solutions, or digital platforms; that not only deliver efficiencies but are easy to use as well. Below are some of the key areas that we cater for:</p>
            <ul class="list-disc list-inside space-y-2 mt-4 text-[#414141]">
                <li>Digital Services</li>
                <li>ConsumerTech & Enterprise Products</li>
                <li>Expert Consulting</li>
                <li>E-Commerce Solutions</li>
            </ul>

        </div>

    </section>
    {{-- service section start --}}
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
