@extends('layouts.app')

@section('content')
    <!-- Projects Section -->
    <section id="projects" class="py-24 flex-grow bg-black/50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-16">
                <div>
                    <h2 class="text-4xl md:text-6xl font-black uppercase tracking-tighter">Projects</h2>
                    <p class="text-neon font-mono mt-2">> SELECTED WORKS_</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                <div class="brutal-border bg-dark p-6 flex flex-col group relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-5 group-hover:opacity-20 transition-opacity">
                        <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24"><path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/></svg>
                    </div>
                    
                    <h3 class="text-2xl font-bold uppercase mb-3 group-hover:text-neon transition-colors z-10">{{ $project->title }}</h3>
                    <p class="text-gray-400 text-sm mb-8 flex-grow z-10 leading-relaxed">{{ $project->description }}</p>
                    
                    <div class="mt-auto z-10 pt-6 border-t border-[#333]">
                        <div class="flex justify-between items-center">
                            <span class="font-mono text-xs text-gray-500 uppercase">{{ $project->tech_stack }}</span>
                            @if($project->link)
                            <a href="{{ $project->link }}" class="text-neon hover:underline font-mono text-xs uppercase">View ></a>
                            @else
                            <span class="text-gray-600 font-mono text-xs uppercase">Offline</span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
