@extends('masterlayout')
@section('title', 'Spire Technology Limited - Projects')

@section('content')
{{-- Header section --}}
<section class="w-full bg-[#531954] py-6">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-white">Projects</h2>
    </div>
</section>

{{-- Project section --}}
<section class="w-full py-16">
    <div class="container mx-auto px-4 flex flex-col gap-6 justify-center items-center">
        <h2 class="text-4xl font-bold text-center">Introduce Our Projects</h2>

        {{-- Filter Buttons --}}
        <div class="mt-6 flex flex-wrap gap-4 justify-center items-center">
            <button data-filter="all" class="filter-btn text-sm font-bold text-[#531954] cursor-pointer">All</button>
            <button data-filter="design" class="filter-btn text-sm font-bold text-[#531954] cursor-pointer">Design</button>
            <button data-filter="development" class="filter-btn text-sm font-bold text-[#531954] cursor-pointer">Development</button>
            <button data-filter="technology" class="filter-btn text-sm font-bold text-[#531954] cursor-pointer">Technology</button>
        </div>

        {{-- Projects Grid --}}
        <div id="projects" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8 w-full">

            {{-- Project 1 - Design --}}
            <div class="project-card" data-category="design">
                <div class="w-full relative h-[15rem] rounded-3xl border border-gray-200 shadow-lg group overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-purple-500/50">
                    <img src="{{ asset('assets/buzfi.webp') }}" alt="E-Commerce Website" class="w-full h-full object-cover rounded-3xl">

                    <div class="absolute top-0 left-0 w-full h-full bg-[#F26822]/90 group-hover:flex rounded-md transform hidden flex-col justify-center items-center p-4 gap-3 text-center">
                        <span class="text-lg sm:text-xl font-bold text-white px-2 sm:px-4">
                            E-Commerce Website: Seamless online store with payments & inventory
                        </span>
                        <a href="https://buzfi.com/" target="_blank"
                           class="border-2 border-white text-white px-4 sm:px-5 py-2 rounded-full font-medium text-sm hover:bg-white hover:text-[#F26822] transition">
                           View Project
                        </a>
                    </div>
                </div>
            </div>

            {{-- Project 2 - Development --}}
            <div class="project-card" data-category="development">
                <div class="w-full relative h-[15rem] rounded-3xl border border-gray-200 shadow-lg group overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-purple-500/50">
                    <img src="{{ asset('assets/dailysanglap.webp') }}" alt="News Paper Website" class="w-full h-full object-cover rounded-3xl">

                    <div class="absolute top-0 left-0 w-full h-full bg-[#F26822]/90 group-hover:flex rounded-md transform hidden flex-col justify-center items-center p-4 gap-3 text-center">
                        <span class="text-lg sm:text-xl font-bold text-white px-2 sm:px-4">
                            News Paper Website: Real-time news, articles, and clean layout
                        </span>
                        <a href="https://dailysonglap.com/" target="_blank"
                           class="border-2 border-white text-white px-4 sm:px-5 py-2 rounded-full font-medium text-sm hover:bg-white hover:text-[#F26822] transition">
                           View Project
                        </a>
                    </div>
                </div>
            </div>

            {{-- Project 3 - Technology --}}
            <div class="project-card" data-category="technology">
                <div class="w-full relative h-[15rem] rounded-3xl border border-gray-200 shadow-lg group overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-purple-500/50">
                    <img src="{{ asset('assets/roshniworld.webp') }}" alt="Fashion World" class="w-full h-full object-cover rounded-3xl">

                    <div class="absolute top-0 left-0 w-full h-full bg-[#F26822]/90 group-hover:flex rounded-md transform hidden flex-col justify-center items-center p-4 gap-3 text-center">
                        <span class="text-lg sm:text-xl font-bold text-white px-2 sm:px-4">
                            Fashion World: Trendy online fashion store with smooth shopping
                        </span>
                        <a href="#" target="_blank"
                           class="border-2 border-white text-white px-4 sm:px-5 py-2 rounded-full font-medium text-sm hover:bg-white hover:text-[#F26822] transition">
                           View Project
                        </a>
                    </div>
                </div>
            </div>

            {{-- Project 4 - Design --}}
            <div class="project-card" data-category="design">
                <div class="w-full relative h-[15rem] rounded-3xl border border-gray-200 shadow-lg group overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-purple-500/50">
                    <img src="{{ asset('assets/office_mangement.webp') }}" alt="Office Management System" class="w-full h-full object-cover rounded-3xl">

                    <div class="absolute top-0 left-0 w-full h-full bg-[#F26822]/90 group-hover:flex rounded-md transform hidden flex-col justify-center items-center p-4 gap-3 text-center">
                        <span class="text-lg sm:text-xl font-bold text-white px-2 sm:px-4">
                            Office Management System: Smart software for productivity & automation
                        </span>
                        <a href="https://officespiretech.com/" target="_blank"
                           class="border-2 border-white text-white px-4 sm:px-5 py-2 rounded-full font-medium text-sm hover:bg-white hover:text-[#F26822] transition">
                           View Project
                        </a>
                    </div>
                </div>
            </div>

            {{-- Project 5 - Development --}}
            <div class="project-card" data-category="development">
                <div class="w-full relative h-[15rem] rounded-3xl border border-gray-200 shadow-lg group overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-purple-500/50">
                    <img src="{{ asset('assets/allbrids.webp') }}" alt="Allbirds Shoes" class="w-full h-full object-cover rounded-3xl">

                    <div class="absolute top-0 left-0 w-full h-full bg-[#F26822]/90 group-hover:flex rounded-md transform hidden flex-col justify-center items-center p-4 gap-3 text-center">
                        <span class="text-lg sm:text-xl font-bold text-white px-2 sm:px-4">
                            Allbirds Shoes: Sustainable and modern online shoe platform
                        </span>
                        <a href="https://allbirddemo.vercel.app/" target="_blank"
                           class="border-2 border-white text-white px-4 sm:px-5 py-2 rounded-full font-medium text-sm hover:bg-white hover:text-[#F26822] transition">
                           View Project
                        </a>
                    </div>
                </div>
            </div>

            {{-- Project 6 - Technology --}}
            <div class="project-card" data-category="technology">
                <div class="w-full relative h-[15rem] rounded-3xl border border-gray-200 shadow-lg group overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-purple-500/50">
                    <img src="{{ asset('assets/ayeshamonir.webp') }}" alt="Ayesha Monir Fashion House" class="w-full h-full object-cover rounded-3xl">

                    <div class="absolute top-0 left-0 w-full h-full bg-[#F26822]/90 group-hover:flex rounded-md transform hidden flex-col justify-center items-center p-4 gap-3 text-center">
                        <span class="text-lg sm:text-xl font-bold text-white px-2 sm:px-4">
                            Ayesha Monir Fashion House: Trendy collections for everyday & special wear
                        </span>
                        <a href="https://www.ayeshamonir.com/" target="_blank"
                           class="border-2 border-white text-white px-4 sm:px-5 py-2 rounded-full font-medium text-sm hover:bg-white hover:text-[#F26822] transition">
                           View Project
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- JavaScript for filtering --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.filter-btn');
    const projects = document.querySelectorAll('.project-card');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            projects.forEach(project => {
                const category = project.getAttribute('data-category');
                if (filter === 'all' || category === filter) {
                    project.classList.remove('hidden');
                } else {
                    project.classList.add('hidden');
                }
            });

            buttons.forEach(btn => btn.classList.remove('underline', 'text-red-500'));
            button.classList.add('underline', 'text-red-500');
        });
    });
});
</script>
@endsection
