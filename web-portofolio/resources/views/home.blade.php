@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <header class="container mx-auto px-6 py-24 flex flex-col items-center justify-center text-center min-h-[70vh]">
        <div class="inline-block border border-neon text-neon px-3 py-1 font-mono text-xs uppercase mb-6 bg-neon/10">
            System Online v1.0.0
        </div>
        <h1 class="text-6xl md:text-8xl font-black uppercase tracking-tighter leading-none mb-6">
            Digital <br /> <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-500">Craftsman</span>
        </h1>
        <p class="text-gray-400 max-w-xl mx-auto text-lg md:text-xl font-light mb-10">
            Berjalan Tak Seperti Rencana Adalah Jalan Yang Sudah Biasa.
        </p>
        <a href="{{ route('projects') }}" class="brutal-border bg-dark text-white px-8 py-4 font-bold uppercase tracking-widest text-sm hover:text-neon">
            Explore Archives
        </a>
    </header>

    <!-- Skills Section -->
    <section id="skills" class="border-t-2 border-[#333] py-24 bg-black/50 flex-grow">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-6xl font-black uppercase tracking-tighter">Arsenal</h2>
                <p class="text-neon font-mono mt-2">> TECH STACK & CAPABILITIES_</p>
            </div>

            <div class="flex flex-wrap justify-center gap-6 max-w-4xl mx-auto">
                @foreach($skills as $skill)
                <div class="brutal-border bg-dark px-6 py-4 flex items-center space-x-3 hover:bg-[#1a1a1a]">
                    <div class="w-2 h-2 bg-neon rounded-none shadow-[0_0_8px_#00FF00]"></div>
                    <span class="font-bold text-lg uppercase tracking-wide">{{ $skill->name }}</span>
                    <span class="font-mono text-[10px] text-gray-500 border border-[#333] px-2 py-1 ml-4 bg-black">
                        {{ $skill->category }}
                    </span>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
