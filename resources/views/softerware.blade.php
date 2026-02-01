@extends('masterlayout')
@section('title', 'Spire Technology Limited-Software Development Services')

@section('content')


<!-- HERO SECTION -->
<section class="bg-gradient-to-r from-[#531954] to-purple-900 text-white py-36 relative overflow-hidden">
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">Custom Software Development Services</h1>
        <p class="text-lg md:text-xl mb-10 max-w-2xl mx-auto text-purple-100">
            Build scalable, secure, and innovative software tailored to your business needs. Streamline operations and gain a competitive edge.
        </p>
        <div class="flex justify-center gap-4 flex-wrap mb-12">
            <a href="#contact" class="bg-yellow-400 text-purple-900 font-bold py-3 px-6 rounded-lg hover:bg-yellow-300 transition">Request a Consultation</a>
            <a href="#portfolio" class="bg-white text-purple-800 font-semibold py-3 px-6 rounded-lg hover:bg-gray-100 transition">View Our Portfolio</a>
        </div>
        <div class="flex justify-center gap-8 text-center text-white/80 flex-wrap mt-8">
            <div class="flex items-center gap-2"><span class="font-bold text-lg">150+</span> Projects</div>
            <div class="flex items-center gap-2"><span class="font-bold text-lg">95%</span> On-Time Delivery</div>
            <div class="flex items-center gap-2"><span class="font-bold text-lg">Fortune 500</span> Clients</div>
        </div>
    </div>
    <!-- Decorative shapes -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-purple-600 rounded-full mix-blend-multiply opacity-20 -translate-x-32 -translate-y-32"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-400 rounded-full mix-blend-multiply opacity-10 translate-x-32 translate-y-32"></div>
</section>

<!-- INTRODUCTION / OVERVIEW -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6 max-w-4xl text-center">
        <h2 class="text-4xl font-bold text-purple-900 mb-6">Enterprise-Grade Software Solutions</h2>
        <p class="text-gray-700 mb-6">
            Spire Technology delivers custom software development services that transform business challenges into competitive advantages. Our experienced engineers build robust, scalable applications tailored to your requirements.
        </p>
        <p class="text-gray-700 mb-6">
            From ERP systems to CRM solutions and business automation tools, we leverage cutting-edge technologies and agile methodologies to deliver software that drives efficiency, reduces costs, and accelerates growth.
        </p>
        <p class="text-gray-700">
            Whether you're a startup or an enterprise modernizing legacy systems, we have the expertise to bring your vision to life.
        </p>
    </div>
</section>

<!-- SOFTWARE DEVELOPMENT SERVICES - ICON BASED -->
<section class="py-24 bg-gray-100">
    <div class="container mx-auto px-6 max-w-6xl">
        <!-- Heading -->
        <h2 class="text-4xl font-extrabold text-purple-900 text-center mb-16">
            Our Software Development Expertise
        </h2>

        @php
        $services = [
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"/></svg>',
                'title' => 'Custom Software Development',
                'desc' => 'Bespoke applications tailored to your business processes.',
                'link' => '#'
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6h13v13H9z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11H4a2 2 0 01-2-2V4a2 2 0 012-2h7a2 2 0 012 2v1"/></svg>',
                'title' => 'Mobile App Development',
                'desc' => 'High-quality mobile apps for Android and iOS.',
                'link' => '#'
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18"/></svg>',
                'title' => 'E-Commerce Solutions',
                'desc' => 'Scalable e-commerce platforms that drive sales.',
                'link' => '#'
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>',
                'title' => 'UI/UX Design',
                'desc' => 'User-friendly interfaces with modern designs.',
                'link' => '#'
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"/></svg>',
                'title' => 'Cloud Integration',
                'desc' => 'Seamless cloud solutions for better efficiency.',
                'link' => '#'
            ],
            [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"/></svg>',
                'title' => 'Digital Transformation',
                'desc' => 'Transform your business with innovative software.',
                'link' => '#'
            ],
        ];
        @endphp

        <!-- Modern Services Grid -->
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-12">
            @foreach($services as $service)
                <div class="relative group bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
                    <!-- Gradient Top Accent -->
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-400 to-pink-500 opacity-10 group-hover:opacity-20 transition duration-500"></div>

                    <div class="relative p-8 flex flex-col items-center text-center">
                        <div class="w-24 h-24 mb-6 flex items-center justify-center bg-purple-100 rounded-full group-hover:bg-purple-200 transition duration-300">
                            {!! $service['icon'] !!}
                        </div>
                        <h3 class="text-xl font-semibold text-purple-900 mb-2">{{ $service['title'] }}</h3>
                        <p class="text-gray-600 mb-4">{{ $service['desc'] }}</p>
                        <a href="{{ $service['link'] }}" class="inline-block px-4 py-2 text-sm font-semibold text-purple-700 border border-purple-700 rounded-full hover:bg-purple-700 hover:text-white transition">
                            Learn More
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>




