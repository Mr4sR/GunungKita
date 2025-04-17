<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendakian Gunung - Pesan Tiket Pendakian Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
        }

        .mountain-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .booking-form {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .animate-bounce-slow {
            animation: bounce 3s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <!-- Header/Navbar -->
    <header class="bg-green-800 text-white sticky top-0 z-50 shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fas fa-mountain text-2xl"></i>
                <h1 class="text-xl md:text-2xl font-bold">GunungKita</h1>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a href="#home" class="hover:text-green-200 transition">Beranda</a>
                <a href="#destinasi" class="hover:text-green-200 transition">Destinasi</a>
                <a href="#pesan" class="hover:text-green-200 transition">Pesan Tiket</a>
                <a href="#tentang" class="hover:text-green-200 transition">Tentang Kami</a>
                <?php if ($this->session->userdata('user')): ?>
                    <a href="<?= base_url('dashboard'); ?>" class="hover:text-green-200 transition">Dashboard</a>
                    <a href="<?= base_url('logout'); ?>" class="hover:text-green-200 transition">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                <?php else: ?>
                    <a href="<?= base_url('login'); ?>" class="hover:text-green-200 transition">Login</a>
                <?php endif; ?>
            </nav>
            <button class="md:hidden text-xl"> 
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>