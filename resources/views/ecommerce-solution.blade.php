@extends('masterlayout')

@section('title', 'Spire Technology Limited-E-Commerce Development Services')

@section('content')

<!-- ================= HERO SECTION ================= -->
<section class="bg-white py-28">
    <div class="container mx-auto px-6 grid lg:grid-cols-2 gap-14 items-center">

        <!-- TEXT -->
        <div>
            <h1 class="text-5xl font-extrabold text-[#531954] leading-tight mb-6">
                E-Commerce Development Services That Drive Sales
            </h1>

            <p class="text-lg text-gray-600 mb-8">
                Launch and scale your online store with custom e-commerce solutions built
                for conversions. From Shopify to custom platforms, we create shopping
                experiences that turn browsers into buyers.
            </p>

            <div class="flex gap-4 mb-10">
                <a href="#" class="px-8 py-4 bg-[#531954] text-white rounded-xl font-semibold hover:opacity-90 transition">
                    Get a Free Store Audit
                </a>
                <a href="#" class="px-8 py-4 border-2 border-[#531954] text-[#531954] rounded-xl font-semibold hover:bg-[#531954] hover:text-white transition">
                    See Our Stores
                </a>
            </div>

            <!-- TRUST -->
            <div class="grid grid-cols-3 gap-6 text-center">
                <div>
                    <h3 class="text-3xl font-bold text-[#531954]">$50M+</h3>
                    <p class="text-gray-500">Revenue Generated</p>
                </div>
                <div>
                    <h3 class="text-3xl font-bold text-[#531954]">200+</h3>
                    <p class="text-gray-500">Stores Built</p>
                </div>
                <div>
                    <h3 class="text-3xl font-bold text-[#531954]">3.2%</h3>
                    <p class="text-gray-500">Avg Conversion</p>
                </div>
            </div>
        </div>

        <!-- IMAGE -->
        <img src="https://www.bdtask.com/blog/uploads/ecommerce_business_in_bangladesh.jpg" class="rounded-3xl shadow-2xl" alt="Ecommerce Development">
    </div>
</section>

<!-- ================= INTRO ================= -->
<section class="bg-gray-50 py-24">
    <div class="container mx-auto px-6 max-w-5xl text-center">
        <h2 class="text-4xl font-bold text-[#531954] mb-6">
            High-Converting E-Commerce Solutions
        </h2>

        <p class="text-lg text-gray-600 leading-relaxed">
            Spire Technology builds e-commerce platforms optimized for revenue, scalability,
            and exceptional customer experience. We’ve helped brands generate over
            <strong>$50M in online sales</strong> using Shopify, WooCommerce, Magento,
            and custom solutions.
        </p>
    </div>
</section>

