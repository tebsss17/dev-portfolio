<div id="about" class="flex justify-center p-8">
    <div class="max-w-7xl w-full">

        <div class="flex gap-20 flex-col xl:flex-row lg:justify-between">
            {{-- Left --}}
            <div class="flex-1 ">
                <p class="font-bold text-3xl lg:text-6xl mb-10">About Me</p>

                <p class="leading-loose text-secondary">
                    I'm Marc Steven Nagamany, a junior web developer passionate about creating responsive and user-friendly web applications.
                    I specialize in Laravel, PHP, MySQL, and Tailwind CSS, while continuously learning and improving my skills to build better digital solutions.
                </p>
            </div>
            {{-- Right --}}
            <div class="flex-1 w-full grid grid-cols-1 sm:grid-cols-2 gap-6">

                <div class="group flex items-center gap-5 rounded-2xl border border-white/10 bg-gradient-to-br from-[#0A0C12] to-[#131722] p-6 min-h-32 transition-all duration-300 hover:-translate-y-2 hover:border-[#3B82F6]/40">
                    <div class=" rounded-xl p-4 bg-[#5290DA]/15 group-hover:bg-[#5290DA] duration-300 transition-colors">
                        <x-lucide-folder-code class="size-8 text-[#5290DA] group-hover:text-white"/>
                    </div>


                    <div>
                        <p class="font-bold text-2xl text-main">3+</p>
                        <p class="text-secondary text-sm">projects built</p>
                    </div>
                </div>

                <div class="group flex items-center gap-5 rounded-2xl border border-white/10 bg-gradient-to-br from-[#0A0C12] to-[#131722] p-6 min-h-32 transition-all duration-300 hover:-translate-y-2 hover:border-[#3B82F6]/40">
                    <div class=" rounded-xl p-4 bg-[#5290DA]/15 group-hover:bg-[#5290DA] duration-300 transition-colors">
                        <x-lucide-code class="size-8 text-[#5290DA] group-hover:text-white"/>
                    </div>


                    <div>
                        <p class="font-bold text-2xl text-main">Laravel</p>
                        <p class="text-secondary text-sm">Main Framework</p>
                    </div>
                </div>

                <div class="group flex items-center gap-5 rounded-2xl border border-white/10 bg-gradient-to-br from-[#0A0C12] to-[#131722] p-6 min-h-32 transition-all duration-300 hover:-translate-y-2 hover:border-[#3B82F6]/40">
                    <div class=" rounded-xl p-4 bg-[#5290DA]/15 group-hover:bg-[#5290DA] duration-300 transition-colors">
                        <x-lucide-graduation-cap class="size-8 text-[#5290DA] group-hover:text-white"/>
                    </div>


                    <div>
                        <p class="font-bold text-2xl text-main">2026</p>
                        <p class="text-secondary text-sm">Graduate</p>
                    </div>
                </div>

                <div class="group flex items-center gap-5 rounded-2xl border border-white/10 bg-gradient-to-br from-[#0A0C12] to-[#131722] p-6 min-h-32 transition-all duration-300 hover:-translate-y-2 hover:border-[#3B82F6]/40">
                    <div class=" rounded-xl p-4 bg-[#5290DA]/15 group-hover:bg-[#5290DA] duration-300 transition-colors">
                        <x-lucide-layers class="size-8 text-[#5290DA] group-hover:text-white"/>
                    </div>


                    <div>
                        <p class="font-bold text-2xl text-main">Full Stack</p>
                        <p class="text-secondary text-sm">Web Development</p>
                    </div>
                </div>

            </div>
        </div>

        {{-- Tech Stack --}}
        <div class="mt-20 flex justify-center items-center gap-8">
            <div class="h-px flex-1 bg-gradient-to-r from-transparent to-[#FAFAF9]/50"></div>
                <p class="text-xl md:text-2xl font-semibold tracking-normal">TECH STACK</p>
            <div class="h-px flex-1 bg-gradient-to-l from-transparent to-[#FAFAF9]/50"></div>
        </div>

        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Frontend --}}
            <div class="flex flex-col  border-blue-400 border p-6">
                <div class="text-center">
                    <p>Frontend</p>
                </div>

                <div class="flex flex-wrap gap-4 justify-center sm:justify-start">
                    <div class="flex gap-3 items-center border-white/10 border p-4 rounded-2xl group-hover:-translate-y-2 duration-300 transition-all">
                        <img src="/images/alpinejs.svg" alt="alpineJS" class="size-10">
                        <span class="text-sm font-medium">AlpineJS</span>
                    </div>

                    <div class="flex gap-3 items-center border-white/10 border p-4 rounded-2xl group-hover:-translate-y-2 duration-300 transition-all">
                        <img src="/images/alpinejs.svg" alt="alpineJS" class="size-10">
                        <span class="text-sm font-medium">AlpineJS</span>
                    </div>
                </div>
            </div>

            {{-- Backend --}}

            {{-- Database --}}

            {{-- Tools --}}
        </div>

    </div>
</div>
