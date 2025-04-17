<?php $title = 'Beranda'; $this->load->view('templates/header'); ?>    
    
    <!-- Hero Section -->
    <section id="home" class="hero h-screen flex items-center justify-center text-white">
        <div class="text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Petualangan Tak Terlupakan Menuju Puncak</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Pesan tiket pendakian gunung favoritmu dengan mudah dan aman. Jelajahi keindahan alam Indonesia yang memesona.</p>
            <a href="#pesan" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-full text-lg transition duration-300 inline-block animate-bounce-slow">
                Pesan Sekarang <i class="fas fa-arrow-down ml-2"></i>
            </a>
        </div>
    </section>

    <!-- Popular Destinations -->
    <section id="destinasi" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Destinasi Populer</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Temukan gunung-gunung terbaik di Indonesia yang siap memberikan pengalaman mendaki yang tak terlupakan.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Mountain Card 1 -->
                <div class="mountain-card bg-white rounded-xl overflow-hidden shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1588666309990-d68f08e3d2a6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Gunung Rinjani" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold text-gray-800">Gunung Rinjani</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">Populer</span>
                        </div>
                        <p class="text-gray-600 mb-4">Gunung berapi aktif di Lombok dengan danau kawah yang indah dan pemandangan spektakuler.</p>
                        <div class="flex items-center text-yellow-500 mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-gray-600 ml-2">4.7 (1,234 review)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-green-700 font-bold">Rp 350.000</span>
                            <button class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-full text-sm transition">
                                Detail <i class="fas fa-chevron-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Mountain Card 2 -->
                <div class="mountain-card bg-white rounded-xl overflow-hidden shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1605540436563-5bca919ae766?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Gunung Semeru" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold text-gray-800">Gunung Semeru</h3>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">Menantang</span>
                        </div>
                        <p class="text-gray-600 mb-4">Gunung tertinggi di Jawa dengan puncak Mahameru yang legendaris dan pemandangan yang epik.</p>
                        <div class="flex items-center text-yellow-500 mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-gray-600 ml-2">4.5 (987 review)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-green-700 font-bold">Rp 300.000</span>
                            <button class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-full text-sm transition">
                                Detail <i class="fas fa-chevron-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Mountain Card 3 -->
                <div class="mountain-card bg-white rounded-xl overflow-hidden shadow-lg transition duration-300">
                    <img src="https://images.unsplash.com/photo-1620641783765-2a456072f3e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Gunung Prau" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold text-gray-800">Gunung Prau</h3>
                            <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded">Ramah Pemula</span>
                        </div>
                        <p class="text-gray-600 mb-4">Destinasi favorit untuk melihat sunrise dengan padang edelweiss yang luas dan pemandangan 360°.</p>
                        <div class="flex items-center text-yellow-500 mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-gray-600 ml-2">4.9 (1,567 review)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-green-700 font-bold">Rp 250.000</span>
                            <button class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-full text-sm transition">
                                Detail <i class="fas fa-chevron-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="border-2 border-green-600 text-green-600 hover:bg-green-600 hover:text-white font-bold py-3 px-8 rounded-full transition duration-300">
                    Lihat Semua Destinasi <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Booking Form -->
    <section id="pesan" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-xl booking-form overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2 bg-green-700 text-white p-8">
                        <h2 class="text-3xl font-bold mb-6">Pesan Tiket Pendakian</h2>
                        <p class="mb-6">Isi formulir berikut untuk memesan tiket pendakian gunung pilihan Anda. Tim kami akan segera menghubungi Anda untuk konfirmasi.</p>
                        
                        <div class="bg-green-600 p-4 rounded-lg mb-6">
                            <h3 class="font-bold mb-2">Kenapa memesan melalui kami?</h3>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle mt-1 mr-2"></i>
                                    <span>Harga terbaik dengan kualitas terjamin</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle mt-1 mr-2"></i>
                                    <span>Pemandu profesional dan berpengalaman</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle mt-1 mr-2"></i>
                                    <span>Perlengkapan standar keselamatan</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle mt-1 mr-2"></i>
                                    <span>Proses pembayaran yang aman</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="flex items-center">
                            <i class="fas fa-phone-alt mr-3 text-xl"></i>
                            <div>
                                <p class="text-sm text-green-200">Butuh bantuan?</p>
                                <p class="font-bold">0812-3456-7890</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="md:w-1/2 p-8">
                        <form id="bookingForm" class="space-y-4">
                            <div>
                                <label for="mountain" class="block text-gray-700 font-medium mb-2">Pilih Gunung</label>
                                <select id="mountain" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option value="">-- Pilih Gunung --</option>
                                    <option value="rinjani">Gunung Rinjani</option>
                                    <option value="semeru">Gunung Semeru</option>
                                    <option value="prau">Gunung Prau</option>
                                    <option value="bromo">Gunung Bromo</option>
                                    <option value="merbabu">Gunung Merbabu</option>
                                    <option value="sindoro">Gunung Sindoro</option>
                                </select>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="date" class="block text-gray-700 font-medium mb-2">Tanggal Pendakian</label>
                                    <input type="date" id="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                                </div>
                                <div>
                                    <label for="duration" class="block text-gray-700 font-medium mb-2">Durasi</label>
                                    <select id="duration" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                                        <option value="1d1n">1 Hari 1 Malam</option>
                                        <option value="2d1n">2 Hari 1 Malam</option>
                                        <option value="3d2n">3 Hari 2 Malam</option>
                                        <option value="4d3n">4 Hari 3 Malam</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="participants" class="block text-gray-700 font-medium mb-2">Jumlah Peserta</label>
                                    <input type="number" id="participants" min="1" max="20" value="1" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                                </div>
                                <div>
                                    <label for="package" class="block text-gray-700 font-medium mb-2">Paket</label>
                                    <select id="package" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                                        <option value="regular">Regular</option>
                                        <option value="premium">Premium</option>
                                        <option value="private">Private Trip</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                                <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Masukkan nama lengkap">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Masukkan alamat email">
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
                                <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Masukkan nomor telepon">
                            </div>
                            
                            <div class="pt-2">
                                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                                    Pesan Tiket <i class="fas fa-paper-plane ml-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Apa Kata Mereka?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Pengalaman nyata dari pendaki yang telah menggunakan layanan kami.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Testimonial" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold">Dewi Lestari</h4>
                            <div class="flex text-yellow-500 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Pengalaman mendaki Gunung Rinjani bersama GunungKita sangat luar biasa! Pemandu profesional, perlengkapan lengkap, dan pelayanan yang ramah. Sangat direkomendasikan!"</p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Testimonial" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold">Budi Santoso</h4>
                            <div class="flex text-yellow-500 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Ini pertama kalinya saya mendaki Gunung Semeru. Tim dari GunungKita sangat membantu dan memperhatikan keselamatan kami. Sunrise di Mahameru benar-benar spektakuler!"</p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/63.jpg" alt="Testimonial" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold">Anita Rahayu</h4>
                            <div class="flex text-yellow-500 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Pilihan tepat untuk pemula seperti saya. Gunung Prau dengan pemandangan edelweiss yang luas dan sunrise yang indah. Pemandu sangat sabar membimbing kami."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="py-16 bg-green-800 text-white">
        <div class="container mx-auto px-4">
            <div class="md:flex items-center">
                <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Tentang GunungKita</h2>
                    <p class="mb-4">GunungKita adalah platform pemesanan tiket pendakian gunung terpercaya di Indonesia yang telah berdiri sejak 2015. Kami berkomitmen untuk memberikan pengalaman mendaki yang aman, nyaman, dan berkesan.</p>
                    <p class="mb-6">Dengan lebih dari 50 gunung tujuan dan ribuan pendaki yang telah menggunakan layanan kami, kami bangga menjadi mitra petualangan Anda.</p>
                    
                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="flex items-center">
                            <div class="bg-green-600 rounded-full w-12 h-12 flex items-center justify-center mr-3">
                                <i class="fas fa-mountain text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-xl">50+</p>
                                <p class="text-sm text-green-200">Gunung Tujuan</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-green-600 rounded-full w-12 h-12 flex items-center justify-center mr-3">
                                <i class="fas fa-users text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-xl">10.000+</p>
                                <p class="text-sm text-green-200">Pendaki</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-green-600 rounded-full w-12 h-12 flex items-center justify-center mr-3">
                                <i class="fas fa-calendar-alt text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-xl">8 Tahun</p>
                                <p class="text-sm text-green-200">Pengalaman</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-green-600 rounded-full w-12 h-12 flex items-center justify-center mr-3">
                                <i class="fas fa-map-marked-alt text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-xl">15+</p>
                                <p class="text-sm text-green-200">Lokasi Basecamp</p>
                            </div>
                        </div>
                    </div>
                    
                    <button class="border-2 border-white hover:bg-white hover:text-green-800 font-bold py-2 px-6 rounded-full transition duration-300">
                        Pelajari Lebih Lanjut
                    </button>
                </div>
                
                <div class="md:w-1/2">
                    <div class="bg-white bg-opacity-10 p-6 rounded-xl backdrop-blur-sm">
                        <h3 class="text-xl font-bold mb-4">Mengapa Memilih Kami?</h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-green-600 rounded-full w-8 h-8 flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                    <i class="fas fa-shield-alt text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold">Keamanan Terjamin</h4>
                                    <p class="text-sm text-green-200">Peralatan keselamatan standar internasional dan pemandu bersertifikat.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-green-600 rounded-full w-8 h-8 flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                    <i class="fas fa-hand-holding-usd text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold">Harga Terjangkau</h4>
                                    <p class="text-sm text-green-200">Harga kompetitif dengan kualitas pelayanan terbaik.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-green-600 rounded-full w-8 h-8 flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                    <i class="fas fa-headset text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold">Layanan 24/7</h4>
                                    <p class="text-sm text-green-200">Tim customer service siap membantu kapan saja.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-green-600 rounded-full w-8 h-8 flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                    <i class="fas fa-leaf text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold">Ramah Lingkungan</h4>
                                    <p class="text-sm text-green-200">Menerapkan prinsip Leave No Trace dalam setiap pendakian.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Pertanyaan yang Sering Diajukan</h2>
                <p class="text-gray-600">Temukan jawaban atas pertanyaan umum seputar pendakian dan layanan kami.</p>
            </div>
            
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-toggle w-full flex justify-between items-center p-4 bg-white hover:bg-gray-50 transition text-left">
                        <span class="font-medium">Bagaimana cara memesan tiket pendakian?</span>
                        <i class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-4 pb-4 pt-0 bg-white">
                        <p class="text-gray-600">Anda dapat memesan tiket pendakian melalui website kami dengan mengisi formulir pemesanan atau menghubungi customer service kami via WhatsApp di 0812-3456-7890. Setelah pemesanan, Anda akan menerima email konfirmasi dengan detail pembayaran.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-toggle w-full flex justify-between items-center p-4 bg-white hover:bg-gray-50 transition text-left">
                        <span class="font-medium">Apa saja yang termasuk dalam paket pendakian?</span>
                        <i class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-4 pb-4 pt-0 bg-white">
                        <p class="text-gray-600">Paket pendakian kami umumnya termasuk: tiket masuk kawasan, pemandu profesional, tenda, sleeping bag, matras, makan selama pendakian, transportasi dari basecamp ke titik awal pendakian (jika diperlukan), dan asuransi dasar. Perlengkapan pribadi seperti sepatu hiking dan jaket tidak termasuk.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-toggle w-full flex justify-between items-center p-4 bg-white hover:bg-gray-50 transition text-left">
                        <span class="font-medium">Bagaimana jika cuaca buruk saat hari pendakian?</span>
                        <i class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-4 pb-4 pt-0 bg-white">
                        <p class="text-gray-600">Kami memprioritaskan keselamatan pendaki. Jika cuaca sangat buruk dan berpotensi membahayakan, pendakian akan ditunda atau dibatalkan. Anda dapat memilih jadwal alternatif atau mendapatkan refund sesuai kebijakan kami. Keputusan akan diambil oleh pemandu berpengalaman kami.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-toggle w-full flex justify-between items-center p-4 bg-white hover:bg-gray-50 transition text-left">
                        <span class="font-medium">Apakah ada batasan usia untuk pendakian?</span>
                        <i class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-4 pb-4 pt-0 bg-white">
                        <p class="text-gray-600">Untuk pendakian gunung dengan tingkat kesulitan sedang hingga tinggi (seperti Semeru atau Rinjani), kami merekomendasikan usia minimal 17 tahun. Untuk gunung dengan jalur lebih mudah seperti Prau, anak-anak minimal 12 tahun boleh ikut dengan pendampingan orang tua. Semua peserta wajib memiliki kondisi fisik yang prima.</p>
                    </div>
                </div>
                
                <!-- FAQ Item 5 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-toggle w-full flex justify-between items-center p-4 bg-white hover:bg-gray-50 transition text-left">
                        <span class="font-medium">Bagaimana kebijakan pembatalan dan refund?</span>
                        <i class="fas fa-chevron-down transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-4 pb-4 pt-0 bg-white">
                        <p class="text-gray-600">Pembatalan lebih dari 14 hari sebelum tanggal pendakian: refund 80%. Pembatalan 7-14 hari sebelum pendakian: refund 50%. Pembatalan kurang dari 7 hari: tidak ada refund tetapi bisa dijadwalkan ulang dengan biaya administrasi. Pembatalan karena alasan medis (dengan bukti dokter) bisa mendapatkan refund penuh.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-12 bg-green-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">Dapatkan Info Pendakian Terbaru</h2>
            <p class="max-w-2xl mx-auto mb-6">Berlangganan newsletter kami untuk mendapatkan promo, info gunung, dan tips pendakian langsung ke email Anda.</p>
            
            <form class="max-w-md mx-auto flex">
                <input type="email" placeholder="Alamat email Anda" class="flex-grow px-4 py-3 rounded-l-lg focus:outline-none text-gray-800">
                <button type="submit" class="bg-green-800 hover:bg-green-900 px-6 py-3 rounded-r-lg font-bold transition">
                    Berlangganan
                </button>
            </form>
        </div>
    </section>

<?php $this->load->view('templates/footer'); ?>