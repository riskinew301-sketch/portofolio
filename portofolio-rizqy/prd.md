# Product Requirements Document (PRD)

**Project Name:** Interactive Personal Portfolio
**Developer:** Rizqy Naufal Pradana
**Role:** Frontend Developer & Network Engineering Enthusiast
**Status:** In Development (Q3 2026)

## 1. Project Objective
Membangun web portofolio statis, interaktif, responsif, dan berkinerja tinggi. Web ini berfungsi untuk memvalidasi transisi keahlian dari infrastruktur jaringan (SMK TKJ) menuju rekayasa perangkat lunak modern (Informatika UMBY). Portofolio akan memamerkan proyek pengembangan aplikasi, rekam jejak kepemimpinan (GSA 2026), serta preferensi estetika personal (streetwear, analog/grainy photography, indie rock).

## 2. Tech Stack & Infrastructure
- **Framework:** Next.js (App Router)
- **Language:** TypeScript (Strict Mode)
- **Styling:** Tailwind CSS (Theme: Dark zinc/slate, Neon cyan/electric blue accents)
- **Animation & UI:** Framer Motion, Komponen 21st.dev (WebGL, Canvas, Shaders)
- **Data Architecture:** Local JSON/TS File (`@/data/content.ts`), tanpa database backend.
- **Form Handling:** Web3Forms / Formspree (Direct to email)
- **Third-Party API:** Spotify Web API (Real-time Currently Playing Widget)
- **Version Control & Hosting:** Git, GitHub, Vercel (Domain `.vercel.app`)

## 3. Core Features & Sitemap

### A. Home (`/`)
- **Hero Section:**
  - Menggunakan komponen animasi visual canvas/piksel dari 21st.dev.
  - Merender foto profil (kontras tinggi, low-key lighting, background hitam murni).
  - Headline utama: "Frontend Developer | Google Student Ambassador '26".
  - Avatar Profile Icon: Wajib menggunakan sistem dinamis yang mencerminkan role user (bukan inisial statis "RN" yang di-hardcode).
- **About Me:** 
  - Narasi transisi keahlian dari hardware/networking (Mikrotik RouterOS) ke software development (PL/SQL, Java, React).
- **Milestones:**
  - Google Student Ambassador (2026): Delegasi terpilih dari 81.000+ pendaftar.
  - Delegasi Konferensi Pemuda Nasional (2026).
- **Skills & Certifications:**
  - Komponen UI: Accordion lipat untuk menjaga tampilan tetap clean. Menyembunyikan gambar sertifikat di dalam panel yang bisa di-expand.
- **Footer (Easter Egg):** 
  - Spotify Web API Widget: Menampilkan lagu yang sedang diputar secara real-time. State default/offline menampilkan "Last Played: FSTVLST / The Adams / The Milo".

### B. Projects (`/projects` & `/projects/[slug]`)
- **Grid Layout:** Menampilkan kartu proyek unggulan:
  1. **ESL (Electronic School Liaison):** Super-app platform untuk manajemen sekolah, pembayaran digital, dan komunikasi guru-orang tua.
  2. **Foleygen:** Platform generative AI untuk sintesis efek audio latar belakang orisinal dari deskripsi teks.
  3. **Laba Pintar:** Aplikasi business tool dan kalkulator profit. Menampilkan kredit kolaborasi tim: UI/UX Designer (K Bayu Nugroho), Researcher (M Yasir Al Fatah), dan Project Coordinator (Agustina Sri Untari, S.Pd).
  4. **BK Service Web:** Platform layanan Bimbingan Konseling interaktif dengan integrasi AI.
- **Dynamic Routing:** Menggunakan `[slug]` untuk halaman detail masing-masing proyek yang merender deskripsi, stack, dan screenshot dari file data lokal.

### C. Journal (`/journal`)
- Halaman blog statis untuk tulisan di balik layar.
- Topik: Dokumentasi teknis, analisis arsitektur, pengalaman seleksi GSA, atau eksplorasi data science publik.
- Estetika: Thumbnail artikel menggunakan filter analog, CCTV style, atau efek grainy.

### D. Contact (`/contact`)
- Formulir sederhana: Nama, Email, Pesan.
- Terintegrasi tanpa backend menggunakan Web3Forms.