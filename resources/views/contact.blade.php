@extends('masterlayout')
@section('title', 'about')

@section('content')
  {{-- header section start --}}
    <section class="w-full bg-[#531954] py-6">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-white">Contact Us</h2>
        </div>

    </section>
    {{-- header section end --}}

    <section class="w-full py-[5rem]">
        <div class="container mx-auto px-4 flex lg:flex-row flex-col gap-4">
            <div class="lg:w-1/2 w-full ">
                <span class="text-[14px] font-bold text-[#531954]">// contact details</span>
                <h2 class="text-4xl font-bold text-[#1b1d21]">Contact us</h2>
                <p class="text-base text-[#7A7A7A] mt-4">Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>

                <div class="w-full p-[1rem] hover:shadow rounded-md mt-4 flex gap-4">
                    <span class="text-[#EF6623] text-3xl"><i class="fa-solid fa-earth-americas"></i></span>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-base font-bold">Our Address:</h2>
                        <p class="text-[#7A7A7A]">87, BNS Center, Dhaka-Mymensing Highway, Sector: 07, Uttara, Dhaka, Bangladesh</p>

                    </div>

                </div>
                <div class="w-full p-[1rem] hover:shadow rounded-md mt-4 flex gap-4">
                    <span class="text-[#EF6623] text-3xl"><i class="fa-solid fa-envelope"></i></span>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-base font-bold">Our Mailbox:</h2>
                        <p class="text-[#7A7A7A]">info@spiretecbd.com</p>

                    </div>

                </div>
                <div class="w-full p-[1rem] hover:shadow rounded-md mt-4 flex gap-4">
                    <span class="text-[#EF6623] text-3xl"><i class="fa-solid fa-phone"></i></span>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-base font-bold">Our Phone:</h2>
                        <p class="text-[#7A7A7A]">+880 1611-536353</p>

                    </div>

                </div>

            </div>

            <div class="lg:w-1/2 w-full p-[4rem] bg-gradient-to-r from-[#D3592C] to-[#612050]">
                <h2 class="text-4xl font-bold text-white">Ready to Get Started?</h2>
                <p class="text-white mt-1">Your email address will not be published. Required fields are marked *</p>

                <form action="" class="flex flex-col gap-3 mt-4">
                    <input type="text" class="bg-[#BF7A76] py-2 px-4 outline-none rounded-md text-white" placeholder="Your Name">
                    <input type="text" class="bg-[#BF7A76] py-2 px-4 outline-none rounded-md text-white" placeholder="Your Email">
                    <textarea rows="8" type="text" class="bg-[#BF7A76] py-2 px-4 outline-none rounded-md text-white" placeholder="Your Email"> </textarea>
                    <button class="py-2 bg-[#F26822] text-white rounded-md">Send Message</button>

                </form>

            </div>

        </div>

    </section>
    
@endsection