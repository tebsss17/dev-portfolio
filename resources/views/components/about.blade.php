<div id="about" class="flex justify-center p-8">
    <div class="max-w-7xl w-full">

        <div class="flex gap-20 flex-col lg:flex-row lg:justify-between">
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
       <div class="mt-12 border-t border-white/5 pt-10">
    <p class="font-mono text- tracking-[0.2em] text-[#A1A1AA] mb-6">TECHNOLOGIES I USE</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- Backend + DB --}}
        <div>
            <p class="font-mono text- text-[#5290DA] mb-3">BACKEND & DATABASE</p>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-2 rounded-xl bg-[#0A0C12] border border-white/10 text-main text-sm">Laravel</span>
                <span class="px-3 py-2 rounded-xl bg-[#0A0C12] border border-white/10 text-main text-sm">PHP</span>
                <span class="px-3 py-2 rounded-xl bg-[#0A0C12] border border-white/10 text-main text-sm">MySQL</span>
                <span class="px-3 py-2 rounded-xl bg-[#0A0C12] border border-white/10 text-main text-sm">PostgreSQL</span>
                <span class="px-3 py-2 rounded-xl bg-[#0A0C12] border border-white/10 text-main text-sm">SQLite</span>
                <span class="px-3 py-2 rounded-xl bg-[#0A0C12] border border-white/10 text-main text-sm">RESTful API</span>
            </div>
        </div>

        {{-- Frontend --}}
        <div>
            <p class="font-mono text- text-[#5290DA] mb-3">FRONTEND</p>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-2 rounded-xl bg-[#0A0C12] border border-white/10 text-main text-sm">Tailwind</span>
                <span class="px-3 py-2 rounded-xl bg-[#0A0C12] border border-white/10 text-main text-sm">Alpine.js</span>
                <span class="px-3 py-2 rounded-xl bg-[#0A0C12] border border-white/10 text-main text-sm">HTML</span>
                <span class="px-3 py-2 rounded-xl bg-[#0A0C12] border border-white/10 text-main text-sm">CSS</span>
            </div>
        </div>

        {{-- Tools --}}
        <div>
            <p class="font-mono text- text-[#5290DA] mb-3">TOOLS & DEPLOY</p>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-2 rounded-xl bg-[#0A0C12] border border-white/10 text-main text-sm">Git</span>
                <span class="px-3 py-2 rounded-xl bg-[#0A0C12] border border-white/10 text-main text-sm">GitHub</span>
                <span class="px-3 py-2 rounded-xl bg-[#0A0C12] border border-white/10 text-main text-sm">Vercel</span>
                <span class="px-3 py-2 rounded-xl bg-[#0A0C12] border border-white/10 text-main text-sm">Netlify</span>
            </div>
        </div>

    </div>
</div>
