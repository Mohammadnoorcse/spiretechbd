@extends('masterlayout')
@section('title', 'Spire Technology Limited-Digital Marketing Services')

@section('content')


{{-- HERO SECTION --}}
{{-- ====================== --}}
<section class="relative w-full bg-[#531954] overflow-hidden py-32">
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-6" data-aos="fade-up">
            Digital Marketing Services That Drive Real Business Growth
        </h1>
        <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto mb-8" data-aos="fade-up" data-aos-delay="100">
            We help brands attract, engage, and convert the right audience through data-driven digital marketing strategies designed for measurable results.
        </p>

        <div class="flex justify-center gap-6" data-aos="fade-up" data-aos-delay="200">
            {{-- CTA Gradient Rolling Text --}}
            <button class="relative overflow-hidden group bg-white text-[#531954] font-bold px-8 py-3 rounded-lg shadow-lg transition-all duration-500 hover:text-white hover:bg-gradient-to-r hover:from-[#FF6A00] hover:via-[#FF00FF] hover:to-[#FFEA00]">
                <span class="block relative h-6 overflow-hidden">
                    <span class="block transition-transform duration-700 ease-in-out transform group-hover:-translate-y-full bg-clip-text text-transparent bg-gradient-to-r from-[#FF6A00] via-[#FF00FF] to-[#FFEA00]">
                        Get a Free Consultation
                    </span>
                    <span class="absolute top-full left-0 w-full block transition-transform duration-700 ease-in-out transform group-hover:-translate-y-full bg-clip-text text-transparent bg-gradient-to-r from-[#FF6A00] via-[#FF00FF] to-[#FFEA00]">
                        Get a Free Consultation
                    </span>
                </span>
            </button>

            <button class="bg-transparent border-2 border-white text-white font-bold px-8 py-3 rounded-lg transition-all duration-500 hover:bg-white hover:text-[#531954]">
                View Case Studies
            </button>
        </div>

        {{-- Trust Indicators --}}
        <div class="mt-8 flex justify-center gap-6 text-lg text-white/80" data-aos="fade-up" data-aos-delay="300">
            <span>✔ ROI-Focused Strategies</span>
            <span>✔ Data-Driven Campaigns</span>
            <span>✔ Multi-Channel Expertise</span>
        </div>
    </div>

    {{-- Abstract background shapes --}}
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
        <div class="w-80 h-80 bg-pink-500/30 rounded-full absolute -top-20 -left-20 filter blur-3xl"></div>
        <div class="w-96 h-96 bg-purple-400/20 rounded-full absolute bottom-0 right-0 filter blur-3xl"></div>
        <div class="w-72 h-72 bg-yellow-300/20 rounded-full absolute top-1/2 left-1/3 filter blur-2xl"></div>
    </div>
</section>


{{-- INTRODUCTION / OVERVIEW --}}
{{-- ====================== --}}
<section class="py-24 bg-[#531954]">
    <div class="container mx-auto px-4 text-center text-white/90" data-aos="fade-right">
        <h2 class="text-4xl font-bold mb-6">Full-Service Digital Marketing Agency</h2>
        <p class="text-lg md:text-xl leading-relaxed max-w-4xl mx-auto">
            Spire Technology is a results-driven digital marketing agency helping businesses grow their online presence, generate qualified leads, and increase revenue. We combine strategy, creativity, and performance marketing to deliver campaigns that produce measurable outcomes.
        </p>
        <p class="mt-4 text-lg md:text-xl leading-relaxed max-w-4xl mx-auto">
            From brand awareness to lead generation and conversion optimization, our digital marketing solutions are tailored to your business goals, industry, and target audience. Every campaign is backed by data, insights, and continuous optimization to ensure maximum return on investment.
        </p>
    </div>
</section>


