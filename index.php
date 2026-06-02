<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDIK - Masuk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Mencegah reload halaman default
        
        // Ambil nilai dari input email
        const emailValue = document.getElementById('emailInput').value;
        
        // Simpan ke localStorage browser dengan nama 'userEmail'
        localStorage.setItem('userEmail', emailValue);
        
        // Pindahkan halaman ke beranda utama setelah berhasil menyimpan
        window.location.href = 'beranda.html'; 
    });
</script>
<body class="min-h-screen flex flex-col font-sans relative overflow-x-hidden">

    <svg class="fixed inset-0 w-full h-full -z-10 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080" preserveAspectRatio="xMidYMid slice">
        <defs>
            <linearGradient id="bgGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#E2D5BC" />
                <stop offset="40%" stop-color="#D4C5A9" />
                <stop offset="100%" stop-color="#BCAE94" />
            </linearGradient>
        </defs>
        <rect width="1920" height="1080" fill="url(#bgGrad)" />

        <g transform="rotate(45 960 540)" fill="white" opacity="0.07">
            <rect x="100" y="-400" width="500" height="500" />
            <rect x="700" y="-200" width="650" height="650" />
            <rect x="200" y="300" width="600" height="600" />
            <rect x="900" y="500" width="550" height="550" />
            <rect x="1500" y="100" width="450" height="450" />
            <rect x="-400" y="200" width="500" height="500" />
        </g>
        
        <g transform="rotate(45 960 540)" fill="black" opacity="0.03">
            <rect x="400" y="100" width="450" height="450" />
            <rect x="1100" y="200" width="500" height="500" />
            <rect x="600" y="900" width="400" height="400" />
        </g>
    </svg>
    <nav class="bg-[#3F2B1D] text-white py-4 px-6 md:px-16 flex justify-between items-center shadow-md z-10">
        <div class="text-3xl font-bold tracking-widest">
            SIDIK
        </div>
        
        <div class="hidden md:flex space-x-8 text-sm font-medium opacity-90">
            <a href="BukuPanduan.html" class="hover:text-amber-200 transition">Buku Panduan</a>
            <a href="Pelatihan.html" class="hover:text-amber-200 transition">Pelatihan</a>
            <a href="KlinikPengetahuan.html" class="hover:text-amber-200 transition">Klinik Pengetahuan</a>
            <a href="BerbagiPengetahuan.html" class="hover:text-amber-200 transition">Berbagi Pengetahuan</a>
        </div>

        <div class="md:hidden cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center p-4 z-10">
        
        <div class="bg-[#E4D5BE] p-8 md:p-10 rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.15)] w-full max-w-md border border-[#D0C0A8]">
            
            <h2 class="text-2xl font-bold text-[#4A3728] text-center mb-8 tracking-wide">
                Masuk ke Akun
            </h2>

            <form action="BerandaUtama.html"="POST" class="space-y-6">
                
                <div>
                    <label for="email" class="block text-[#4A3728] mb-2 font-medium text-sm md:text-base">Alamat E-mail</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="w-full px-4 py-3 rounded-xl bg-[#E6CDB3] text-[#4A3728] shadow-[inset_0_2px_5px_rgba(0,0,0,0.12)] border border-[#D9BF9E] focus:outline-none focus:ring-2 focus:ring-[#65452C] transition"
                        required
                        placeholder="Masukkan alamat e-mail"
                    >
                </div>

                <div>
                    <label for="katasandi" class="block text-[#4A3728] mb-2 font-medium text-sm md:text-base">Kata Sandi</label>
                    <input 
                        type="katasandi" 
                        id="katasandi" 
                        name="katasandi" 
                        class="w-full px-4 py-3 rounded-xl bg-[#E6CDB3] text-[#4A3728] shadow-[inset_0_2px_5px_rgba(0,0,0,0.12)] border border-[#D9BF9E] focus:outline-none focus:ring-2 focus:ring-[#65452C] transition"
                        required
                        placeholder="Masukkan katasandi"
                    >
                </div>

                <div class="pt-4">
                    <button 
                        type="submit" 
                        class="w-full bg-[#65452C] hover:bg-[#4A3728] text-white font-bold text-lg py-3.5 px-4 rounded-xl shadow-lg hover:shadow-xl transition duration-200 active:scale-[0.99]"
                    >
                        Masuk
                    </button>
                </div>

    </div>
</form>
</body>
</html>