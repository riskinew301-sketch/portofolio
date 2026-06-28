@extends('layouts.app')

@section('content')
<section id="contact" class="py-24 bg-[#000000] text-white flex-grow flex items-center relative overflow-hidden">
    <!-- Grainy overlay effect -->
    <div class="fixed inset-0 opacity-[0.15] pointer-events-none mix-blend-overlay z-0" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22/%3E%3C/svg%3E');"></div>
    
    <div class="container mx-auto px-6 max-w-6xl relative z-10">
        <div class="flex flex-col lg:flex-row gap-16 md:gap-24 items-center lg:items-stretch">
            
            <!-- Left Side: Connect & Socials -->
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h2 class="text-5xl md:text-7xl font-black uppercase tracking-tighter mb-4 leading-none">
                    Let's <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-neon to-gray-500">Connect</span>
                </h2>
                <div class="inline-block border border-[#333] text-gray-400 px-3 py-1 font-mono text-xs uppercase mb-8 bg-black w-fit">
                    > INITIATE_CONTACT_SEQUENCE
                </div>
                
                <p class="text-gray-400 text-lg md:text-xl font-light mb-12 leading-relaxed">
                    Punya ide proyek, tawaran kolaborasi, atau sekadar ingin menyapa? Tinggalkan pesan atau temukan saya di platform lainnya.
                </p>

                <!-- Social Icons -->
                <div class="flex gap-4 md:gap-6 mt-auto">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/riznfpradana?igsh=NmlmZnU1aG84eXpp&utm_source=qr" class="group relative brutal-border bg-black p-4 transition-all duration-300 hover:-translate-y-2 shadow-lg border-[#333] hover:border-neon flex items-center justify-center">
                        <div class="absolute inset-0 bg-neon opacity-0 group-hover:opacity-10 mix-blend-overlay transition-opacity"></div>
                        <svg class="w-8 h-8 md:w-10 md:h-10 text-gray-400 group-hover:text-neon transition-colors filter drop-shadow-none group-hover:drop-shadow-[0_0_8px_#00FF00]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                        </svg>
                    </a>

                    <!-- TikTok -->
                    <a href="https://www.tiktok.com/@riskinppp?is_from_webapp=1&sender_device=pc" class="group relative brutal-border bg-black p-4 transition-all duration-300 hover:-translate-y-2 shadow-lg border-[#333] hover:border-neon flex items-center justify-center">
                        <div class="absolute inset-0 bg-neon opacity-0 group-hover:opacity-10 mix-blend-overlay transition-opacity"></div>
                        <svg class="w-8 h-8 md:w-10 md:h-10 text-gray-400 group-hover:text-neon transition-colors filter drop-shadow-none group-hover:drop-shadow-[0_0_8px_#00FF00]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.04.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93v7.2c0 1.96-.5 3.96-1.82 5.36-1.5 1.59-3.8 2.2-5.98 1.84-2.19-.36-4.14-1.77-5.14-3.75-1-1.99-1-4.42.06-6.38 1.07-1.95 2.99-3.32 5.16-3.73.49-.09.99-.13 1.49-.13V12c-1.39.02-2.76.5-3.88 1.4-1.12.9-1.85 2.21-2.1 3.63-.26 1.41.05 2.9.84 4.09.79 1.2 2.05 2.05 3.49 2.37 1.44.32 2.98.05 4.21-.73 1.23-.77 2.08-2.02 2.4-3.44.07-.31.11-.63.11-.96V.02h-2.91z"/>
                        </svg>
                    </a>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/rizqy-naufal-pradana-420014345?utm_source=share_via&utm_content=profile&utm_medium=member_ios" class="group relative brutal-border bg-black p-4 transition-all duration-300 hover:-translate-y-2 shadow-lg border-[#333] hover:border-neon flex items-center justify-center">
                        <div class="absolute inset-0 bg-neon opacity-0 group-hover:opacity-10 mix-blend-overlay transition-opacity"></div>
                        <svg class="w-8 h-8 md:w-10 md:h-10 text-gray-400 group-hover:text-neon transition-colors filter drop-shadow-none group-hover:drop-shadow-[0_0_8px_#00FF00]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="w-full lg:w-7/12">
                <div class="brutal-border bg-[#111] p-8 md:p-12 border-[#333]">
                    
                    @if(session('success'))
                    <div class="bg-black text-neon border-2 border-neon p-4 mb-8 font-mono font-bold uppercase text-center brutal-border shadow-[0_0_15px_rgba(0,255,0,0.4)]">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('message.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block font-bold uppercase tracking-widest text-sm mb-2 text-gray-400">Identifier // Name</label>
                            <input type="text" id="name" name="name" required class="w-full bg-black border-2 border-[#333] p-4 text-white focus:outline-none focus:border-neon focus:shadow-[0_0_15px_rgba(0,255,0,0.2)] transition-all brutal-border font-mono placeholder-[#555]" placeholder="ENTER NAME">
                            @error('name') <span class="text-red-500 font-mono text-xs font-bold mt-2 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="email" class="block font-bold uppercase tracking-widest text-sm mb-2 text-gray-400">Comms // Email</label>
                            <input type="email" id="email" name="email" required class="w-full bg-black border-2 border-[#333] p-4 text-white focus:outline-none focus:border-neon focus:shadow-[0_0_15px_rgba(0,255,0,0.2)] transition-all brutal-border font-mono placeholder-[#555]" placeholder="ENTER EMAIL">
                            @error('email') <span class="text-red-500 font-mono text-xs font-bold mt-2 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="content" class="block font-bold uppercase tracking-widest text-sm mb-2 text-gray-400">Payload // Message</label>
                            <textarea id="content" name="content" rows="4" required class="w-full bg-black border-2 border-[#333] p-4 text-white focus:outline-none focus:border-neon focus:shadow-[0_0_15px_rgba(0,255,0,0.2)] transition-all brutal-border font-mono placeholder-[#555]" placeholder="ENTER MESSAGE"></textarea>
                            @error('content') <span class="text-red-500 font-mono text-xs font-bold mt-2 block">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="w-full brutal-border bg-neon text-black border-neon px-10 py-5 font-black uppercase tracking-widest hover:bg-white hover:border-white transition-colors text-lg mt-6">
                            Transmit Data
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
