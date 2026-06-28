@extends('layouts.app')

@section('content')
<div class="bg-black/80 flex-grow relative overflow-hidden pb-24">
    <!-- Grainy overlay effect -->
    <div class="fixed inset-0 opacity-[0.15] pointer-events-none mix-blend-overlay z-0" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22/%3E%3C/svg%3E');"></div>
    
    <!-- 1. Profile Section & Photos -->
    <section class="pt-24 pb-32 relative z-10 border-b-2 border-[#333]">
        <div class="container mx-auto px-6">
            <h1 class="text-5xl md:text-8xl font-black uppercase tracking-tighter mb-4 text-center md:text-left">
                About <span class="text-transparent bg-clip-text bg-gradient-to-r from-neon to-gray-500">Me</span>
            </h1>
            <div class="inline-block border border-[#333] text-gray-400 px-3 py-1 font-mono text-xs uppercase mb-16 bg-black">
                > IDENTITY_LOG_01
            </div>

            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <!-- Text Narrative -->
                <div class="w-full lg:w-1/2 space-y-6 text-gray-300 text-lg md:text-xl font-light leading-relaxed">
                    <p>
                        Saya adalah seorang <strong class="text-white font-bold">Lulusan SMK jurusan Teknik Komputer dan Jaringan (TKJ)</strong> yang selalu terobsesi dengan bagaimana sebuah sistem berkomunikasi di balik layar.
                    </p>
                    <p>
                        Saat ini, saya sedang mengekspansi limitasi saya dengan menempuh studi sebagai <strong class="text-neon font-bold">Mahasiswa Informatika di Universitas Mercu Buana Yogyakarta</strong>. 
                    </p>
                    <p>
                        Kombinasi antara pemahaman infrastruktur jaringan dan rekayasa perangkat lunak memberi saya sudut pandang arsitektural yang unik dalam membangun produk digital.
                    </p>
                    <div class="pt-8 border-t-2 border-[#333] font-mono text-sm text-neon flex flex-col gap-2">
                        <p>> SYS_STATUS: LEARNING_AND_BUILDING</p>
                        <p>> LOCATION: YOGYAKARTA, ID</p>
                    </div>
                </div>

                <!-- 2. Polaroid / Asymmetric Photos -->
                <div class="w-full lg:w-1/2 relative h-[400px] md:h-[500px] mt-12 lg:mt-0">
                    <!-- Photo 1 -->
                    <div class="absolute top-0 left-0 md:left-12 z-20 brutal-border bg-[#e5e5e5] p-3 pb-12 rotate-[-6deg] hover:rotate-[2deg] hover:scale-105 transition-all duration-300 shadow-2xl w-48 md:w-64">
                        <div class="overflow-hidden border border-[#999]">
                            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=600&auto=format&fit=crop" class="w-full h-auto grayscale contrast-125 sepia-[.2]" alt="Coding Setup">
                        </div>
                        <p class="absolute bottom-3 left-0 w-full text-center text-black font-mono text-sm font-bold tracking-widest">LAB_01</p>
                    </div>
                    
                    <!-- Photo 2 -->
                    <div class="absolute top-32 right-0 md:right-12 z-10 brutal-border bg-[#e5e5e5] p-3 pb-12 rotate-[8deg] hover:rotate-[-2deg] hover:scale-105 transition-all duration-300 shadow-2xl w-48 md:w-64">
                        <div class="overflow-hidden border border-[#999]">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=600&auto=format&fit=crop" class="w-full h-auto grayscale contrast-125 sepia-[.2]" alt="Campus Life">
                        </div>
                        <p class="absolute bottom-3 left-0 w-full text-center text-black font-mono text-sm font-bold tracking-widest">CAMPUS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Pengalaman (Timeline) -->
    <section class="py-24 relative z-10 border-b-2 border-[#333]">
        <div class="container mx-auto px-6 max-w-5xl">
            <h2 class="text-4xl md:text-6xl font-black uppercase tracking-tighter mb-4 md:text-right">
                Experience
            </h2>
            <div class="flex md:justify-end mb-16">
                <div class="inline-block border border-[#333] text-gray-400 px-3 py-1 font-mono text-xs uppercase bg-black">
                    > CAREER_TIMELINE
                </div>
            </div>

            <!-- Timeline Container -->
            <div class="relative border-l-2 border-[#333] hover:border-neon transition-colors duration-500 pl-8 space-y-12 ml-2 md:ml-0">
                
                <!-- Timeline Item 1 -->
                <div class="relative group">
                    <div class="absolute -left-[41px] top-0 w-5 h-5 bg-black border-2 border-[#333] group-hover:border-neon group-hover:bg-neon transition-colors duration-300"></div>
                    <div class="brutal-border bg-dark p-6 md:p-8 hover:bg-[#111] transition-colors">
                        <span class="text-neon font-mono text-sm uppercase font-bold tracking-widest block mb-2">> 2023 - PRESENT</span>
                        <h3 class="text-2xl md:text-3xl font-black uppercase text-white mb-2">Google Student Ambassador</h3>
                        <h4 class="text-gray-400 font-mono text-sm mb-6 border-b border-[#333] pb-4 inline-block">Google Developer Student Clubs (GDSC)</h4>
                        <p class="text-gray-300 font-light leading-relaxed">
                            Terpilih sebagai perwakilan kampus untuk menjembatani mahasiswa dengan teknologi ekosistem Google. Bertanggung jawab mengorganisir workshop teknologi, hackathon, dan sesi belajar bersama untuk menumbuhkan serta memberdayakan komunitas developer mahasiswa di kampus.
                        </p>
                    </div>
                </div>
                
                <!-- Timeline Item 2 -->
                <div class="relative group">
                    <div class="absolute -left-[41px] top-0 w-5 h-5 bg-black border-2 border-[#333] group-hover:border-neon group-hover:bg-neon transition-colors duration-300"></div>
                    <div class="brutal-border bg-dark p-6 md:p-8 hover:bg-[#111] transition-colors opacity-75 hover:opacity-100">
                        <span class="text-neon font-mono text-sm uppercase font-bold tracking-widest block mb-2">> 2021 - 2023</span>
                        <h3 class="text-2xl md:text-3xl font-black uppercase text-white mb-2">Network Administrator Intern</h3>
                        <h4 class="text-gray-400 font-mono text-sm mb-6 border-b border-[#333] pb-4 inline-block">Laboratorium TKJ SMK</h4>
                        <p class="text-gray-300 font-light leading-relaxed">
                            Mengelola dan melakukan maintenance pada topologi jaringan lab komputer sekolah. Melakukan konfigurasi router Mikrotik dan Cisco, serta memastikan kelancaran koneksi intranet dan internet untuk ujian dan praktikum siswa.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. Sertifikat (Grid) -->
    <section class="py-24 relative z-10">
        <div class="container mx-auto px-6 max-w-6xl">
            <h2 class="text-4xl md:text-6xl font-black uppercase tracking-tighter mb-4 text-center">
                Certifications
            </h2>
            <div class="flex justify-center mb-16">
                <div class="inline-block border border-[#333] text-gray-400 px-3 py-1 font-mono text-xs uppercase bg-black">
                    > ACHIEVEMENTS_LOG
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Cert 1 -->
                <div class="brutal-border bg-dark p-5 group hover:bg-[#0a0a0a] transition-colors flex flex-col">
                    <div class="w-full h-48 bg-[#1a1a1a] mb-6 flex items-center justify-center border-2 border-[#333] group-hover:border-neon transition-colors overflow-hidden relative">
                        <div class="absolute inset-0 bg-neon opacity-0 group-hover:opacity-10 mix-blend-overlay transition-opacity z-10"></div>
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover grayscale opacity-40 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-700" alt="Certificate">
                    </div>
                    <h3 class="font-bold uppercase text-lg md:text-xl text-white group-hover:text-neon transition-colors leading-tight mb-2">Belajar Membuat Front-End Web untuk Pemula</h3>
                    <div class="mt-auto pt-4 flex justify-between items-end border-t border-[#333]">
                        <span class="font-mono text-[10px] text-gray-500 uppercase tracking-widest">Dicoding Indonesia</span>
                        <span class="font-mono text-neon text-xs font-bold">2023</span>
                    </div>
                </div>

                <!-- Cert 2 -->
                <div class="brutal-border bg-dark p-5 group hover:bg-[#0a0a0a] transition-colors flex flex-col">
                    <div class="w-full h-48 bg-[#1a1a1a] mb-6 flex items-center justify-center border-2 border-[#333] group-hover:border-neon transition-colors overflow-hidden relative">
                        <div class="absolute inset-0 bg-neon opacity-0 group-hover:opacity-10 mix-blend-overlay transition-opacity z-10"></div>
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover grayscale opacity-40 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-700" alt="Certificate">
                    </div>
                    <h3 class="font-bold uppercase text-lg md:text-xl text-white group-hover:text-neon transition-colors leading-tight mb-2">MikroTik Certified Network Associate (MTCNA)</h3>
                    <div class="mt-auto pt-4 flex justify-between items-end border-t border-[#333]">
                        <span class="font-mono text-[10px] text-gray-500 uppercase tracking-widest">MikroTik</span>
                        <span class="font-mono text-neon text-xs font-bold">2022</span>
                    </div>
                </div>

                <!-- Cert 3 -->
                <div class="brutal-border bg-dark p-5 group hover:bg-[#0a0a0a] transition-colors flex flex-col">
                    <div class="w-full h-48 bg-[#1a1a1a] mb-6 flex items-center justify-center border-2 border-[#333] group-hover:border-neon transition-colors overflow-hidden relative">
                        <div class="absolute inset-0 bg-neon opacity-0 group-hover:opacity-10 mix-blend-overlay transition-opacity z-10"></div>
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover grayscale opacity-40 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-700" alt="Certificate">
                    </div>
                    <h3 class="font-bold uppercase text-lg md:text-xl text-white group-hover:text-neon transition-colors leading-tight mb-2">Google Cloud Computing Foundations</h3>
                    <div class="mt-auto pt-4 flex justify-between items-end border-t border-[#333]">
                        <span class="font-mono text-[10px] text-gray-500 uppercase tracking-widest">Google Cloud</span>
                        <span class="font-mono text-neon text-xs font-bold">2024</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
