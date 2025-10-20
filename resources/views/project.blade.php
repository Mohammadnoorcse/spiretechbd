@extends('masterlayout')
@section('title', 'project')

@section('content')
{{-- Header section --}}
<section class="w-full bg-[#531954] py-6">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-white">Projects</h2>
    </div>
</section>

{{-- Project section --}}
<section class="w-full py-[2rem]">
    <div class="container mx-auto px-4 flex flex-col gap-6 justify-center items-center">
        <span class="text-sm font-bold uppercase text-[#531954]">// latest case studies</span>
        <h2 class="text-4xl font-bold">Introduce Our Projects</h2>

        {{-- Filter Buttons --}}
        <div class="mt-4 flex gap-4 items-center">
            <button data-filter="all" class="filter-btn text-sm font-bold text-[#531954] cursor-pointer">All</button>
            <button data-filter="design" class="filter-btn text-sm font-bold text-[#531954] cursor-pointer">Design</button>
            <button data-filter="development" class="filter-btn text-sm font-bold text-[#531954] cursor-pointer">Development</button>
            <button data-filter="technology" class="filter-btn text-sm font-bold text-[#531954] cursor-pointer">Technology</button>
        </div>

        {{-- Projects Grid --}}
        <div id="projects" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-6 w-full">
            {{-- Design Project --}}
            <div class="project-card" data-category="design">
                <div class="w-full relative h-[15rem] rounded-md group">
                    <img src="{{ asset('assets/image-box1.jpg') }}" alt="Logo" class="w-full h-full rounded-md">
                    <div class="absolute top-0 left-0 w-full h-full bg-[#F26822] group-hover:flex  rounded-md transform hidden justify-center items-center">
                        <span class="text-center text-xl font-bold text-white">Plan Your Project and Software</span>

                    </div>

                </div>
            </div>

            {{-- Development Project --}}
            <div class="project-card" data-category="development">
               <div class="w-full relative h-[15rem] rounded-md group">
                    <img src="{{ asset('assets/image-box1.jpg') }}" alt="Logo" class="w-full h-full rounded-md">
                    <div class="absolute top-0 left-0 w-full h-full bg-[#F26822] group-hover:flex  rounded-md transform hidden justify-center items-center">
                        <span class="text-center text-xl font-bold text-white">Plan Your Project and Software</span>

                    </div>

                </div>
            </div>

            {{-- Technology Project --}}
            <div class="project-card" data-category="technology">
                <div class="w-full relative h-[15rem] rounded-md group">
                    <img src="{{ asset('assets/image-box1.jpg') }}" alt="Logo" class="w-full h-full rounded-md">
                    <div class="absolute top-0 left-0 w-full h-full bg-[#F26822] group-hover:flex  rounded-md transform hidden justify-center items-center">
                        <span class="text-center text-xl font-bold text-white">Plan Your Project and Software</span>

                    </div>

                </div>
            </div>

            {{-- Another Design Project --}}
            <div class="project-card" data-category="design">
                <div class="w-full relative h-[15rem] rounded-md group">
                    <img src="{{ asset('assets/image-box1.jpg') }}" alt="Logo" class="w-full h-full rounded-md">
                    <div class="absolute top-0 left-0 w-full h-full bg-[#F26822] group-hover:flex  rounded-md transform hidden justify-center items-center">
                        <span class="text-center text-xl font-bold text-white">Plan Your Project and Software</span>

                    </div>

                </div>
            </div>

            {{-- Add more projects as needed --}}
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