{{-- SERVICES SECTION --}}
{{-- ====================== --}}
<section class="py-24 bg-[#531954]">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-white text-center mb-16" data-aos="fade-up">Our Digital Marketing Services</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
            {{-- Service Card Example --}}
            <div class="p-8 bg-white/95 backdrop-blur-sm rounded-3xl border border-white/10 shadow-lg transition-all duration-500 hover:shadow-2xl hover:scale-105 hover:-translate-y-2 tilt-card" data-aos="fade-up">
                <i class="fa-solid fa-magnifying-glass text-4xl text-[#531954] mb-4 transition-transform duration-500 group-hover:scale-125"></i>
                <h3 class="text-2xl font-bold mb-2 text-[#531954]">Search Engine Optimization (SEO)</h3>
                <p class="text-gray-700 mb-2">
                    Improve your website’s visibility and rankings on search engines.
                </p>
                <ul class="list-disc list-inside text-gray-700 space-y-1">
                    <li>Technical SEO</li>
                    <li>On-page & off-page optimization</li>
                    <li>Keyword research</li>
                    <li>Content optimization</li>
                    <li>Local & international SEO</li>
                </ul>
            </div>

            <div class="p-8 bg-white/95 backdrop-blur-sm rounded-3xl border border-white/10 shadow-lg transition-all duration-500 hover:shadow-2xl hover:scale-105 hover:-translate-y-2 tilt-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fa-brands fa-facebook-f text-4xl text-[#531954] mb-4"></i>
                <h3 class="text-2xl font-bold mb-2 text-[#531954]">Social Media Marketing</h3>
                <p class="text-gray-700 mb-2">
                    Build brand awareness and engagement across social platforms.
                </p>
                <ul class="list-disc list-inside text-gray-700 space-y-1">
                    <li>Content strategy</li>
                    <li>Social media management</li>
                    <li>Paid social campaigns</li>
                    <li>Community engagement</li>
                </ul>
            </div>

            <div class="p-8 bg-white/95 backdrop-blur-sm rounded-3xl border border-white/10 shadow-lg transition-all duration-500 hover:shadow-2xl hover:scale-105 hover:-translate-y-2 tilt-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fa-solid fa-file-lines text-4xl text-[#531954] mb-4"></i>
                <h3 class="text-2xl font-bold mb-2 text-[#531954]">Content Marketing</h3>
                <p class="text-gray-700 mb-2">
                    Attract, educate, and convert your audience with high-quality content.
                </p>
                <ul class="list-disc list-inside text-gray-700 space-y-1">
                    <li>Blogs</li>
                    <li>Landing pages</li>
                    <li>Website </li>
                    <li>Marketing creatives</li>
                </ul>
            </div>

            <div class="p-8 bg-white/95 backdrop-blur-sm rounded-3xl border border-white/10 shadow-lg transition-all duration-500 hover:shadow-2xl hover:scale-105 hover:-translate-y-2 tilt-card" data-aos="fade-up" data-aos-delay="300">
                <i class="fa-solid fa-envelope text-4xl text-[#531954] mb-4"></i>
                <h3 class="text-2xl font-bold mb-2 text-[#531954]">Email Marketing & Automation</h3>
                <p class="text-gray-700">Nurture leads and retain customers through personalized email campaigns.</p>
            </div>

            <div class="p-8 bg-white/95 backdrop-blur-sm rounded-3xl border border-white/10 shadow-lg transition-all duration-500 hover:shadow-2xl hover:scale-105 hover:-translate-y-2 tilt-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fa-solid fa-arrow-up-right-dots text-4xl text-[#531954] mb-4"></i>
                <h3 class="text-2xl font-bold mb-2 text-[#531954]">Conversion Rate Optimization (CRO)</h3>
                <p class="text-gray-700">Turn website visitors into paying customers.</p>
            </div>

            <div class="p-8 bg-white/95 backdrop-blur-sm rounded-3xl border border-white/10 shadow-lg transition-all duration-500 hover:shadow-2xl hover:scale-105 hover:-translate-y-2 tilt-card" data-aos="fade-up" data-aos-delay="500">
                <i class="fa-solid fa-chart-line text-4xl text-[#531954] mb-4"></i>
                <h3 class="text-2xl font-bold mb-2 text-[#531954]">Analytics & Performance Tracking</h3>
                <p class="text-gray-700">Track, analyze, and optimize campaign performance.</p>
            </div>
        </div>
    </div>
</section>


{{-- PROCESS SECTION --}}
{{-- ====================== --}}
<section class="py-24 bg-[#531954]">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-white text-center mb-16" data-aos="fade-up">Our Digital Marketing Process</h2>
        <div class="grid md:grid-cols-3 gap-12">
            <div class="p-6 bg-white rounded-2xl shadow-lg text-center transition-all duration-500 hover:shadow-2xl hover:scale-105 hover:-translate-y-2 tilt-card" data-aos="fade-up">
                <div class="text-4xl text-[#531954] mb-4"><i class="fa-solid fa-search"></i></div>
                <h3 class="text-2xl font-bold mb-2">Discovery & Research</h3>
                <p class="text-gray-700">Understanding your business, audience, and competitors.</p>
            </div>
            <div class="p-6 bg-white rounded-2xl shadow-lg text-center transition-all duration-500 hover:shadow-2xl hover:scale-105 hover:-translate-y-2 tilt-card" data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl text-[#531954] mb-4"><i class="fa-solid fa-lightbulb"></i></div>
                <h3 class="text-2xl font-bold mb-2">Strategy & Planning</h3>
                <p class="text-gray-700">Creating a custom marketing roadmap aligned with your goals.</p>
            </div>
            <div class="p-6 bg-white rounded-2xl shadow-lg text-center transition-all duration-500 hover:shadow-2xl hover:scale-105 hover:-translate-y-2 tilt-card" data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl text-[#531954] mb-4"><i class="fa-solid fa-rocket"></i></div>
                <h3 class="text-2xl font-bold mb-2">Campaign Execution</h3>
                <p class="text-gray-700">Launching and managing multi-channel campaigns.</p>
            </div>
        </div>
    </div>
</section>


{{-- SCRIPTS --}}
{{-- ====================== --}}
<script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.2/dist/vanilla-tilt.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1200, easing: 'ease-in-out', once: true });
    VanillaTilt.init(document.querySelectorAll(".tilt-card"), { max: 15, speed: 400, glare: true, "max-glare": 0.2 });
</script>

@endsection
