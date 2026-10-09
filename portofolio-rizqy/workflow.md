# Developer Workflow & AI Agent Directives

## 1. System Directives (Strict Rules for AI)
1. **TypeScript Only:** Dilarang menggunakan ekstensi `.js` atau `.jsx`. Jangan gunakan tipe `any`. Semua tipe data dan antarmuka harus dideklarasikan secara eksplisit di `@/types/index.ts`.
2. **Component Modularity:** Dilarang melakukan hardcode teks pada komponen UI. Data profil, proyek, rekan tim, dan artikel jurnal WAJIB diimpor dari `@/data/content.ts`.
3. **Dynamic Components:** Ikon profil/avatar dilarang menggunakan inisial statis yang di-hardcode. Buat komponen avatar yang dapat menyesuaikan prop (dynamic rendering).
4. **Styling Rules:** Gunakan Tailwind CSS. Terapkan palet monokrom gelap (background zinc-950) dengan aksen neon (cyan-400). Terapkan border-radius 0px (sudut tajam) pada kartu proyek untuk estetika tegas. Hindari drop shadow yang berlebihan.
5. **Vibe Coding Workflow:** Saat menyalin komponen dari 21st.dev, pertahankan library animasi aslinya (misal: framer-motion) namun sesuaikan kelas warnanya dengan tema global yang telah ditetapkan.

## 2. Step-by-Step Implementation

### Phase 1: Environment & Scaffolding
- [ ] Inisialisasi Next.js (App Router): `npx create-next-app@latest portfolio --typescript --tailwind --eslint`.
- [ ] Instalasi dependensi UI: `npm i framer-motion lucide-react clsx tailwind-merge`.
- [ ] Setup struktur direktori utama:
  - `components/ui/` (Komponen visual mikroskopis, tombol, input, efek 21st.dev)
  - `components/sections/` (Komponen makro: Hero, Projects, About, Footer)
  - `components/layout/` (Navbar, Sidebar)
  - `data/` (Penyimpanan state statis)
  - `types/` (Definisi TypeScript)
  - `app/api/spotify/` (Endpoint API)

### Phase 2: State & Data Population
- [ ] Konfigurasi `tailwind.config.ts`: Tambahkan custom colors untuk neon aksen dan efek grainy overlay (noise pattern).
- [ ] Buat dan isi file `@/data/content.ts` dengan data JSON yang mencakup:
  - Personal Information & GSA 2026 details.
  - Project Data (ESL, Foleygen, Laba Pintar, BK Service).
  - Team Collaborators Data (termasuk gelar S.Kom dan S.Pd).

### Phase 3: Core Layout & External Integration
- [ ] **Navbar & Footer:** Bangun navigasi persisten. Implementasikan fetcher API Spotify di Footer. Jika tidak ada status *Currently Playing*, render default state list band (FSTVLST, The Adams).
- [ ] **Hero Section:** Implementasikan komponen Canvas Shader/Particle Face dari 21st.dev. Hubungkan dengan gambar sumber di `/public/profile.png`.
- [ ] **Milestones:** Bangun komponen Accordion menggunakan Framer Motion untuk daftar sertifikasi IT dan networking.

### Phase 4: Dynamic Routes & Page Assembly
- [ ] Generate halaman `/projects` menggunakan CSS Grid.
- [ ] Konfigurasi Dynamic Route `app/projects/[slug]/page.tsx` untuk melakukan pemetaan data proyek berdasarkan URL.
- [ ] Susun UI halaman `/journal` dengan styling tipografi agresif dan image filter (CSS `filter: grayscale(100%) contrast(120%)`).
- [ ] Pasang endpoint Web3Forms di `app/contact/page.tsx`.

### Phase 5: QA & Deployment
- [ ] Lakukan audit konsistensi UI di mode responsif (breakpoint `sm`, `md`, `lg`).
- [ ] Uji validasi form kontak.
- [ ] Push repository ke origin GitHub.
- [ ] Deploy ke Vercel dan injeksi Environment Variables: `SPOTIFY_CLIENT_ID`, `SPOTIFY_CLIENT_SECRET`, `SPOTIFY_REFRESH_TOKEN`, dan `WEB3FORMS_ACCESS_KEY`.