```html
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Full Stack Developer portfolio showcasing web development projects, skills, and contact information.">

    <title>Developer Portfolio | Laravel & Web Development</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#101110] text-white antialiased">

    <!-- Navigation -->
    <header class="sticky top-0 z-50 border-b border-white/10 bg-[#101110]/90 backdrop-blur-lg">
        <nav class="mx-auto flex max-w-6xl items-center justify-between px-6 py-5">
            <a href="#home" class="text-lg font-bold tracking-tight">
                DEV<span class="text-lime-300">.</span>
            </a>

            <div class="hidden items-center gap-8 text-sm text-gray-400 md:flex">
                <a href="#about" class="transition hover:text-lime-300">About</a>
                <a href="#skills" class="transition hover:text-lime-300">Skills</a>
                <a href="#projects" class="transition hover:text-lime-300">Projects</a>
                <a href="#contact" class="transition hover:text-lime-300">Contact</a>
            </div>

            <a href="#contact"
               class="rounded-full border border-lime-300/50 px-4 py-2 text-sm font-medium text-lime-300 transition hover:bg-lime-300 hover:text-black">
                Let's Talk <span aria-hidden="true">↗</span>
            </a>
        </nav>
    </header>

    <main>
        <!-- Hero -->
        <section id="home" class="mx-auto grid min-h-[75vh] max-w-6xl items-center gap-12 px-6 py-24 md:grid-cols-2">
            <div>
                <div class="mb-8 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/[0.03] px-4 py-2 text-sm text-gray-300">
                    <span class="h-2 w-2 rounded-full bg-lime-300"></span>
                    Aspiring Full Stack Developer
                </div>

                <p class="mb-4 text-sm font-medium uppercase tracking-[0.3em] text-lime-300">
                    Hello, I'm a developer
                </p>

                <h1 class="text-5xl font-bold leading-tight tracking-tight sm:text-6xl lg:text-7xl">
                    Building ideas
                    <span class="text-gray-500">into</span>
                    <span class="text-lime-300">web experiences.</span>
                </h1>

                <p class="mt-6 max-w-lg leading-7 text-gray-400">
                    I'm learning to build useful, reliable web applications
                    with Laravel, PHP, MySQL, and modern frontend technologies.
                    This is where I share my journey and projects.
                </p>

                <div class="mt-9 flex flex-wrap gap-4">
                    <a href="#projects"
                       class="rounded-full bg-lime-300 px-6 py-3 font-semibold text-black transition hover:bg-lime-200">
                        Explore My Projects <span aria-hidden="true">↗</span>
                    </a>

                    <a href="#about"
                       class="rounded-full border border-white/20 px-6 py-3 font-medium text-white transition hover:border-lime-300 hover:text-lime-300">
                        About Me
                    </a>
                </div>

                <div class="mt-12 flex flex-wrap gap-x-8 gap-y-3 text-sm text-gray-500">
                    <span>Laravel</span>
                    <span>Tailwind CSS</span>
                    <span>MySQL</span>
                    <span>JavaScript</span>
                </div>
            </div>

            <!-- Decorative developer card -->
            <div class="relative mx-auto w-full max-w-md">
                <div class="absolute -inset-4 rounded-3xl bg-lime-300/10 blur-3xl"></div>

                <div class="relative overflow-hidden rounded-2xl border border-white/10 bg-[#171917] shadow-2xl">
                    <div class="flex items-center gap-2 border-b border-white/10 px-5 py-4">
                        <span class="h-3 w-3 rounded-full bg-red-400/80"></span>
                        <span class="h-3 w-3 rounded-full bg-yellow-400/80"></span>
                        <span class="h-3 w-3 rounded-full bg-lime-300/80"></span>
                        <span class="ml-auto text-xs text-gray-500">developer.php</span>
                    </div>

                    <div class="space-y-4 p-6 font-mono text-sm leading-7 sm:p-8">
                        <p class="text-gray-500">// A little about me</p>
                        <p><span class="text-purple-300">const</span> developer = {</p>
                        <p class="pl-5">role: <span class="text-lime-300">'Full Stack Developer'</span>,</p>
                        <p class="pl-5">backend: <span class="text-lime-300">'Laravel'</span>,</p>
                        <p class="pl-5">frontend: <span class="text-lime-300">'Tailwind CSS'</span>,</p>
                        <p class="pl-5">database: <span class="text-lime-300">'MySQL'</span>,</p>
                        <p class="pl-5">mindset: <span class="text-lime-300">'Keep learning'</span></p>
                        <p>};</p>

                        <div class="mt-8 border-t border-white/10 pt-5">
                            <p class="text-gray-500">// Current status</p>
                            <p class="text-lime-300">developer.keepLearning();<span class="animate-pulse">_</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About -->
        <section id="about" class="border-t border-white/10 bg-[#151615]">
            <div class="mx-auto max-w-6xl px-6 py-24">
                <p class="mb-3 text-sm font-semibold uppercase tracking-[0.25em] text-lime-300">01 / About</p>
                <h2 class="text-3xl font-bold sm:text-4xl">Learning by building.</h2>

                <div class="mt-8 grid gap-8 md:grid-cols-2">
                    <p class="leading-8 text-gray-400">
                        I'm an Information Technology student working toward becoming
                        a Full Stack Developer. I enjoy learning how frontend interfaces,
                        backend logic, and databases work together to solve real problems.
                    </p>

                    <p class="leading-8 text-gray-400">
                        My current focus is Laravel development, REST APIs, database
                        design, and responsive user interfaces. I'm building projects
                        to turn what I learn into practical experience.
                    </p>
                </div>
            </div>
        </section>

        <!-- Skills -->
        <section id="skills" class="mx-auto max-w-6xl px-6 py-24">
            <p class="mb-3 text-sm font-semibold uppercase tracking-[0.25em] text-lime-300">02 / Skills</p>
            <h2 class="text-3xl font-bold sm:text-4xl">Tools I'm learning.</h2>
            <p class="mt-4 text-gray-400">My current development toolkit.</p>

            <div class="mt-10 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4">
                @foreach ([
                    ['PHP', 'Backend development'],
                    ['Laravel', 'Web applications & APIs'],
                    ['Tailwind CSS', 'Responsive interfaces'],
                    ['MySQL', 'Relational databases'],
                    ['JavaScript', 'Frontend interactions'],
                    ['HTML', 'Web page structure'],
                    ['Git', 'Version control'],
                    ['REST APIs', 'Application integration'],
                ] as $skill)
                    <div class="rounded-xl border border-white/10 bg-white/[0.03] p-5 transition hover:-translate-y-1 hover:border-lime-300/50">
                        <div class="mb-4 h-1 w-8 rounded-full bg-lime-300"></div>
                        <h3 class="font-semibold">{{ $skill[0] }}</h3>
                        <p class="mt-2 text-sm leading-6 text-gray-500">{{ $skill[1] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Projects -->
        <section id="projects" class="border-y border-white/10 bg-[#151615]">
            <div class="mx-auto max-w-6xl px-6 py-24">
                <p class="mb-3 text-sm font-semibold uppercase tracking-[0.25em] text-lime-300">03 / Projects</p>

                <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
                    <div>
                        <h2 class="text-3xl font-bold sm:text-4xl">Things I'm building.</h2>
                        <p class="mt-4 text-gray-400">A collection of projects and experiments.</p>
                    </div>
                    <span class="text-sm text-gray-500">Portfolio in progress</span>
                </div>

                <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                    <!-- Project 1 -->
                    <article class="group overflow-hidden rounded-2xl border border-white/10 bg-[#101110] transition hover:-translate-y-1 hover:border-lime-300/40">
                        <div class="flex h-48 items-center justify-center bg-gradient-to-br from-lime-300/15 to-transparent">
                            <div class="text-center">
                                <span class="text-5xl text-lime-300">⌘</span>
                                <p class="mt-3 text-sm text-gray-400">Laravel · MySQL</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-semibold uppercase tracking-widest text-lime-300">01 / In Progress</span>
                            <h3 class="mt-3 text-xl font-bold">Enrollment Management System</h3>
                            <p class="mt-3 text-sm leading-6 text-gray-400">
                                A planned system for managing student registration,
                                programs, subject selection, and enrollment records.
                            </p>
                            <p class="mt-5 text-sm text-gray-500">Laravel · MySQL · API</p>
                        </div>
                    </article>

                    <!-- Project 2 -->
                    <article class="group overflow-hidden rounded-2xl border border-white/10 bg-[#101110] transition hover:-translate-y-1 hover:border-lime-300/40">
                        <div class="flex h-48 items-center justify-center bg-gradient-to-br from-blue-400/15 to-transparent">
                            <div class="text-center">
                                <span class="text-5xl text-blue-300">⌁</span>
                                <p class="mt-3 text-sm text-gray-400">Full Stack · Web App</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-semibold uppercase tracking-widest text-blue-300">02 / Planned</span>
                            <h3 class="mt-3 text-xl font-bold">Project Management App</h3>
                            <p class="mt-3 text-sm leading-6 text-gray-400">
                                A planned application for organizing tasks, tracking
                                progress, and managing project information.
                            </p>
                            <p class="mt-5 text-sm text-gray-500">Laravel · Tailwind CSS</p>
                        </div>
                    </article>

                    <!-- Project 3 -->
                    <article class="group overflow-hidden rounded-2xl border border-white/10 bg-[#101110] transition hover:-translate-y-1 hover:border-lime-300/40">
                        <div class="flex h-48 items-center justify-center bg-gradient-to-br from-purple-400/15 to-transparent">
                            <div class="text-center">
                                <span class="text-5xl text-purple-300">⌗</span>
                                <p class="mt-3 text-sm text-gray-400">API · Database</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-semibold uppercase tracking-widest text-purple-300">03 / Planned</span>
                            <h3 class="mt-3 text-xl font-bold">API Integration App</h3>
                            <p class="mt-3 text-sm leading-6 text-gray-400">
                                A planned application exploring external APIs,
                                data processing, and dynamic web interfaces.
                            </p>
                            <p class="mt-5 text-sm text-gray-500">Laravel · JavaScript · APIs</p>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="mx-auto max-w-6xl px-6 py-24">
            <p class="mb-3 text-sm font-semibold uppercase tracking-[0.25em] text-lime-300">04 / Contact</p>
            <h2 class="max-w-2xl text-3xl font-bold leading-tight sm:text-5xl">
                Have an idea? <span class="text-lime-300">Let's build something.</span>
            </h2>
            <p class="mt-6 max-w-xl leading-7 text-gray-400">
                I'm interested in learning, collaborating, and building useful web applications.
                Feel free to reach out.
            </p>

            <a href="mailto:your-email@example.com"
               class="mt-8 inline-flex rounded-full bg-lime-300 px-6 py-3 font-semibold text-black transition hover:bg-lime-200">
                Get in Touch <span class="ml-2" aria-hidden="true">↗</span>
            </a>
            <p class="mt-3 text-xs text-gray-500">Replace the example email address with your own.</p>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-white/10">
        <div class="mx-auto flex max-w-6xl flex-col gap-3 px-6 py-8 text-sm text-gray-500 sm:flex-row sm:items-center sm:justify-between">
            <p>© {{ date('Y') }} Developer Portfolio</p>
            <p>Built with Laravel & Tailwind CSS.</p>
        </div>
    </footer>

</body>
</html>
```