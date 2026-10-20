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

           