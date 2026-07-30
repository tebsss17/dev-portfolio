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
            <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-[#0A0C12] to-[#131722] p-6">
                <div class="flex items-center gap-3 mb-6">
                    <x-lucide-monitor class="size-6 text-[#5290DA]" />
                    <p class="text-xl font-semibold">Frontend</p>
                </div>

                <div class="flex flex-wrap gap-3">
                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/html.svg" alt="html" class="size-6">

                        <span class="text-sm font-medium text-main">HTML</span>
                    </div>

                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/css.svg" alt="css" class="size-6">

                        <span class="text-sm font-medium text-main">CSS</span>
                    </div>

                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/javascript.svg" alt="js" class="size-6">

                        <span class="text-sm font-medium text-main">JavaScript</span>
                    </div>

                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/tailwindcss.svg" alt="tailwind" class="size-6">

                        <span class="text-sm font-medium text-main">Tailwind CSSL</span>
                    </div>

                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/alpinejs.svg" alt="alpinejs" class="size-6">

                        <span class="text-sm font-medium text-main">Alpine.js</span>
                    </div>

                </div>
            </div>

            {{-- Backend --}}
            <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-[#0A0C12] to-[#131722] p-6">
                <div class="flex items-center gap-3 mb-6">
                    <x-lucide-cog class="size-6 text-[#5290DA]" />
                    <p class="text-xl font-semibold">Backend</p>
                </div>

                <div class="flex flex-wrap gap-3">
                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/php.svg" alt="php" class="size-6">

                        <span class="text-sm font-medium text-main">PHP</span>
                    </div>

                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/laravel.svg" alt="laravel" class="size-6">

                        <span class="text-sm font-medium text-main">Laravel</span>
                    </div>

                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/livewire.svg" alt="livewire" class="size-6">

                        <span class="text-sm font-medium text-main">Livewire</span>
                    </div>

                </div>
            </div>

            {{-- Database --}}
            <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-[#0A0C12] to-[#131722] p-6">
                <div class="flex items-center gap-3 mb-6">
                    <x-lucide-database class="size-6 text-[#5290DA]" />
                    <p class="text-xl font-semibold">Database</p>
                </div>

                <div class="flex flex-wrap gap-3">
                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/mysql.svg" alt="mysql" class="size-6">

                        <span class="text-sm font-medium text-main">MySQL</span>
                    </div>

                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/sqlite.svg" alt="sqlite" class="size-6">

                        <span class="text-sm font-medium text-main">SQLite</span>
                    </div>

                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/postgresql.svg" alt="postgresql" class="size-6">

                        <span class="text-sm font-medium text-main">PostgreSQL</span>
                    </div>

                </div>
            </div>

            {{-- Tools --}}
            <div class="rounded-2xl border border-white/10 bg-gradient-to-br from-[#0A0C12] to-[#131722] p-6">
                <div class="flex items-center gap-3 mb-6">
                    <x-lucide-wrench class="size-6 text-[#5290DA]" />
                    <p class="text-xl font-semibold">Tools and Deployment</p>
                </div>

                <div class="flex flex-wrap gap-3">
                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/vscode.svg" alt="vscode" class="size-6">

                        <span class="text-sm font-medium text-main">VS Code</span>
                    </div>

                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/vercel-dark.svg" alt="vercel" class="size-6">

                        <span class="text-sm font-medium text-main">Vercel</span>
                    </div>

                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/netlify.svg" alt="netlify" class="size-6">

                        <span class="text-sm font-medium text-main">Netlify</span>
                    </div>

                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/git.svg" alt="git" class="size-6">

                        <span class="text-sm font-medium text-main">Git</span>
                    </div>

                    <div
                        class="flex items-center gap-3 rounded-2xl border border-white/10 bg-[#131722] transition-all duration-300 p-4 hover:-translate-y-2 hover:border-[#5290DA] hover:bg-[#1D4E89]/20">

                        <img src="images/github-dark.svg" alt="github" class="size-6">

                        <span class="text-sm font-medium text-main">Github</span>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
