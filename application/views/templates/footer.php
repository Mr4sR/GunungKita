    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-mountain text-2xl"></i>
                        <h3 class="text-xl font-bold">GunungKita</h3>
                    </div>
                    <p class="text-gray-400 mb-4">Platform pemesanan tiket pendakian gunung terpercaya di Indonesia.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition">Beranda</a></li>
                        <li><a href="#destinasi" class="text-gray-400 hover:text-white transition">Destinasi</a></li>
                        <li><a href="#pesan" class="text-gray-400 hover:text-white transition">Pesan Tiket</a></li>
                        <li><a href="#tentang" class="text-gray-400 hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Blog</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Layanan</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Pendakian Private</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Pendakian Grup</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Sewa Perlengkapan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Pelatihan Pendakian</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Trip Fotografi</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Kontak Kami</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-green-500"></i>
                            <span class="text-gray-400">Jl. Pendakian No. 123, Bandung, Jawa Barat</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt mt-1 mr-3 text-green-500"></i>
                            <span class="text-gray-400">0812-3456-7890</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3 text-green-500"></i>
                            <span class="text-gray-400">info@gunungkita.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-clock mt-1 mr-3 text-green-500"></i>
                            <span class="text-gray-400">Senin - Jumat: 08.00 - 17.00 WIB</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-6 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2023 GunungKita. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition">Kebijakan Privasi</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition">Syarat & Ketentuan</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition">FAQ</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <a href="https://wa.me/6281234567890" class="bg-green-600 hover:bg-green-700 text-white w-14 h-14 rounded-full flex items-center justify-center text-2xl shadow-lg transition-transform hover:scale-110">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-24 right-6 bg-gray-800 hover:bg-gray-700 text-white w-12 h-12 rounded-full flex items-center justify-center text-xl shadow-lg transition-opacity opacity-0 invisible z-50">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // FAQ Toggle
        document.querySelectorAll('.faq-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('i');
                
                content.classList.toggle('hidden');
                icon.classList.toggle('fa-chevron-down');
                icon.classList.toggle('fa-chevron-up');
            });
        });
        
        // Booking Form Submission
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const mountain = document.getElementById('mountain').value;
            const date = document.getElementById('date').value;
            const participants = document.getElementById('participants').value;
            
            if (!mountain || !date || !participants) {
                alert('Harap lengkapi semua data pemesanan!');
                return;
            }
            
            // In a real app, you would send this data to your backend
            alert(`Terima kasih! Pemesanan tiket pendakian ${mountain} untuk ${participants} orang pada tanggal ${date} berhasil diterima. Tim kami akan segera menghubungi Anda untuk konfirmasi.`);
            
            // Reset form
            this.reset();
        });
        
        // Back to Top Button
        const backToTopButton = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Set minimum date for booking (today + 3 days)
        const today = new Date();
        const minDate = new Date(today);
        minDate.setDate(today.getDate() + 3);
        
        const dd = String(minDate.getDate()).padStart(2, '0');
        const mm = String(minDate.getMonth() + 1).padStart(2, '0');
        const yyyy = minDate.getFullYear();
        
        document.getElementById('date').min = `${yyyy}-${mm}-${dd}`;
    </script>
</body>
</html>