<!-- INDUSTRY SOLUTIONS -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6 max-w-6xl">
        <h2 class="text-4xl font-bold text-purple-900 text-center mb-16">Software Solutions by Industry</h2>
        <div class="grid sm:grid-cols-2 gap-10">
            @php
                $industries = [
                    'Healthcare'=>['Electronic Health Records (EHR)','Patient Management Systems','Telemedicine Platforms','Medical Billing Software','HIPAA-Compliant Solutions'],
                    'Finance & Banking'=>['Banking Management Systems','Trading Platforms','Payment Processing Solutions','Fraud Detection Systems','Compliance & Reporting Tools'],
                    'Retail & E-Commerce'=>['Inventory Management Systems','POS Solutions','Supply Chain Management','Customer Loyalty Programs','Omnichannel Retail Platforms'],
                    'Manufacturing'=>['Production Planning Systems','Quality Control Software','Equipment Maintenance Management','Supply Chain Optimization','IoT Integration Solutions']
                ];
            @endphp
            @foreach ($industries as $industry=>$items)
            <div>
                <h3 class="text-2xl font-semibold mb-4">{{ $industry }}</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    @foreach ($items as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- DEVELOPMENT PROCESS -->
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6 max-w-6xl">
        <h2 class="text-4xl font-bold text-purple-900 text-center mb-16">Our Agile Software Development Process</h2>
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $phases = [
                    ['title'=>'Discovery & Requirements Analysis','duration'=>'1-2 weeks','tasks'=>['Requirement specifications','Technical feasibility study','Project scope document','Initial timeline & budget estimate']],
                    ['title'=>'Planning & Architecture','duration'=>'1-2 weeks','tasks'=>['System architecture diagrams','Database schema design','Technology stack selection','Security & compliance planning','Development roadmap']],
                    ['title'=>'Design & Prototyping','duration'=>'2-4 weeks','tasks'=>['UI/UX design','Interactive prototypes','Design approval','Usability testing']],
                    ['title'=>'Development & QA','duration'=>'4-12 weeks','tasks'=>['Coding & implementation','Automated & manual testing','Continuous integration','Weekly sprints & demos']],
                    ['title'=>'Deployment & Support','duration'=>'1-2 weeks','tasks'=>['Production deployment','Monitoring & logging','Post-launch support','Training & documentation']]
                ];
            @endphp

            @foreach ($phases as $phase)
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition p-8 flex flex-col">
                <h3 class="text-2xl font-bold text-purple-900 mb-2">{{ $phase['title'] }}</h3>
                <p class="text-purple-700 font-semibold mb-4">Duration: {{ $phase['duration'] }}</p>
                <ul class="list-disc list-inside text-gray-700 space-y-2 flex-1">
                    @foreach ($phase['tasks'] as $task)
                        <li>{{ $task }}</li>
                    @endforeach
                </ul>
                <div class="mt-4">
                    <span class="text-sm text-gray-500">Agile methodology ensures flexibility & continuous delivery.</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- KEY FEATURES & BENEFITS -->
<section class="py-24">
    <div class="container mx-auto px-6 max-w-5xl text-center">
        <h2 class="text-4xl font-bold text-purple-900 mb-12">Why Choose Spire Technology</h2>
        <div class="grid sm:grid-cols-2 gap-8 text-left text-gray-700">
            @php
                $features = [
                    ['Scalable Architecture','Robust Security','Cloud-Native Solutions','Agile Methodology','Custom Integrations'],
                    ['Intuitive User Experience','Comprehensive Documentation','Dedicated Project Manager','Post-Launch Support','Intellectual Property Rights']
                ];
            @endphp
            @foreach ($features as $column)
            <div class="space-y-4">
                @foreach ($column as $item)
                    <p class="flex items-start gap-3"><span class="text-purple-600 font-bold text-xl">✓</span>{{ $item }}</p>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= PRICING & PACKAGES ================= -->
<section class="bg-gray-50 py-24">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-[#531954] text-center mb-16">
            Software Development Pricing
        </h2>

        <div class="grid md:grid-cols-3 gap-10">

            <!-- Starter Store -->
            <div class="p-8 bg-white rounded-3xl shadow hover:shadow-xl transition transform hover:-translate-y-2 duration-300">
                <h3 class="font-bold text-xl mb-2">Starter Store</h3>
                <p class="text-3xl font-bold text-[#531954] mb-4">$4,000 - $8,000</p>
                <p class="text-gray-600 mb-4"><strong>Perfect for:</strong> New businesses, small catalogs</p>
                <p class="text-gray-600 mb-4"><strong>Platform:</strong> Shopify or WooCommerce</p>
                <p class="text-gray-600 mb-6"><strong>Timeline:</strong> 3-4 weeks</p>

                <ul class="text-gray-600 space-y-2 mb-6">
                    <li>✓ Up to 50 products</li>
                    <li>✓ Responsive design (mobile-optimized)</li>
                    <li>✓ Payment gateway setup (1-2 gateways)</li>
                    <li>✓ Shipping configuration</li>
                    <li>✓ Basic SEO setup</li>
                    <li>✓ Product upload assistance</li>
                    <li>✓ 1 month post-launch support</li>
                    <li>✓ Training session (2 hours)</li>
                </ul>

                <p class="text-gray-600 mb-6"><strong>Ideal For:</strong> Boutique stores, artist/creator shops, niche product stores, testing business ideas</p>

                <button class="w-full py-3 bg-[#531954] text-white rounded-xl font-semibold hover:bg-purple-700 transition">
                    GET STARTED
                </button>
            </div>

            <!-- Professional Store (Highlighted) -->
            <div class="p-8 bg-gradient-to-br from-purple-700 to-[#531954] text-white rounded-3xl shadow-2xl transform scale-105 relative">
                <span class="absolute top-4 right-4 bg-yellow-400 text-purple-900 font-bold px-3 py-1 rounded-full text-sm">Popular</span>

                <h3 class="font-bold text-xl mb-2">Professional Store</h3>
                <p class="text-3xl font-bold mb-4">$8,000 - $25,000</p>
                <p class="mb-4"><strong>Perfect for:</strong> Growing businesses, medium catalogs</p>
                <p class="mb-4"><strong>Platform:</strong> Shopify Plus or WooCommerce</p>
                <p class="mb-6"><strong>Timeline:</strong> 6-10 weeks</p>

                <ul class="space-y-2 mb-4">
                    <li>✓ Up to 500 products</li>
                    <li>✓ Custom design & branding</li>
                    <li>✓ Advanced features (reviews, wishlists)</li>
                    <li>✓ Multiple payment gateways</li>
                    <li>✓ Email marketing integration</li>
                    <li>✓ Abandoned cart recovery</li>
                    <li>✓ SEO optimization</li>
                    <li>✓ 3 months post-launch support</li>
                </ul>

                <p class="mb-4"><strong>Ideal For:</strong> Established retailers, fashion brands, beauty & cosmetics, home goods</p>

                <button class="w-full py-3 bg-white text-[#531954] rounded-xl font-semibold hover:bg-gray-200 transition">
                    REQUEST QUOTE
                </button>
            </div>

            <!-- Enterprise Store -->
            <div class="p-8 bg-white rounded-3xl shadow hover:shadow-xl transition transform hover:-translate-y-2 duration-300">
                <h3 class="font-bold text-xl mb-2">Enterprise Store</h3>
                <p class="text-3xl font-bold text-[#531954] mb-4">$25,000 - $100,000+</p>
                <p class="text-gray-600 mb-4"><strong>Perfect for:</strong> Large businesses, complex requirements</p>
                <p class="text-gray-600 mb-4"><strong>Platform:</strong> Magento, Shopify Plus, or Custom</p>
                <p class="text-gray-600 mb-6"><strong>Timeline:</strong> 3-6 months</p>

                <ul class="text-gray-600 space-y-2 mb-4">
                    <li>✓ Unlimited products</li>
                    <li>✓ Fully custom design</li>
                    <li>✓ Advanced functionality</li>
                    <li>✓ Multi-store/multi-language</li>
                    <li>✓ B2B & B2C capabilities</li>
                    <li>✓ ERP/CRM integration</li>
                    <li>✓ Dedicated project manager</li>
                    <li>✓ 1 year priority support</li>
                </ul>

                <p class="mb-4"><strong>Ideal For:</strong> Large retailers, manufacturers going direct, multi-brand businesses, international enterprises</p>

                <button class="w-full py-3 bg-[#531954] text-white rounded-xl font-semibold hover:bg-purple-700 transition">
                    SCHEDULE CONSULTATION
                </button>
            </div>

        </div>
    </div>
</section>


@endsection
