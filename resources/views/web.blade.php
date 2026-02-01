@extends('masterlayout')
@section('title', 'Spire Technology Limited-Web Development Services')

@section('content')

{{-- header section start --}}
    <section class="w-full bg-[#531954] py-6">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-white">Web Development Services</h2>
        </div>

    </section>
    {{-- header section end --}}

<!-- ================= HERO SECTION ================= -->
<section class="bg-white py-28 relative overflow-hidden">
    <div class="container mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

        <!-- LEFT CONTENT -->
        <div>
            <h1 class="text-5xl md:text-6xl font-extrabold text-[#531954] mb-6">
                Custom Web Development Services That Drive Results
            </h1>

            <p class="text-xl text-gray-700 mb-8 leading-relaxed">
                Build scalable, high-performance websites tailored to your business goals.
                From corporate sites to complex web applications, we deliver solutions
                that engage users and convert visitors into customers.
            </p>

            <div class="flex gap-5 mb-8">
                <button class="px-8 py-3 bg-[#531954] text-white font-bold rounded-lg shadow-lg hover:scale-105 transition">
                    Get a Free Quote
                </button>
                <button class="px-8 py-3 border-2 border-[#531954] text-[#531954] font-bold rounded-lg hover:bg-[#531954] hover:text-white transition">
                    View Our Work
                </button>
            </div>

            <div class="flex gap-8 text-gray-600 font-medium">
                <span>200+ Websites Built</span>
                <span>98% Satisfaction</span>
                <span>10+ Years</span>
            </div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="relative">
            <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786"
                 class="rounded-3xl shadow-2xl w-full"
                 alt="Web Development">
            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-[#531954]/10 rounded-full blur-2xl"></div>
        </div>
    </div>
</section>

<!-- ================= INTRO ================= -->
<section class="bg-gray-50 py-24">
    <div class="container mx-auto px-6 grid lg:grid-cols-2 gap-14 items-center">

        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
             class="rounded-3xl shadow-xl"
             alt="Team Work">

        <div>
            <h2 class="text-4xl font-bold text-[#531954] mb-6">What We Do</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                As a leading web development agency, Spire Technology builds
                custom websites combining modern UI design and robust backend
                functionality.
            </p>
            <p class="mt-4 text-lg text-gray-700">
                We don’t just build websites — we create digital experiences that
                help businesses grow and scale confidently.
            </p>
        </div>
    </div>
</section>

<!-- ================= SERVICES ================= -->
<section class="bg-white py-24">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-[#531954] text-center mb-16">
            Web Development Services
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach([
                ['Corporate Websites','Professional brand-focused websites'],
                ['E-Commerce Development','Secure, scalable online stores'],
                ['Custom Web Applications','Tailored business solutions'],
                ['WordPress Development','Flexible CMS-driven websites'],
                ['Website Redesign','Modern UX & SEO-friendly updates'],
                ['Landing Pages','High-converting marketing pages']
            ] as $service)
                <div class="bg-white p-8 rounded-3xl shadow-lg hover:-translate-y-2 hover:shadow-2xl transition">
                    <h3 class="text-2xl font-bold text-[#531954] mb-3">{{ $service[0] }}</h3>
                    <p class="text-gray-600">{{ $service[1] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- ================= TECHNOLOGIES WE USE ================= -->
<section class="bg-white py-28">
    <div class="container mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-20">
            <h2 class="text-4xl font-extrabold text-[#531954] mb-4">
                Technologies We Use
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                We leverage modern, proven technologies to build fast, secure,
                and scalable web solutions tailored to your business needs.
            </p>
        </div>

        <!-- Tech Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Frontend -->
            <div class="group bg-gray-50 p-8 rounded-3xl shadow-sm hover:shadow-xl transition">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#531954]/10">
                        <i class="fa-solid fa-code text-[#531954] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#531954]">Frontend</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    React, Vue.js, Angular, Next.js, HTML5, CSS3, JavaScript
                </p>
            </div>

            <!-- Backend -->
            <div class="group bg-gray-50 p-8 rounded-3xl shadow-sm hover:shadow-xl transition">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#531954]/10">
                        <i class="fa-solid fa-server text-[#531954] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#531954]">Backend</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Laravel, Node.js, PHP, Python, .NET, Ruby on Rails
                </p>
            </div>

            <!-- CMS -->
            <div class="group bg-gray-50 p-8 rounded-3xl shadow-sm hover:shadow-xl transition">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#531954]/10">
                        <i class="fa-solid fa-layer-group text-[#531954] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#531954]">CMS</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    WordPress, Shopify, Magento, Drupal, Headless CMS
                </p>
            </div>

            <!-- Database -->
            <div class="group bg-gray-50 p-8 rounded-3xl shadow-sm hover:shadow-xl transition">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#531954]/10">
                        <i class="fa-solid fa-database text-[#531954] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#531954]">Databases</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    MySQL, PostgreSQL, MongoDB, Firebase
                </p>
            </div>

            <!-- Cloud -->
            <div class="group bg-gray-50 p-8 rounded-3xl shadow-sm hover:shadow-xl transition">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#531954]/10">
                        <i class="fa-solid fa-cloud text-[#531954] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#531954]">Cloud & Hosting</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    AWS, Azure, Google Cloud, DigitalOcean, Vercel
                </p>
            </div>

            <!-- DevOps -->
            <div class="group bg-gray-50 p-8 rounded-3xl shadow-sm hover:shadow-xl transition">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-[#531954]/10">
                        <i class="fa-solid fa-gears text-[#531954] text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#531954]">DevOps & Tools</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Docker, GitHub, GitLab, CI/CD, Linux
                </p>
            </div>

        </div>
    </div>
</section>


<!-- ================= PROCESS ================= -->
<section class="bg-white py-24">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-[#531954] text-center mb-16">
            Our Web Development Process
        </h2>

        <div class="grid md:grid-cols-3 gap-10">
            @foreach([
                'Discovery & Planning',
                'Design & Prototyping',
                'Development',
                'Testing & QA',
                'Launch & Deployment',
                'Support & Maintenance'
            ] as $step)
                <div class="p-6 bg-gray-50 rounded-2xl shadow hover:shadow-xl transition text-center">
                    <h3 class="text-xl font-bold text-[#531954] mb-2">{{ $step }}</h3>
                    <p class="text-gray-600">
                        Clear, structured workflow ensuring quality results.
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= WHY CHOOSE US ================= -->
<section class="bg-gray-50 py-24">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-[#531954] text-center mb-12">
            Why Choose Us
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 text-gray-700">
            <span>✔ Responsive Design</span>
            <span>✔ SEO Optimized</span>
            <span>✔ Fast Performance</span>
            <span>✔ Secure Architecture</span>
            <span>✔ Scalable Systems</span>
            <span>✔ Clean Code</span>
            <span>✔ Custom Features</span>
            <span>✔ Ongoing Support</span>
        </div>
    </div>
</section>

<!-- ================= FAQ ================= -->
<section class="bg-gray-50 py-24">
    <div class="container mx-auto px-6 max-w-4xl">
        <h2 class="text-4xl font-bold text-[#531954] text-center mb-12">FAQ</h2>

        @foreach([
            'How long does it take to develop a website?' => ' Timeline varies based on complexity. A basic website takes 4-6 weeks, while complex web applications may require 3-6 months. We provide detailed timelines during the planning phase.',
            'Do you provide website maintenance after launch?' => 'Yes, we offer comprehensive maintenance packages including updates, security monitoring, backups, and technical support.',
            'Will my website be mobile-friendly?' => 'Absolutely. All our websites are built with a mobile-first approach, ensuring perfect functionality across all devices and screen sizes.',
            'Can you redesign my existing website?' => 'Yes, we specialize in website redesigns and migrations, preserving your SEO rankings while modernizing design and functionality.',
            'What CMS do you recommend?' => 'We recommend based on your needs. WordPress for flexibility, Shopify for e-commerce, or custom solutions for unique requirements'
        ] as $q => $a)
        <details class="mb-4 bg-white p-6 rounded-xl shadow cursor-pointer">
            <summary class="font-semibold text-[#531954]">{{ $q }}</summary>
            <p class="mt-3 text-gray-600">{{ $a }}</p>
        </details>
        @endforeach
    </div>
</section>

<!-- ================= CTA ================= -->
<section class="bg-[#531954] py-24">
    <div class="container mx-auto px-6 text-center text-white">
        <h2 class="text-4xl font-bold mb-6">
            Ready to Build Your Dream Website?
        </h2>
        <p class="text-lg mb-8 text-white/90">
            Let’s create a powerful web solution that grows your business.
        </p>

        <button class="px-10 py-4 bg-white text-[#531954] font-bold rounded-lg shadow-lg hover:scale-105 transition">
            Schedule Free Consultation
        </button>
    </div>
</section>

@endsection
