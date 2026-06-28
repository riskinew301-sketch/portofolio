<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Streetwear Edition</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Space Grotesk', 'sans-serif'],
                        mono: ['Courier New', 'monospace'],
                    },
                    colors: {
                        neon: '#00FF00',
                        dark: '#000000',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #000000;
            color: #f3f4f6;
            background-image: 
                radial-gradient(#333 1px, transparent 1px),
                radial-gradient(#333 1px, transparent 1px);
            background-position: 0 0, 20px 20px;
            background-size: 40px 40px;
        }
        .brutal-border {
            border: 2px solid #333;
            box-shadow: 4px 4px 0px #00FF00;
            transition: all 0.2s ease-in-out;
        }
        .brutal-border:hover {
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0px #00FF00;
        }
        
        .marquee {
            white-space: nowrap;
            overflow: hidden;
            box-sizing: border-box;
        }
        .marquee span {
            display: inline-block;
            padding-left: 100%;
            animation: marquee 15s linear infinite;
        }
        @keyframes marquee {
            0%   { transform: translate(0, 0); }
            100% { transform: translate(-100%, 0); }
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col selection:bg-neon selection:text-black">

    <!-- Navbar -->
    <nav class="border-b-2 border-[#333] sticky top-0 z-50 bg-dark/90 backdrop-blur-md relative">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-black tracking-tighter uppercase text-white">
                <span class="text-neon">PORTOFOLIO</span>
            </h1>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 font-mono text-sm uppercase tracking-widest">
                <a href="{{ route('home') }}" class="hover:text-neon transition-colors">Home</a>
                <a href="{{ route('about') }}" class="hover:text-neon transition-colors">About</a>
                <a href="{{ route('projects') }}" class="hover:text-neon transition-colors">Projects</a>
                <a href="{{ route('contact') }}" class="hover:text-neon transition-colors">Contact</a>
            </div>

            <!-- Hamburger Button (Mobile) -->
            <button id="mobile-menu-btn" class="md:hidden text-white hover:text-neon focus:outline-none transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu Panel -->
        <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-black border-b-2 border-neon z-40 md:hidden flex flex-col font-mono text-center uppercase tracking-widest divide-y-2 divide-[#333] shadow-[0_10px_30px_rgba(0,0,0,0.8)]">
            <a href="{{ route('home') }}" class="block py-5 text-gray-300 hover:text-black hover:bg-neon transition-all font-bold">Home</a>
            <a href="{{ route('about') }}" class="block py-5 text-gray-300 hover:text-black hover:bg-neon transition-all font-bold">About</a>
            <a href="{{ route('projects') }}" class="block py-5 text-gray-300 hover:text-black hover:bg-neon transition-all font-bold">Projects</a>
            <a href="{{ route('contact') }}" class="block py-5 text-gray-300 hover:text-black hover:bg-neon transition-all font-bold">Contact</a>
        </div>
    </nav>

    <!-- Marquee Tape -->
    <div class="bg-neon text-[#FF00FF] py-2 border-b-2 border-[#333] marquee font-mono text-sm font-bold uppercase overflow-hidden">
        <span>DEVELOPER // DESIGNER // CREATOR // BUILDING THE FUTURE // DEVELOPER // DESIGNER // CREATOR // BUILDING THE FUTURE // DEVELOPER // DESIGNER // CREATOR // BUILDING THE FUTURE</span>
    </div>

    <main class="flex-grow flex flex-col">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-t-2 border-[#333] bg-black py-12">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
            <h2 class="text-2xl font-black uppercase tracking-tighter text-white mb-4 md:mb-0">
                <span class="text-neon"> RIZQY NAUFAL PRADANA</span>
            </h2>
            <div class="font-mono text-xs text-gray-500 uppercase text-center md:text-right">
                &copy; {{ date('Y') }} ALL RIGHTS RESERVED. <br/> SYSTEM NOMINAL.
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');

            btn.addEventListener('click', function() {
                menu.classList.toggle('hidden');
                
                // Toggle SVG icon between hamburger and close (optional UX enhancement)
                if(menu.classList.contains('hidden')) {
                    btn.innerHTML = '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>';
                    btn.classList.remove('text-neon');
                } else {
                    btn.innerHTML = '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>';
                    btn.classList.add('text-neon');
                }
            });
        });
    </script>
</body>
</html>
