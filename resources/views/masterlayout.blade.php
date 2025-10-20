<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title') </title>



    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="{{ asset($generalsetting->favicon) }}" type="image/x-icon" /> --}}

    <!-- SEO and Canonical -->
    <meta name="author" content="Super Ecommerce" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="facebook-domain-verification" content="38f1w8335btoklo88dyfl63ba3st2e" />
    <!-- Tailwind  -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Font Awesome 6 -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css" rel="stylesheet">

     <!-- Swiper CSS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <!-- Stack for SEO and Page-specific CSS -->
    @stack('seo')
    @stack('css')


</head>

@php
    $linkClass = 'text-base font-semibold border-b-2 border-transparent hover:border-[#F26822] hover:text-[#F26822] transition duration-300';
    $activeClass = 'text-[#F26822] border-[#F26822]';
    $linkMobileClass = 'text-base font-semibold  hover:text-[#F26822] transition duration-300';
    $activeMobileClass = 'text-[#F26822]';
@endphp

<body>



    {{-- top header section start --}}
    <section class="w-full bg-[#531954] ">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <a href="#" class="py-2 px-2 border-l border-[#FFFFFF33] text-white text-sm"><i
                        class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="py-2 px-2 border-l border-[#FFFFFF33] text-white text-sm"><i
                        class="fa-brands fa-instagram"></i></a>
                <a href="#" class="py-2 px-2 border-l border-[#FFFFFF33] text-white text-sm"><i
                        class="fa-brands fa-x-twitter"></i></a>
                <a href="#" class="py-2 px-2 border-l border-r border-[#FFFFFF33] text-white text-sm"><i
                        class="fa-brands fa-linkedin"></i></a>

            </div>

            <div class="flex items-center gap-4">
                <div class="sm:flex hidden items-center gap-2 text-sm text-white border-r border-[#FFFFFF33] pr-2">
                    <span><i class="fa-solid fa-phone"></i></span>
                    <span>+880 1611-536353</span>

                </div>
                <div class="flex items-center gap-2 text-sm text-white  pl-2">
                    <span><i class="fa-solid fa-envelope"></i></span>
                    <span>jubaidul@spiretecbd.com</span>

                </div>

            </div>

        </div>
    </section>
    {{-- top header section end --}}

    {{-- navbar section start --}}
    <section class="w-full">
        <div class="container mx-auto px-4 flex justify-between items-center py-4">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-12">
            </a>

            {{-- middle --}}
            <div class="lg:flex hidden items-center gap-6">
                <a href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? $activeClass : '' }} {{ $linkClass }}">Home</a>
                <a href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? $activeClass : '' }} {{ $linkClass }}">About us</a>

                <!-- Services Dropdown -->
                <div class="relative group">
                    <span class="{{ $linkClass }} flex items-center gap-1 cursor-pointer">
                        Services
                        <i class="fa-solid fa-caret-down"></i>
                    </span>
                    <div
                        class="absolute top-[1.7rem] left-1/2 transform -translate-x-1/2 z-10 w-[15rem] bg-white p-4 shadow-md rounded hidden group-hover:flex flex-col gap-2 transition duration-200">
                        <a href="{{ route('web') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase hover:translate-x-2 hover:text-[#F26822] transition duration-200">Web
                            Development</a>
                        <a href="{{ route('web') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase hover:translate-x-2 hover:text-[#F26822] transition duration-200">Software
                            Development</a>
                        <a href="{{ route('mobile') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase hover:translate-x-2 hover:text-[#F26822] transition duration-200">Mobile
                            App Development</a>
                        <a href="{{ route('web') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase hover:translate-x-2 hover:text-[#F26822] transition duration-200">E-commerce
                            Services</a>
                        <a href="{{ route('web') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase hover:translate-x-2 hover:text-[#F26822] transition duration-200">Digital
                            Marketing</a>
                    </div>
                </div>

                <!-- Products Dropdown -->
                <div class="relative group">
                    <span class="{{ $linkClass }} flex items-center gap-1 cursor-pointer">
                        Products
                        <i class="fa-solid fa-caret-down"></i>
                    </span>
                    <div
                        class="absolute top-[1.7rem] left-1/2 transform -translate-x-1/2 z-10 w-[15rem] bg-white p-4 shadow-md rounded hidden group-hover:flex flex-col gap-2 transition duration-200">
                        <a href="{{ route('ecommercesolution') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase   hover:text-[#F26822] hover:translate-x-2 transition duration-200">E-commerce
                            Solution</a>
                        <a href="{{ route('fooddelivery') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase   hover:text-[#F26822] hover:translate-x-2 transition duration-200">Food
                            Delivery App</a>
                        <a href="{{ route('possoftware') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase   hover:text-[#F26822] hover:translate-x-2 transition duration-200">POS
                            Software</a>
                    </div>
                </div>

                <a href="{{ route('project') }}"
                    class="{{ request()->routeIs('project') ? $activeClass : '' }} {{ $linkClass }}">Projects</a>
                <a href="{{ route('contact') }}"
                    class="{{ request()->routeIs('contact') ? $activeClass : '' }} {{ $linkClass }}">Contacts</a>
            </div>
            {{-- right --}}
            <div class="flex items-center gap-4 relative" id="search-toggle-wrapper">
                <!-- Toggle Icon -->
                <span id="search-toggle" class="cursor-pointer">
                    <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
                </span>

                <!-- about icon -->
                <span id="aboutSidebarToggle" class="cursor-pointer lg:block hidden"><i
                        class="fa-regular fa-hospital"></i></span>
                <span id="menuSidebarToggle" class="cursor-pointer block lg:hidden"><i
                        class="fa-solid fa-bars"></i></span>

                <!-- Search Dropdown -->
                <div id="search-box"
                    class="absolute top-[3rem] right-0 w-[15rem] hidden flex-col gap-2 bg-white rounded-md shadow-md p-2 z-50">
                    <form action="" method="GET" class="w-full flex">
                        <input type="text" name="query"
                            class="w-[80%] bg-[#F6F6F6] py-2 px-2 rounded-l outline-none" placeholder="Search...">
                        <button type="submit"
                            class="w-[20%] rounded-r bg-[#C35834] text-white flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
            </div>

        </div>

        {{-- about sidebar --}}

        <div id="aboutSidebar"
            class="fixed top-0 right-0 w-[20rem] h-screen bg-white z-50 transform translate-x-full transition-transform duration-300 ease-in-out shadow-lg">
            <div class="p-4 flex items-center justify-between border-b">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-8">
                </a>
                <span id="aboutSidebarClose" class="cursor-pointer text-lg">
                    <i class="fa-solid fa-xmark"></i>
                </span>
            </div>

            <div class="p-4 overflow-y-auto max-h-[calc(100vh-4rem)]">
                <p class="text-sm text-gray-600">
                    Over 10 years we help companies reach their financial and branding goals. Engitech is a
                    values-driven technology agency dedicated.
                </p>

                <h2 class="text-xl font-bold mt-4">Gallery</h2>
                <div class="mt-2 w-full grid grid-cols-2 gap-2">
                    <img src="{{ asset('assets/slide2-home1.jpg') }}" alt="Logo" class="w-full h-[5rem]">
                    <img src="{{ asset('assets/slide2-home1.jpg') }}" alt="Logo" class="w-full h-[5rem]">
                    <img src="{{ asset('assets/slide2-home1.jpg') }}" alt="Logo" class="w-full h-[5rem]">
                    <img src="{{ asset('assets/slide2-home1.jpg') }}" alt="Logo" class="w-full h-[5rem]">

                </div>

                <h2 class="text-xl font-bold mt-4">Contact</h2>

                <div class="mt-2 flex flex-col gap-2">
                    <div class="flex gap-1">
                        <i class="fa-solid fa-location-dot mt-1"></i>
                        <p>87, BNS Center, Dhaka-Mymensing Highway, Sector: 07, Uttara, Dhaka, Bangladesh</p>

                    </div>
                    <div class="flex gap-1">
                        <i class="fa-solid fa-envelope mt-1"></i>
                        <p>info@spiretecbd.com</p>

                    </div>
                    <div class="flex gap-1">
                        <i class="fa-solid fa-phone mt-1"></i>
                        <p>+880 1611-536353</p>

                    </div>
                </div>

                <div class="mt-4 flex items-center gap-4">
                    <a href="#" class=" text-xl"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="text-xl"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class=" text-xl"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="text-xl"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>

        {{-- menu side bar --}}
        <div id="menuSidebar"
            class="lg:hidden block fixed top-0 right-0 w-[20rem] h-screen bg-white z-50 transform translate-x-full transition-transform duration-300 ease-in-out shadow-lg">
            <div class="p-4 flex items-center justify-between border-b">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-8">
                </a>
                <span id="menuSidebarClose" class="cursor-pointer text-lg">
                    <i class="fa-solid fa-xmark"></i>
                </span>
            </div>

            <div class="p-6 overflow-y-auto max-h-[calc(100vh-4rem)] flex flex-col gap-4">

                {{-- Home --}}
                <a href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? $activeMobileClass : '' }} {{ $linkMobileClass }}">Home</a>

                {{-- About --}}
                <a href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? $activeMobileClass : '' }} {{ $linkMobileClass }}">About us</a>

                {{-- Services Dropdown --}}
                <div class="group">
                    <span class="{{ $linkMobileClass }} flex items-center gap-1 cursor-pointer">
                        Services
                        <i class="fa-solid fa-caret-down"></i>
                    </span>
                    <div class="hidden group-hover:flex flex-col gap-4 mt-4 ml-4 transition duration-300">
                        <a href="{{ route('web') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase hover:text-[#F26822] hover:translate-x-2 transition duration-200">Web
                            Development</a>
                        <a href="{{ route('web') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase hover:text-[#F26822] hover:translate-x-2 transition duration-200">Software
                            Development</a>
                        <a href="{{ route('mobile') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase hover:text-[#F26822] hover:translate-x-2 transition duration-200">Mobile
                            App Development</a>
                        <a href="{{ route('web') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase hover:text-[#F26822] hover:translate-x-2 transition duration-200">E-commerce
                            Services</a>
                        <a href="{{ route('web') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase hover:text-[#F26822] hover:translate-x-2 transition duration-200">Digital
                            Marketing</a>
                    </div>
                </div>

                {{-- Products Dropdown --}}
                <div class="group">
                    <span class="{{ $linkMobileClass }} flex items-center gap-1 cursor-pointer">
                        Products
                        <i class="fa-solid fa-caret-down"></i>
                    </span>
                    <div class="hidden group-hover:flex flex-col gap-4 mt-4 ml-4 transition duration-300">
                        <a href="{{ route('ecommercesolution') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase hover:text-[#F26822] hover:translate-x-2 transition duration-200">E-commerce
                            Solution</a>
                        <a href="{{ route('fooddelivery') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase hover:text-[#F26822] hover:translate-x-2 transition duration-200">Food
                            Delivery App</a>
                        <a href="{{ route('possoftware') }}"
                            class="text-sm font-medium text-[#1a1b1e] uppercase hover:text-[#F26822] hover:translate-x-2 transition duration-200">POS
                            Software</a>
                    </div>
                </div>

                {{-- Projects --}}
                <a href="{{ route('project') }}"
                    class="{{ request()->routeIs('project') ? $activeMobileClass : '' }} {{ $linkMobileClass }}">Projects</a>

                {{-- Contacts --}}
                <a href="{{ route('contact') }}"
                    class="{{ request()->routeIs('contact') ? $activeMobileClass : '' }} {{ $linkMobileClass }}">Contacts</a>
            </div>

        </div>
    </section>

    {{-- navbar section end --}}

    <div id="content">
        @yield('content')
    </div>


    {{-- footer start --}}
    <section class="w-full py-[3rem] bg-[#6F3E6F] flex flex-col ">
        <div class="container mx-auto px-4 grid md:grid-cols-4 grid-cols-2 gap-4">
            <div class="flex flex-col gap-2">
                <h2 class="text-xl font-bold text-white mb-2">Services</h2>
                <a href="#" class="text-[#DBDBDB] hover:underline hover:text-[#CB513A]">Web Development</a>
                <a href="#" class="text-[#DBDBDB] hover:underline hover:text-[#CB513A]">Software Development </a>
                <a href="#" class="text-[#DBDBDB] hover:underline hover:text-[#CB513A]">Mobile Development </a>
                <a href="#" class="text-[#DBDBDB] hover:underline hover:text-[#CB513A]">E-commerce Services</a>
                <a href="#" class="text-[#DBDBDB] hover:underline hover:text-[#CB513A]">Digital Marketing</a>
                

            </div>
            <div class="flex flex-col gap-2">
                <h2 class="text-xl font-bold text-white mb-2">Products</h2>
                <a href="#" class="text-[#DBDBDB] hover:underline hover:text-[#CB513A]">E-commerce Solution</a>
                <a href="#" class="text-[#DBDBDB] hover:underline hover:text-[#CB513A]">Food Delivery App </a>
                <a href="#" class="text-[#DBDBDB] hover:underline hover:text-[#CB513A]">POS Software</a>
                
                

            </div>
            <div class="flex flex-col gap-2">
                <h2 class="text-xl font-bold text-white mb-2">Company</h2>
                <a href="#" class="text-[#DBDBDB] hover:underline hover:text-[#CB513A]">About Company</a>
                <a href="#" class="text-[#DBDBDB] hover:underline hover:text-[#CB513A]">Blog & News </a>
                
                

            </div>
            <div class="flex flex-col gap-2">
                <h2 class="text-xl font-bold text-white mb-2">News Letter</h2>
                <p class="text-[#DBDBDB]">Follow our newsletter to stay updated about agency.</p>

                <form action="" class="w-full flex items-center">
                    <input type="text" placeholder="Email" class="w-[80%] py-2 px-4 bg-[#FFFFFF] rounded-l-md outline-none ">
                    <button class="w-[20%] bg-[#F26822] py-2 rounded-r-md text-white cursor-pointer"><i class="fa-solid fa-paper-plane"></i></button>
                </form>
                

            </div>


        </div>

        <div class="container mt-8 mx-auto px-4 flex sm:flex-row flex-col justify-between items-center">
             <a href="{{ route('home') }}">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-12">
            </a>
            <p class="text-[#DBDBDB]">Copyright © 2025 Spire Technology LTd. All Rights Reserved.</p>
        </div>

    </section>
    {{-- footer end --}}

    {{-- search --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleBtn = document.getElementById("search-toggle");
            const searchBox = document.getElementById("search-box");
            const icon = document.getElementById("search-icon");

            let isOpen = false;

            toggleBtn.addEventListener("click", function() {
                isOpen = !isOpen;
                if (isOpen) {
                    searchBox.classList.remove("hidden");
                    icon.classList.remove("fa-magnifying-glass");
                    icon.classList.add("fa-xmark");
                } else {
                    searchBox.classList.add("hidden");
                    icon.classList.remove("fa-xmark");
                    icon.classList.add("fa-magnifying-glass");
                }
            });

            // Close on click outside
            document.addEventListener("click", function(e) {
                const wrapper = document.getElementById("search-toggle-wrapper");
                if (!wrapper.contains(e.target)) {
                    searchBox.classList.add("hidden");
                    icon.classList.remove("fa-xmark");
                    icon.classList.add("fa-magnifying-glass");
                    isOpen = false;
                }
            });
        });
    </script>

    {{-- about side --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sidebar = document.getElementById("aboutSidebar");
            const toggleBtn = document.getElementById("aboutSidebarToggle");
            const closeBtn = document.getElementById("aboutSidebarClose");

            toggleBtn.addEventListener("click", () => {
                sidebar.classList.remove("translate-x-full");
                sidebar.classList.add("translate-x-0");
            });

            closeBtn.addEventListener("click", () => {
                sidebar.classList.add("translate-x-full");
                sidebar.classList.remove("translate-x-0");
            });

            // Optional: click outside to close
            document.addEventListener("click", (e) => {
                const isClickInsideSidebar = sidebar.contains(e.target);
                const isClickOnToggle = toggleBtn.contains(e.target);

                if (!isClickInsideSidebar && !isClickOnToggle) {
                    sidebar.classList.add("translate-x-full");
                    sidebar.classList.remove("translate-x-0");
                }
            });
        });
    </script>

    {{-- menu side --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sidebar = document.getElementById("menuSidebar");
            const toggleBtn = document.getElementById("menuSidebarToggle");
            const closeBtn = document.getElementById("menuSidebarClose");

            toggleBtn.addEventListener("click", () => {
                sidebar.classList.remove("translate-x-full");
                sidebar.classList.add("translate-x-0");
            });

            closeBtn.addEventListener("click", () => {
                sidebar.classList.add("translate-x-full");
                sidebar.classList.remove("translate-x-0");
            });

            // Optional: click outside to close
            document.addEventListener("click", (e) => {
                const isClickInsideSidebar = sidebar.contains(e.target);
                const isClickOnToggle = toggleBtn.contains(e.target);

                if (!isClickInsideSidebar && !isClickOnToggle) {
                    sidebar.classList.add("translate-x-full");
                    sidebar.classList.remove("translate-x-0");
                }
            });
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>





</body>

</html>
