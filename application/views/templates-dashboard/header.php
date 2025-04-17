<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="bg-gray-100">
    <header class="bg-green-800 text-white">
        <nav class="container mx-auto flex justify-between items-center py-4 px-6">
            <a href="<?= base_url('dashboard'); ?>" class="text-xl font-bold">GunungKita</a>
            <ul class="flex space-x-4">
                <li><a href="<?= base_url('logout'); ?>" class="flex items-center space-x-2 hover:underline"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
            </ul>
        </nav>
    </header>
    <div class="flex">
        <aside class="w-64 bg-gray-800 text-white h-screen">
            <ul class="space-y-2 p-4">
            <li><a href="<?= base_url('dashboard'); ?>" class="flex items-center space-x-2 hover:bg-gray-700 p-2 rounded <?= ($this->uri->segment(1) == 'dashboard') ? 'bg-gray-700' : ''; ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
            <li><a href="<?= base_url('pendakian'); ?>" class="flex items-center space-x-2 hover:bg-gray-700 p-2 rounded <?= ($this->uri->segment(1) == 'pendakian') ? 'bg-gray-700' : ''; ?>"><i class="fas fa-mountain"></i> <span>Pendakian</span></a></li>
            <li><a href="<?= base_url('laporan'); ?>" class="flex items-center space-x-2 hover:bg-gray-700 p-2 rounded <?= ($this->uri->segment(1) == 'laporan') ? 'bg-gray-700' : ''; ?>"><i class="fas fa-file-alt"></i> <span>Laporan</span></a></li>
            <li><a href="<?= base_url('settings'); ?>" class="flex items-center space-x-2 hover:bg-gray-700 p-2 rounded <?= ($this->uri->segment(1) == 'settings') ? 'bg-gray-700' : ''; ?>"><i class="fas fa-cog"></i> <span>Settings</span></a></li>
            </ul>
        </aside>