<!-- ================= PLATFORMS ================= -->
<section class="bg-white py-24">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-[#531954] text-center mb-16">
            E-Commerce Platforms We Build
        </h2>

        <div class="grid md:grid-cols-3 gap-12">

            <!-- SHOPIFY -->
            <div class="p-8 rounded-3xl shadow-lg border hover:shadow-2xl transition">
                <img src="https://www.thegenielab.com/cdn/shop/articles/Shopify-website-design-Choose-theme.jpg?v=1687681661" class=" mb-4">
                <h3 class="text-xl font-bold text-[#531954] mb-3">Shopify Development</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>✓ Fast launch (2–4 weeks)</li>
                    <li>✓ Hosted & secure</li>
                    <li>✓ App ecosystem</li>
                </ul>
                <p class="mt-4 font-semibold">Starting at $5,000</p>
            </div>

            <!-- WOOCOMMERCE -->
            <div class="p-8 rounded-3xl shadow-lg border hover:shadow-2xl transition">
                <img src="https://futuriowp.com/wp-content/uploads/2024/03/homepage-futurio-storefront-2-1024x393.webp" class="mb-4">
                <h3 class="text-xl font-bold text-[#531954] mb-3">WooCommerce</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>✓ Full ownership</li>
                    <li>✓ SEO-friendly</li>
                    <li>✓ Unlimited customization</li>
                </ul>
                <p class="mt-4 font-semibold">Starting at $4,000</p>
            </div>

            <!-- CUSTOM -->
            <div class="p-8 rounded-3xl shadow-lg border hover:shadow-2xl transition">
                <img src="{{ asset('images/custom.png') }}" class="h-12 mb-4">
                <h3 class="text-xl font-bold text-[#531954] mb-3">Custom E-Commerce</h3>
                <ul class="text-gray-600 space-y-2">
                    <li>✓ 100% tailored</li>
                    <li>✓ Enterprise ready</li>
                    <li>✓ No platform limits</li>
                </ul>
                <p class="mt-4 font-semibold">Starting at $30,000</p>
            </div>

        </div>
    </div>
</section>

<!-- ================= FEATURES ================= -->
<section class="bg-gray-50 py-24">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-[#531954] text-center mb-16">
            Advanced E-Commerce Features
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach([
                'Advanced Product Search & Filters',
                'Customer Accounts & Wishlists',
                'Abandoned Cart Recovery',
                'Multi-language & Currency',
                'Secure Payment Gateways',
                'AI Product Recommendations',
                'Subscription Billing',
                'Marketplace & Multi-Vendor',
                'Mobile Commerce Optimization'
            ] as $feature)
            <div class="p-6 bg-white rounded-2xl shadow">
                <h3 class="font-semibold text-[#531954]">{{ $feature }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= PROCESS ================= -->
<section class="bg-white py-24">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-[#531954] text-center mb-16">
            Our E-Commerce Development Process
        </h2>

        <div class="grid md:grid-cols-4 gap-10 text-center">
            @foreach(['Strategy','Design','Development','Testing','Launch','Growth'] as $step)
            <div class="p-6 shadow rounded-xl">
                <h3 class="font-bold text-[#531954] mb-2">{{ $step }}</h3>
                <p class="text-gray-600 text-sm">Structured & ROI-focused execution.</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= PRICING & PACKAGES ================= -->
<section class="bg-gray-50 py-24">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-[#531954] text-center mb-16">
            E-Commerce Development Pricing
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




<!-- ================= FAQ ================= -->
<section class="bg-white py-24">
    <div class="container mx-auto px-6 max-w-4xl">
        <h2 class="text-4xl font-bold text-[#531954] text-center mb-12">
            E-Commerce FAQ
        </h2>

        @foreach([
            'Which platform is best for my business?' => 'Shopify for speed, WooCommerce for control, Custom for complex needs.',
            'How long does development take?' => '3–4 weeks for basic, 3–6 months for enterprise.',
            'Is my store secure?' => 'Yes. SSL, PCI compliance, backups & fraud protection included.',
            'Do you provide post-launch support?' => 'Yes. Monthly maintenance & optimization packages available.'
        ] as $q => $a)
        <details class="mb-4 bg-gray-50 p-6 rounded-xl shadow cursor-pointer">
            <summary class="font-semibold text-[#531954]">{{ $q }}</summary>
            <p class="mt-3 text-gray-600">{{ $a }}</p>
        </details>
        @endforeach
    </div>
</section>

<!-- ================= CTA ================= -->
<section class="bg-[#531954] py-24 text-center text-white">
    <h2 class="text-4xl font-bold mb-6">Ready to Launch Your Online Store?</h2>
    <p class="mb-8">
        Join 200+ businesses we helped generate $50M+ in sales.
    </p>

    <div class="flex justify-center gap-4">
        <a href="#" class="px-8 py-4 bg-white text-[#531954] font-bold rounded-xl">
            Free Store Audit
        </a>
        <a href="#" class="px-8 py-4 border-2 border-white rounded-xl">
            Request Quote
        </a>
    </div>
</section>

@endsection
